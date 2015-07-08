<?php

namespace Symforce\DiscuzBundle;


trait SymforceDiscuzDev {

    static private $_in_symfony_firewall ;

    static public function runApplication($env, $debug){
        if( self::$_container ) {
            throw new \Exception ;
        }
        $kernel = new AppKernel($env, $debug);
        $kernel->loadClassCache();
        $request    = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
        \Dev::Bootstrap($kernel, $request);
        $response = $kernel->handle($request);
        $response->send();
        $kernel->terminate($request, $response);
    }

    static public function isBooted() {
        return null !== self::$_container ;
    }

    static public function isInSymfonyFirewall(){
        if( null !== self::$_container  ) {
            throw new \Exception ;
        }
        return self::$_in_symfony_firewall ;
    }

    static public function Bootstrap( \AppKernel $kernel , \Symfony\Component\HttpFoundation\Request $request = null){
        if( null !== self::$_container  ) {
            throw new \Exception ;
        }

        $kernel->boot() ;
        self::$_container   = $kernel->getContainer() ;
        if( self::$_container->getParameter('sf.bbs.plugin.enabled') ) {
            self::$_container->get('sf.bbs.plugin_manager')->setup() ;
        }

        if( $request ) {
            self::$_in_symfony_firewall = true ;
        } else {
            self::$_in_symfony_firewall = false ;
            $request   = \Symfony\Component\HttpFoundation\Request::createFromGlobals() ;
        }

        self::setCacheValue('request', $request ) ;

        return $kernel ;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Request
     */
    static public function  getRequest(){
        return self::getCacheValue('request') ;
    }

    /**
     * @return \discuz_application
     */
    static public function getDiscuzApplication() {
        /**
         * @var $discuz \discuz_application
         */
        static $discuz ;
        if( null === $discuz ) {
            if( !self::isBooted() ) {
                throw new \Exception ;
            }
            if( self::$_in_symfony_firewall ) {
                include  __DIR__ . '/../www/source/class/class_core.php';
            }
            $discuz = \C::app();
            $discuz->init();
        }
        return $discuz ;
    }

    /**
     * @return \discuz_session
     */
    static public function getDiscuzSession() {
        return self::getDiscuzApplication()->session ;
    }

    static public function setDiscuzAdmincp(\discuz_admincp $admincp){
        global $_G ;
        if( !self::hasCacheValue('discuz_admincp') ) {
            self::setCacheValue('discuz_admincp', $admincp) ;
            $_G['cookie']['checkpatch'] = 0 ;
            // $_G['cookie']['addoncheck_plugin'] = '' ;
        } else {
            throw new \Exception( sprintf("%s::%s should be call once", __CLASS__, __FUNCTION__) ) ;
        }
    }
}