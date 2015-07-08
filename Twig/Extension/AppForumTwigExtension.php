<?php

namespace Symforce\DiscuzBundle\Twig\Extension;

use JMS\DiExtraBundle\Annotation as DI;

use CG\Core\ClassUtils;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @DI\Service("app.twig.extension")
 * @DI\Tag("twig.extension")
 */
final class AppForumTwigExtension extends \Twig_Extension implements \Symfony\Component\DependencyInjection\ContainerAwareInterface
{
    private $loader;

    /**
     * @var ContainerInterface
     */
    private $container ;


    /**
     * @var bool
     */
    private $debug ;

    /**
     * @var \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    private $accessor ;


    /**
     * @var bool
     */
    private  $cache = array() ;

    /**
     * @var \Symfony\Component\Filesystem\Filesystem
     */
    private $file_system ;

    /**
     * @param \Twig_LoaderInterface $loader
     * @DI\InjectParams({
     *     "loader" = @DI\Inject("twig.loader")
     * })
     */
    public function __construct(\Twig_LoaderInterface $loader)
    {
        $this->loader = $loader;
        $this->accessor = \Symfony\Component\PropertyAccess\PropertyAccess::createPropertyAccessor() ;
    }

    /**
     * @DI\InjectParams({
     *     "container" = @DI\Inject("service_container")
     * })
     */
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container ;
        $this->debug    = $container->getParameter('kernel.debug') ;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'bbs_template'   => new \Twig_Function_Method($this, 'bbs_template', array(
                    'is_safe' => array('html') ,
                ) ) ,
            'bbs_twig_template'   => new \Twig_Function_Method($this, 'bbs_twig_template', array(
                    'needs_environment'     => true ,
                    'is_safe' => array('html') ,
                ) ) ,
            'bbs_lang' => new \Twig_Function_Method($this, 'bbs_lang', array(
                    'needs_environment'     => true ,
                    'is_safe' => array('html') ,
                )) ,
            'set_lazy_block'   => new \Twig_Function_Method($this, 'set_lazy_block', array(
                    'needs_context'     => true ,
                ) ) ,
            '_g' => new \Twig_Function_Method($this, 'get_global_var') ,
            '_s' => new \Twig_Function_Method($this, 'set_global_var') ,
            '_p' => new \Twig_Function_Method($this, 'get_property_by_var') ,

