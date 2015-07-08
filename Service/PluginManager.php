<?php

namespace Symforce\DiscuzBundle\Service;

use Acme\DemoBundle\Command\HelloWorldCommand;
use JMS\DiExtraBundle\Annotation as DI;

use Symforce\DiscuzBundle\Service\Helper\EmbedHelper ;
use Symforce\DiscuzBundle\Service\Helper\ActionHelper ;

/**
 * @DI\Service("sf.bbs.plugin_manager")
 */
class PluginManager {

    const ENTITY_CLASS_PLUGIN   = 'App\\ForumBundle\\Entity\Plugin' ;
    const PM_BASE_CLASS   = 'App\\ForumBundle\\Service\\PluginModule' ;
    const PM_ANNOTATION_ACTION = 'App\\ForumBundle\\Annotation\\Action' ;
    const PM_ANNOTATION_EMBED = 'App\\ForumBundle\\Annotation\\Embed' ;


    /**
     * @var \Symfony\Component\DependencyInjection\Container
     */
    private $_container ;

    /**
     * @var array
     */
    private $_modules = array() ;

    /**
     * @var \Symforce\DiscuzBundle\Entity\Plugin
     */
    private $_plugin_entity ;

    private $_plugin_modules_types = array() ;

    private $_connected ;

    private $_clear_cache_on_connected ;

    /**
     * @var \Doctrine\Common\Annotations\FileCacheReader
     */
    private $_reader ;

    /**
     * @var array()
     */
    private $_embed_helpers = array() ;

