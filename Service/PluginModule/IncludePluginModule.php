<?php

namespace Symforce\DiscuzBundle\Service\PluginModule;

use Symforce\DiscuzBundle\Service\Helper\ActionHelper ;

abstract class IncludePluginModule extends \Symforce\DiscuzBundle\Service\PluginModule {

    protected  $action_helpers  = array() ;
    protected  $action_default = null ;

    /**
     * @var \Symfony\Component\HttpFoundation\Request $request
     */
    protected $request ;

    /**
     * @var array
     */
    protected  $request_get ;

    public function compile( array & $config ) {
        $_config = $this->getPluginConfig() ;
        if( $_config ) {
            $config[]   = $_config ;
        }

        $_module_path   = sprintf('%s/../www/source/plugin/%s/%s.inc.php',  $this->_plugin_manager->getContainer()->getParameter('kernel.root_dir'),  $this->_plugin_manager->getPluginEntity()->identifier , $this->getIdentifier() ) ;
        $writer = new \CG\Generator\Writer();
        $writer
            ->write('<')
            ->writeln('?php')
            ->writeln("if(!defined('IN_DISCUZ')) exit('Access Denied');")
        ;
        $writer->writeln( sprintf('\Dev::getContainer()->get(%s)->dispatch();', json_encode( $this->getServiceId()))) ;

        \Dev::write_file($_module_path, $writer->getContent() ) ;
    }

    abstract protected function getPluginConfig() ;


    public function onLoad(\Symforce\DiscuzBundle\Service\PluginManager $pluginManager){

        parent::onLoad($pluginManager) ;

        if( empty($this->action_helpers) ) {
            $config     = new \Symforce\DiscuzBundle\Annotation\Action();
            $config->name = 'default' ;
            $config->title = $this->title ;
            $rc     = new \ReflectionObject($this) ;
            $method = $rc->getMethod('onDefaultAction') ;
            $this->action_helpers[  $config->name ] = new ActionHelper( $config, $method, $this );
        }
        if( ! $this->action_default ) {
            foreach($this->action_helpers as $name => $action_helper) {
                $this->action_default   = $name ;
                break ;
            }
        }
    }

    /**
     * @param string $url
     * @param int $status
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect($url, $status = 302)
    {
        return new \Symfony\Component\HttpFoundation\RedirectResponse($url, $status);
    }

    /**
     * @param string $template
     * @param array $content
     * @return string
     */
    final public function render($template, array $content = null ) {
        /**
         * @var $twig \Twig_Environment
         */
        $twig = \Dev::getContainer()->get('twig') ;
        if( !$content ) {
            $content    = array() ;
        }
        if( !isset($content['pm'] ) ) {
            $content['pm']  = $this ;
        }
        $content['_G']  = $GLOBALS['_G'] ;
        if( false === strpos($template, ':') && false === strpos($template, '\\') && false === strpos($template, '//') ) {
            $template   =  sprintf('%s:PluginModule:%s', $this->bundle_name, $template);
        }
        return $twig->render( $template, $content ) ;
    }

    final public function addAction(\Symforce\DiscuzBundle\Annotation\Action $config, \ReflectionMethod $method){

        if( $config->name ) {
            if( !preg_match('/^[a-zAZ\_][\_\w]*$/', $config->name) ) {
                throw new \Exception(sprintf("%s with @(%s) name(%s) invlaid",
                    \Dev::getMethodDeclaring($method) ,
                    get_class(($config)) ,
                    json_encode($config->name)
                ));
            }
        } else {
            $config->name = strtolower(  preg_replace('/^on|Action$/', '', $method->getName() )  ) ;
        }
        if( isset($this->action_helpers[ $config->name ]) ) {
            throw new \Exception(sprintf("%s with @(%s) name(%s) duplicate with %s ",
                \Dev::getMethodDeclaring($method) ,
                get_class(($config)) ,
                json_encode( $config->name ) ,
                \Dev::getMethodDeclaring($this->action_helpers[ $config->name ]->method)
            ));
        }
        $this->action_helpers[ $config->name ]    = new ActionHelper($config, $method, $this ) ;

        if( $config->default ) {
            if( $this->action_default  ) {
                throw new \Exception(sprintf("%s with @(%s) default duplicate with %s ",
                    \Dev::getMethodDeclaring($method) ,
                    get_class(($config)) ,
                    \Dev::getMethodDeclaring($this->config_methods[ $this->action_default ]->method )
                ));
            }
            $this->action_default = $config->name ;
        }
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Request
     */
    final public function getRequest(){
        return $this->request ;
    }

    final public function getRequestGet(){
        return $this->request_get ;
    }

    final public function getActionHelpers(){
        return $this->action_helpers ;
    }

    /**
     * @param $name
     * @return ActionHelper
     */
    final public function getActionHelperByName($name) {
        return $this->action_helpers[$name] ;
    }

    protected function onDefaultAction(){
        return array() ;
    }


    public function getDispatchUrl(ActionHelper $helper, array $args = null ) {

        $dispatch_script    = $this->dispatch_script ;
        if( !$dispatch_script ) {
            $dispatch_script    = $this->dispatch_script  = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH ) ;
        }
        $get    = $this->request_get ;
        $get[ $this->dispatch_helper_param_name ] = $helper->config->name ;
        if( $args ) foreach($args as $key => $value ) {
            $get[$key] = $value ;
        }
        $url    =  $dispatch_script . '?' . http_build_query($get);
        return $url ;
    }