            '_fn' => new \Twig_Function_Method($this, 'call_global_function') ,
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            '_p' => new \Twig_Filter_Method($this, 'get_property_by_var') ,
        );
    }

    public function set_lazy_block(array & $context, \Twig_Template $tpl, $name, $key ) {
        if( empty($key) || !is_string($key) ) {
            throw new \Exception( sprintf("key(%s) must be string",  json_encode($key)));
        }
        \Dev::shareCacheValue($key, function($app) use( & $context, & $tpl, $name ) {
            $tpl->displayBlock($name , $context) ;
        } ) ;
    }

    public function bbs_template($file, $templateid = 0, $tpldir = '', $gettplfile = 0, $primaltpl='' ){
        $this->cache['file'] = $file ;
        $this->cache['templateid'] = $templateid ;
        $this->cache['tpldir'] = $tpldir ;
        $this->cache['gettplfile'] = $gettplfile ;
        $this->cache['primaltpl'] = $primaltpl ;
        extract($GLOBALS, EXTR_REFS );
        include template( $this->cache['file'], $this->cache['templateid'], $this->cache['tpldir'], $this->cache['gettplfile'], $this->cache['primaltpl'] ) ;
    }

    public function bbs_twig_template(\Twig_Environment $env, $file, $path, $templateid = 0 ) {
        /**
         * @var $loader \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
         */
        $loader = $env->getLoader() ;
        $tplfile = $loader->getCacheKey($file) ;
        if( null === $this->file_system ) {
            $this->file_system = new \Symfony\Component\Filesystem\Filesystem() ;
        }
        $tplfile    = rtrim( $this->file_system->makePathRelative($tplfile, DISCUZ_ROOT), '/' ) ;
        if( empty($path) || !is_string($path) ) {
            throw new \Exception( sprintf("path(%s) must be string",  json_encode($path)));
        }
        $this->cache['app_template_cache_file'] = './data/template/'.(defined('STYLEID') ? STYLEID.'_' : '_').$templateid.'_'. preg_replace('/\W/', '_', $file).'.tpl.php' ;
        $tpldir = './template/default' ;
        $_pos = strpos( $path, ':' )  ;
        if( false !== $_pos ) {
            if( $_pos !== strrpos( $path, ':' ) ) {
                throw new \Exception( sprintf('not implement locate plugin tempalte dir:%s', $path) );
            }
            $tpldir = sprintf('./source/plugin/%s/template', substr($path, 0, $_pos) ) ;
        }
        checktplrefresh($tplfile, $tplfile, @filemtime( DISCUZ_ROOT .  $this->cache['app_template_cache_file'] ), $templateid,  $this->cache['app_template_cache_file'], $tpldir, $path );
        unset($tplfile, $tpldir, $loader, $env, $path, $templateid, $_pos ) ;
        extract($GLOBALS, EXTR_REFS ) ;
        include DISCUZ_ROOT .  $this->cache['app_template_cache_file'] ;
    }

    public function bbs_lang(\Twig_Environment $env, $root){
        return new \Symforce\DiscuzBundle\Discuz\Lang\DiscuzLangWrapper($env, $root) ;
    }


    public  function get_property_by_var($var, $path , $default = null , $throw = false){
        try {
            $default    = $this->accessor->getValue($var, $path) ;
        } catch (\Symfony\Component\PropertyAccess\Exception\NoSuchPropertyException $ex) {
            if( $throw ) {
                throw $ex ;
            }
        } catch(\Symfony\Component\PropertyAccess\Exception\UnexpectedTypeException $ex) {
            if( $throw ) {
                throw $ex ;
            }
        } catch (\Exception $ex) {
            if( $throw || $this->debug ) {
                throw $ex ;
            }
        }
        return $default ;
    }

    private function fix_global_path( $path ) {
        static $cached = array() ;
        if( !$path || '' === $path ) {
            throw new \Exception("can not use null path");
        }
        $c  = ord($path[0]) ;
        if( !($c >= 97 && $c <= 122 || $c >= 65 && $c <= 90 || $c === 95) ) {
            return $path ;
        }
        if( isset($cached[$path]) ) {
            return $cached[$path] ;
        }
        $_path = preg_replace('/^\w+/s', '[\\0]', $path) ;
        $cached[$path] = $_path ;
        return $_path ;
    }

    public function & get_global_var( $path , $default = null , $throw = false )
    {
        try{
            if( ctype_alnum($path) ) {
                if(  isset($GLOBALS[$path]) ) {
                    return $GLOBALS[$path] ;
                }
                if( $throw ) {
                    throw new \Exception( sprintf('`%s` not exists!', $path ));
                }
                return $default ;
            } else {
                $path = $this->fix_global_path( $path ) ;
            }
            $default    = $this->accessor->getValue($GLOBALS, $path) ;
        } catch (\Symfony\Component\PropertyAccess\Exception\NoSuchPropertyException $ex) {
            if( $throw ) {
                $msg    = sprintf('access $GLOBALS%s error: %s', $path, $ex->getMessage() );
                throw new \Exception($msg, 0, $ex) ;
            }
        } catch(\Symfony\Component\PropertyAccess\Exception\UnexpectedTypeException $ex) {
            if( $throw ) {
                $msg    = sprintf('access $GLOBALS%s error: %s', $path, $ex->getMessage() );
                throw new \Exception($msg, 0, $ex) ;
            }
        } catch (\Exception $ex) {
            if( $throw || $this->debug ) {
                throw $ex ;
            }
        }
        return $default ;
    }

    public function set_global_var( $path , $value , $return = false)
    {
        if( ctype_alnum($path) ) {
            $GLOBALS[$path] = $value ;
        } else {
            $path = $this->fix_global_path( $path ) ;
            $this->accessor->setValue($GLOBALS, $path, $value) ;
        }
        if( $return ) {
            return $value ;
        }
    }

    public function & call_global_function()
    {
        $args   = func_get_args() ;
        if( empty($args) ) {
            throw new \Exception('no function to call');
        }
        $fn = array_shift($args) ;
        $_pos = strpos($fn, ':') ;
        if( false !== $_pos && $_pos > 0 && $_pos+1 === strrpos($fn, ':') ) {
            list($class, $method) = explode('::', $fn) ;
            if( !class_exists($class)  ) {
                throw new \Exception(sprintf('class `%s` not exists!', $class));
            }
            $rc = new \ReflectionClass($class) ;
            if( !$rc->hasMethod($method) ) {
                throw new \Exception(sprintf('class `%s` method `%s` not exists!', $class, $method ));
            }
            $_method = $rc->getMethod($method) ;
            if( !$_method->isStatic() ) {
                throw new \Exception(sprintf('class `%s` method `%s` is not static!', $class, $method ));
            }
            if( !$_method->isPublic() ) {
                throw new \Exception(sprintf('class `%s` method `%s` is not public!', $class, $method ));
            }
            return call_user_func_array($fn, $args);
        }

        if( !function_exists($fn) ) {
            throw new \Exception(sprintf('function `%s` not exists!', $fn));
        }
        return call_user_func_array($fn, $args);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'app.bbs';
    }
}