    /**
     * @DI\InjectParams({
     *     "container" = @DI\Inject("service_container") ,
     * })
     */
    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container) {
        $this->_container   = $container ;

        $lang_admincp_file = $this->_container->getParameter('kernel.root_dir') . '/../www/source/language/lang_admincp.php' ;
        if( !file_exists($lang_admincp_file) ) {
            throw new \Exception(sprintf("file `%s` not exists!", $lang_admincp_file));
        }
        $data   = file_get_contents($lang_admincp_file) ;
        if( !preg_match_all('/\s*\'plugins_edit_modules_type_(\d+)\'\s*\=\>\s*\'(.+)\'\s*,/', $data, $ms) ) {
            throw new \Exception(sprintf("file `%s` not valid!", $lang_admincp_file));
        }

        $map    = array() ;
        foreach($ms[1] as $i => $id ) {
            $name = $ms[2][$i] ;
            if( isset($map[$name]) ) {
                throw new \Exception("big error");
            }
            $map[$name] = $id ;
        }
        $this->_plugin_modules_types = $map ;

        $this->_reader  = $container->get('annotation_reader');
    }

    /**
     * @return \Symforce\DiscuzBundle\Entity\Plugin
     */
    public function getPluginEntity(){
        return $this->_plugin_entity ;
    }


    public function addPlugin(PluginModule $pluginModule, $plugin_service_id ) {

        $pluginModule->setServiceId( $plugin_service_id ) ;

        $name   = $pluginModule->getName() ;
        $rc1    = new \ReflectionObject($pluginModule) ;

        $parent = $rc1->getParentClass() ;

        if( !$parent  || self::PM_BASE_CLASS === $parent->getName() || !is_subclass_of( $pluginModule, self::PM_BASE_CLASS ) ) {
            throw new \Exception( sprintf("sf.bbs.plugin.module invalid name(%s) on class(%s) file(%s) must extends %s\\*", $name ,
                $rc1->getName(),
                $rc1->getFileName() ,
                self::PM_BASE_CLASS
            )  );
        }

        if( !preg_match('/^[a-z][a-z0-9\_]+$/', $name) ) {
            throw new \Exception( sprintf("sf.bbs.plugin.module invalid name(%s) on class(%s) file(%s)", $name ,
                $rc1->getName(),
                $rc1->getFileName()
            )  );
        }

        if( isset( $this->_modules[ $name ]) ) {
            $rc2    = new \ReflectionObject( $this->_modules[ $name ] ) ;
            throw new \Exception( sprintf("sf.bbs.plugin.module(%s) duplicate for class(%s,%s), file(%s,%s)", $name ,
                $rc1->getName(), $rc2->getName(),
                $rc1->getFileName(), $rc2->getFileName()
            )  );
        }
        $type   = $pluginModule->getType() ;
        if( $type && !isset($this->_plugin_modules_types[$type]) ) {
            throw new \Exception( sprintf(
                "sf.bbs.plugin.module(name: %s,\n class: %s,\n file: %s) \n type(%s) is invalid, available values ( %s ) ",
                $name ,
                $rc1->getName(),
                $rc1->getFileName(),
                json_encode($type),
                join(', ', array_keys($this->_plugin_modules_types))
            )  );
        }

        /**
         * @var $m \ReflectionMethod
         */
        foreach($rc1->getMethods() as $m) {
            $as = $this->_reader->getMethodAnnotations($m) ;
            $_as = array() ;
            foreach($as as $_an) {
                if( $_an instanceof \Symforce\DiscuzBundle\Annotation\AbstractAnnotation ) {
                    $_an_class  = get_class($_an) ;
                    if( $_an instanceof \Symforce\DiscuzBundle\Annotation\AbstractMultiple ) {
                        $key    = $this->getMultipleKeyValue() ;
                        if( isset($_as[$_an_class][$key]) ) {
                            throw new \Exception( sprintf("class:%s method:%s, file: %s, line:%s annotations(%s) duplicate(%s)",
                                $rc1->getName(), $m->getName(), $rc1->getFileName(), $m->getStartLine(),
                                 $_an_class, $key ));
                        }
                        $_as[$_an_class][$key] = $_an ;
                    } else {
                        if( isset($_as[$_an_class]) ) {
                            throw new \Exception( sprintf("class:%s method:%s, file: %s, line:%s annotations(%s) duplicate",
                                $rc1->getName(), $m->getName(), $rc1->getFileName(), $m->getStartLine(),
                                $_an_class ));
                        }
                        $_as[$_an_class] = $_an ;
                    }
                }
            }
            if( empty($_as) ) {
                continue ;
            }
            foreach($_as as $_an ) {
                $_an->checkMethod($m) ;
            }
            if( isset($_as[self::PM_ANNOTATION_ACTION]) ) {
                $pluginModule->addAction($_as[self::PM_ANNOTATION_ACTION], $m ) ;
            }
            if( isset($_as[self::PM_ANNOTATION_EMBED]) ) {
                $_an = $_as[self::PM_ANNOTATION_EMBED] ;
                if( $_an instanceof \Symforce\DiscuzBundle\Annotation\Embed ) {
                    $_embed_helper  = new EmbedHelper($_an, $m, $pluginModule) ;
                    if( isset($this->_embed_helpers[$_an->type][ $_an->method ]) ) {
                        $_other_embed_helper    = $this->_embed_helpers[$_an->type][ $_an->method ][0] ;
                        if( $_embed_helper->code !== $_other_embed_helper->code ) {
                            throw new \Exception( sprintf("@(%s, method=%s) parameters conflict(%s, %s)",
                                $_an_class,
                                $_an->method,
                                \Dev::getMethodDeclaring($m) ,
                                \Dev::getMethodDeclaring( $_other_embed_helper->method)));
                        }
                    }
                    $this->_embed_helpers[ $_an->type][$_an->method][]   = $_embed_helper ;
                }
            }
        }
        $bundle_name   = preg_replace('/^(\/.+)\/([A-Z]\w+)\/([A-Z]\w+Bundle)\/.+$/', '\\2\\3', $rc1->getFileName() ) ;
        $pluginModule->setBundleName( $bundle_name ) ;
        $this->_modules[ $name ] = $pluginModule ;
        $pluginModule->setContainer($this->_container) ;
        $pluginModule->onLoad( $this ) ;
    }

    public function setup() {
        if( null !== $this->_plugin_entity  ) {
            throw new \Exception('big error!');
        }

        if( !$this->_container->getParameter('sf.bbs.plugin.enabled') ) {
            return ;
        }

        /**
         * @var $em \Doctrine\ORM\EntityManager
         */
        $em = $this->_container->get('doctrine')->getManager() ;

        /*
        $all =  $em->getRepository(self::ENTITY_CLASS_PLUGIN)->findAll();
        $_types = array_flip($this->_plugin_modules_types);
        foreach($all as $it) {
            $aa = $it->getPluginModules() ;
            echo '// ', $it->name , ', ', $it->identifier, ', ', $it->directory, "\n";
            foreach($aa as $i => $_aa){
                if( is_integer($i) ) {
                    echo "\t  --> name=", $_aa['name']  ;

                    if( $_types[ $_aa['type'] ] ) {
                        echo ', type=(', $_aa['type'] , ', ',  $_types[ $_aa['type'] ], ')' ;
                    } else {
                        echo ', type=', $_aa['type'] ;
                    }

                    if( isset($_aa['menu']) && !empty($_aa['menu']) ) {
                        echo ', menu=',  strip_tags($_aa['menu']) ;
                    }
                    if( isset($_aa['adminid']) && $_aa['adminid'] ) {
                        echo ', adminid=',  $_aa['adminid'] ;
                    }
                    if( isset($_aa['url']) && $_aa['url'] ) {
                        echo ', url=',  $_aa['url'] ;
                    }
                    echo "\n";
                }
            }
        }
        */

        $this->_plugin_entity    = $em->getRepository(self::ENTITY_CLASS_PLUGIN)->findOneBy( array(
            'identifier'    => 'sfapp' ,
        ));

        if( !$this->_plugin_entity ) {
            $app    = new \Symforce\DiscuzBundle\Entity\Plugin() ;
            $app->name      = 'Symfony' ;
            $app->identifier    = 'sfapp' ;
            $app->directory      = 'sfapp/' ;
            $app->available = 1 ;
            $app->adminid = 1 ;
            $app->copyright = 'Weststar Inc.';
            $app->version = '1.0' ;
            $this->_plugin_entity  = $app ;
        }

        /**
         * @var $plugin_module PluginModule
         */
        foreach($this->_modules as $plugin_module) {
            $plugin_module->setup() ;
        }

        $modules = $this->_modules ;
        usort($modules, function(PluginModule $a, PluginModule $b){
            $_a = $a->getOrder() ;
            $_b = $b->getOrder() ;
            if( $_a !== null && $_b === null ) {
                return true ;
            }
            if( $_a === null && $_b !== null ) {
                return false ;
            }
            if( $_a !== null && $_b !== null ) {
                return $_a > $_b ;
            }
            $_a     = $a->getName() ;
            $_b     = $b->getName() ;
            return strcmp($_a, $_b) ;
        });

        $plugin_name    = $this->_plugin_entity->identifier ;
        $_modules_array    = array() ;
        $embed_types   = array( '页面嵌入 - 普通版', '页面嵌入 - 手机版' );
        foreach($embed_types as $_embed_type ) {
            $_modules_array[]   =
                array(
                    'name'  => $plugin_name  ,
                    'param' => '' ,
                    'menu'  => '' ,
                    'url'   => '' ,
                    'type'  => $this->_plugin_modules_types[$_embed_type]  ,
                    'adminid' => 0 ,
                    'displayorder'  => 0 ,
                    'navtitle'  => '' ,
                    'navicon'   => '' ,
                    'navsubname'    =>  '' ,
                    'navsuburl' => ''  ,
                ) ;
        }

        $writer  = new \CG\Generator\Writer() ;
        $writer
            ->write('<')
            ->writeln('?php')
            ->writeln("if(!defined('IN_DISCUZ')) exit('Access Denied');")
            ->writeln('\\Dev::getContainer()->get("sf.bbs.plugin_manager")->connect();')
        ;
        foreach($this->_embed_helpers as $group => $group_hellers) {
            $writer->writeln( sprintf("\n// %s", $group)) ;
            $group_class_name   = sprintf('plugin_%s', $plugin_name ) ;
            $group_parent_class_name   = null ;
            if( $group !== 'common' ) {
                $group_class_name   = sprintf('plugin_%s_%s', $plugin_name, $group ) ;
                $group_parent_class_name   = sprintf('plugin_%s', $plugin_name ) ;
                if( 'mobile_common' === $group ) {
                    $group_class_name = sprintf('mobileplugin_%s', $plugin_name) ;
                    $group_parent_class_name   = null ;
                } else if( 'mobile_forum' === $group ) {
                    $group_class_name = sprintf('mobileplugin_%s_forum', $plugin_name) ;
                    $group_parent_class_name = sprintf('mobileplugin_%s', $plugin_name) ;
                } else if( 'mobile_member' === $group ) {
                    $group_class_name = sprintf('mobileplugin_%s_member', $plugin_name) ;
                    $group_parent_class_name = sprintf('mobileplugin_%s', $plugin_name) ;
                }
            }

            $writer
                ->write('class ')
                ->write($group_class_name)
                ;
            if( $group_parent_class_name ) {
                $writer
                    ->write(' extends ')
                    ->write($group_parent_class_name)
                ;
            }
            $writer
                ->writeln(" {\n")
                ->indent()
            ;

            foreach($group_hellers as $_embed_function_name => $helpers ) {
                usort($helpers, function(EmbedHelper $a, EmbedHelper $b) {
                    $_a = $a->config->order ;
                    $_b = $b->config->order ;
                    if( $_a !== null && $_b === null ) {
                        return true ;
                    }
                    if( $_a === null && $_b !== null ) {
                        return false ;
                    }
                    if( $_a !== null && $_b !== null ) {
                        return $_a > $_b ;
                    }
                    $_a     = $a->method->getName() ;
                    $_b     = $b->method->getName() ;
                    return strcmp($_a, $_b) ;
                });
                /**
                 * @var $_embed_helper EmbedHelper
                 */
                $_embed_helper = $helpers[0] ;

                if( $_embed_function_name === $group_class_name ) {
                    throw new \Exception( sprintf("%s with @(%s, method=%s) can not be construct",
                        \Dev::getMethodDeclaring($_embed_helper->method) ,
                        get_class($_embed_helper->config) ,
                        $_embed_function_name
                    ));
                }
                $writer
                    ->writeln( sprintf('function %s%s {', $_embed_function_name, $_embed_helper->code ))
                    ->indent()
                    ;
                $_embed_function_count   = count($helpers) ;
                $_embed_function_parameters = $_embed_helper->method->getParameters() ;
                $_embed_function_parameters_count = count( $_embed_function_parameters ) ;
                if( $_embed_function_count > 1 ) {
                    $writer->writeln('$cache = array();') ;
                }
                foreach($helpers as $_embed_helper) {
                    if( $_embed_function_count > 1 ) {
                        $writer->write('$cache[] = ') ;
                    } else {
                        $writer->write('return ') ;
                    }
                    $writer->write( sprintf('\Dev::getContainer()->get(%s)->%s(', json_encode( $_embed_helper->plugin_module->getServiceId()), $_embed_function_name ));
                    foreach($_embed_function_parameters as $_embed_function_parameter_index => $_embed_function_parameter){
                        $writer
                            ->write('$')
                            ->write($_embed_function_parameter->getName())
                            ;
                        if( $_embed_function_parameter_index < $_embed_function_parameters_count -1 ) {
                            $writer->write(', ') ;
                        }
                    }
                    $writer->writeln(');');
                }
                if( $_embed_function_count > 1 ) {
                    $writer->writeln( 'return \Dev::getContainer()->get("sf.bbs.plugin_manager")->getMergedEmbedFunctionReturnValues($cache);');
                }
                $writer
                    ->outdent()
                    ->writeln("}\n") ;
            }
            $writer
                ->outdent()
                ->writeln("}") ;
        }

        $plugin_file    = sprintf('%s/../www/source/plugin/%s/%s.class.php', $this->_container->getParameter('kernel.root_dir'), $plugin_name, $plugin_name ) ;
        $this->_clear_cache_on_connected  = \Dev::write_file($plugin_file, $writer->getContent() ) ;

        foreach($modules as $plugin_module ) {
            $plugin_module->compile( $_modules_array ) ;
        }

        if( $this->_container->getParameter('sf.bbs.plugin.debug') ) {
            $_modules_array['system']  = 2 ;
        }
        $_modules_array['extra'] = array(
            'installtype'   => '' ,
            'langexists' => 0
        ) ;

        if( serialize( $_modules_array ) !== $this->_plugin_entity->modules ) {
            $this->_plugin_entity->setPluginModules($_modules_array) ;
            $em->persist($this->_plugin_entity);
            $em->flush() ;
            $this->_clear_cache_on_connected   = true ;
        }

    }

    final public function getPluginModuleTypeId(PluginModule $module) {
        return $this->_plugin_modules_types[ $module->getType() ] ;
    }

    final public function connect() {
        if( $this->_connected ) {
            return  ;
        }

        if( $this->_clear_cache_on_connected ) {
            include_once libfile('function_cache', 'function');
            updatecache(array('plugin', 'setting', 'styles'));
            cleartemplatecache();
            cleartemplatecache();
        }

        /**
         * @var $security_context \Symfony\Component\Security\Core\SecurityContext
         */
        $security_context = $this->_container->get('security.context') ;

        global $_G ;

        if( isset($_G['uid']) && $_G['uid'] > 0 && $_G['uid'] < 0x7fffffff ) {
            $em = $this->_container->get('doctrine')->getManager() ;
            /**
             * @var $user \Symforce\DiscuzBundle\Entity\User
             */
            $user = $em->getRepository('App\\AdminBundle\\Entity\\User')->find($_G['uid']) ;
            if( !$user ) {
                throw new \Exception( sprintf('user(id=%s) not exists!', $_G['uid'])) ;
            }
            $user->setupDiscuzRoles($em, $_G);

            $token = new \App\AdminBundle\Security\Authentication\Token\UserToken() ;
            $token->setUser($user) ;
            $token->setUserId( $user->getId() ) ;
            $security_context->setToken( $token ) ;
        }

        $request    = \Dev::getRequest() ;

        if( $request->query->has('debug') && 0 ) {
            /**
             * @var $http_kernel \Symfony\Component\HttpKernel\HttpKernel
             */
            $http_kernel = $this->_container->get('http_kernel') ;
            $event = new \Symfony\Component\HttpKernel\Event\GetResponseEvent($http_kernel, $request, \Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST ) ;

            $rc = new \ReflectionObject($http_kernel) ;
            $rp = $rc->getProperty('dispatcher');
            $rp->setAccessible(true) ;
            /**
             * @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface
             */
            $dispatcher = $rp->getValue( $http_kernel ) ;
            $dispatcher->dispatch(\Symfony\Component\HttpKernel\KernelEvents::REQUEST, $event);

        }

        if( $this->_container->getParameter('kernel.debug') ) {
            if( $request->query->has('debug_dump')  ) {
                $debug  = $request->query->get('debug_dump')  ;
                if( strrpos($debug, '[') !== false ) {
                    $accessor  = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, true ) ;
                    $value = $accessor->getValue($GLOBALS, $debug ) ;
                    \Dev::dump($value);
                    exit;
                }
            }
        }

        /**
         * @var $plugin_module PluginModule
         */
        foreach($this->_modules as $plugin_module) {
            $plugin_module->connect() ;
        }
        $this->_connected   = true ;

    }

    /**
     * @return \Symfony\Component\DependencyInjection\Container
     */
    final public function getContainer(){
        return $this->_container ;
    }

    final function getMergedEmbedFunctionReturnValues(array & $cache){
        $array  = array() ;
        $string = null ;
        foreach($cache as $_value ) {
            if( null === $_value ) {
                continue ;
            }
            if( is_string($_value) ) {
                $string .= $_value ;
            } else  {
                throw new \Exception( sprintf('unimplement'));
            }
        }
        return $string ;
    }
} 