    /**
     * @var string
     */
    protected $dispatch_helper_param_name    = 'pmodaction' ;
    /**
     * @var array|null
     */
    protected $dispatch_params  ;

    /**
     * @var string
     */
    protected $dispatch_script ;

    /**
     * @var string
     */
    protected $dispatch_layout = 'AppForumBundle:PluginModule:layout_admin.html.twig' ;

    /**
     * @var bool
     */
    protected $dispatch_terminate = true ;

    /**
     * @return ActionHelper
     */
    protected function getDispatchHelper() {
        $this->request_get  = array() ;

        $dispatch_params    = $this->dispatch_params ;
        if( !$dispatch_params  ) {
            $dispatch_params    = array_keys($_GET) ;
        }

        foreach($dispatch_params as $_key) {
            $this->request_get[ $_key ] = $this->request->get($_key, null ) ;
        }

        $this->request_get[ $this->dispatch_helper_param_name ]  = $this->request->get( $this->dispatch_helper_param_name , null ) ;

        if( !$this->request_get[ $this->dispatch_helper_param_name ] ) {
            $this->request_get[ $this->dispatch_helper_param_name] = $this->action_default ;
        }

        $helper = $this->getActionHelperByName( $this->request_get[ $this->dispatch_helper_param_name ] ) ;

        if( !$helper ) {
            throw new \Exception('big error!');
        }

        $helper->is_current_action  = true ;

        return $helper ;
    }

    final public function dispatch() {
        $this->_plugin_manager->connect() ;
        $this->request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

        $helper = $this->getDispatchHelper() ;
        $helper->is_current_action = true ;

        /**
         * @var $twig \Twig_Environment
         */
        $twig = $this->_container->get('twig') ;

        $twig->addFunction( new \Twig_SimpleFunction('_path', function(array $args, $action = null ) use( $helper) {
            if( $action ) {
                $helper = $this->getActionHelperByName($action) ;
            }
            return $this->getDispatchUrl($helper, $args) ;
        } , array(
            'is_safe' => array('html')
        ))) ;

        $helper->method->setAccessible(true) ;
        $response   = $helper->method->invoke( $this ) ;

        if( null === $response ) {
            $response   = array() ;
        }
        if( is_array($response) ) {
            $template =  $helper->config->template ;
            if( !$template ) {
                $template = sprintf('%s:PluginModule:%s_%s.html.twig', $this->bundle_name, $this->getName(), $helper->config->name ) ;
            }
            $response['app_pm_action_helper'] =  $helper ;
            $response['app_pm'] =  $this ;
            $response['app_pm_layout'] =  $this->dispatch_layout ;
            $_response_content   =   $this->render($template , $response) ;
            $response   = new \Symfony\Component\HttpFoundation\Response( $_response_content ) ;
        } else if( is_string($response) ) {
            $response   = new \Symfony\Component\HttpFoundation\Response( $response ) ;
        } if( !$response instanceof \Symfony\Component\HttpFoundation\Response ) {
            $rc     = new \ReflectionObject($this) ;
            $msg    = sprintf("The %s->%s  must return a Symfony\\Component\\HttpFoundation\\Response or array (%s given).", $rc->getName(), $helper->method->getName(), json_encode($response));
            throw new \LogicException($msg) ;
        }
        $response->send();

        if( $this->dispatch_terminate ) {
            exit ;
        }
    }


}