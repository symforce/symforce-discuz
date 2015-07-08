<?php

namespace Symforce\DiscuzBundle\Service;

use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service("sf.bbs.config_manager")
 */
final class ConfigManager {

    /**
     * @var \Symfony\Component\DependencyInjection\Container
     */
    private $_container ;

    /**
     * @DI\InjectParams({
     *     "container" = @DI\Inject("service_container") ,
     * })
     */
    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container) {
        $this->_container   = $container ;
    }

    private function getWebHost(){
        $host = $this->_container->getParameter('app.web_host') ;
        if( isset($_SERVER['HTTP_HOST']) ) {
            $host   = 'http://' . $_SERVER['HTTP_HOST'] ;
        }
        return $host ;
    }

    public function setGlobalConfiguration(array & $_config) {

        // ----------------------------  CONFIG DB  ----------------------------- //
        $_config['db']['1']['dbhost'] = $this->_container->getParameter('database_host') ;
        $_config['db']['1']['dbuser'] = $this->_container->getParameter('database_user') ;
        $_config['db']['1']['dbpw'] = $this->_container->getParameter('database_password') ;
        $_config['db']['1']['dbcharset'] = 'utf8';
        $_config['db']['1']['pconnect'] = '0';
        $_config['db']['1']['dbname'] = $this->_container->getParameter('database_name') ;
        $_config['db']['1']['tablepre'] = 'pre_';
        $_config['db']['slave'] = '';
        $_config['db']['common']['slave_except_table'] = '';

        // --------------------------  CONFIG MEMORY  --------------------------- //
        $_config['memory']['prefix'] = 'b9jQEC_';
        $_config['memory']['redis']['server'] = '';
        $_config['memory']['redis']['port'] = 6379;
        $_config['memory']['redis']['pconnect'] = 1;
        $_config['memory']['redis']['timeout'] = '0';
        $_config['memory']['redis']['requirepass'] = '';
        $_config['memory']['redis']['serializer'] = 1;
        $_config['memory']['memcache']['server'] = '';
        $_config['memory']['memcache']['port'] = 11211;
        $_config['memory']['memcache']['pconnect'] = 1;
        $_config['memory']['memcache']['timeout'] = 1;
        $_config['memory']['apc'] = 1;
        $_config['memory']['xcache'] = 1;
        $_config['memory']['eaccelerator'] = 1;
        $_config['memory']['wincache'] = 1;

        // --------------------------  CONFIG SERVER  --------------------------- //
        $_config['server']['id'] = 1;

        // --------------------------  CONFIG OUTPUT  --------------------------- //
        $_config['output']['charset'] = 'utf-8';
        $_config['output']['forceheader'] = 1;
        $_config['output']['gzip'] = '0';
        $_config['output']['tplrefresh'] = 1;
        $_config['output']['language'] = 'zh_cn';
        $_config['output']['staticurl'] = 'static/';
        $_config['output']['ajaxvalidate'] = '0';
        $_config['output']['iecompatible'] = '0';

        // --------------------------  CONFIG COOKIE  --------------------------- //
        $_config['cookie']['cookiepre'] = 'ckY9_';
        $_config['cookie']['cookiedomain'] = '';
        $_config['cookie']['cookiepath'] = '/';

        // -------------------------  CONFIG SECURITY  -------------------------- //
        $_config['security']['authkey'] = $this->_container->getParameter('bbs_authkey') ;
        $_config['security']['urlxssdefend'] = 1;
        $_config['security']['attackevasive'] = '0';
        $_config['security']['querysafe']['status'] = 1;
        $_config['security']['querysafe']['dfunction']['0'] = 'load_file';
        $_config['security']['querysafe']['dfunction']['1'] = 'hex';
        $_config['security']['querysafe']['dfunction']['2'] = 'substring';
        $_config['security']['querysafe']['dfunction']['3'] = 'if';
        $_config['security']['querysafe']['dfunction']['4'] = 'ord';
        $_config['security']['querysafe']['dfunction']['5'] = 'char';
        $_config['security']['querysafe']['daction']['0'] = '@';
        $_config['security']['querysafe']['daction']['1'] = 'intooutfile';
        $_config['security']['querysafe']['daction']['2'] = 'intodumpfile';
        $_config['security']['querysafe']['daction']['3'] = 'unionselect';
        $_config['security']['querysafe']['daction']['4'] = '(select';
        $_config['security']['querysafe']['daction']['5'] = 'unionall';
        $_config['security']['querysafe']['daction']['6'] = 'uniondistinct';
        $_config['security']['querysafe']['dnote']['0'] = '/*';
        $_config['security']['querysafe']['dnote']['1'] = '*/';
        $_config['security']['querysafe']['dnote']['2'] = '#';
        $_config['security']['querysafe']['dnote']['3'] = '--';
        $_config['security']['querysafe']['dnote']['4'] = '"';
        $_config['security']['querysafe']['dlikehex'] = 1;
        $_config['security']['querysafe']['afullnote'] = '0';

        // --------------------------  CONFIG ADMINCP  -------------------------- //
        // -------- Founders: $_config['admincp']['founder'] = '1,2,3'; --------- //
        $_config['admincp']['founder'] = '1';
        $_config['admincp']['forcesecques'] = '0';
        $_config['admincp']['checkip'] = 1;
        $_config['admincp']['runquery'] = '0';
        $_config['admincp']['dbimport'] = 1;

        // ---------------------------  CONFIG INPUT  --------------------------- //
        $_config['input']['compatible'] = 1;

        $_config['remote']['on'] = 0;

        // ---------------------------  CONFIG Plugin Developer  --------------------------- //
        if ( $this->_container->getParameter('kernel.debug') ) {
            $_config['plugindeveloper'] = $this->_container->getParameter('sf.bbs.plugin.developer') ;
        }
    }

    public function setUserCenterConfiguration() {
        define('UC_CONNECT', 'mysql');
        define('UC_DBHOST',  $this->_container->getParameter('database_host') );
        define('UC_DBUSER',  $this->_container->getParameter('database_user') );
        define('UC_DBPW', $this->_container->getParameter('database_password') );

        define('UC_DBNAME', $this->_container->getParameter('database_name') );

        define('UC_DBCHARSET', 'utf8');

        define('UC_DBTABLEPRE',  sprintf('`%s`.pre_ucenter_', $this->_container->getParameter('database_name') ) ) ;
        define('UC_DBCONNECT', 0);

        define('UC_CHARSET', 'utf-8');
        define('UC_KEY',  $this->_container->getParameter('bbs_uc_key') );
        define('UC_APPID', '1');
        define('UC_IP', '');
        define('UC_PPP', 20);

        define('UC_API', sprintf('%s/uc_server', $this->getWebHost() ) );
    }

    public function setUserCenterServerConfiguration() {

        define('UC_DBHOST',  $this->_container->getParameter('database_host') );
        define('UC_DBUSER',   $this->_container->getParameter('database_user') );
        define('UC_DBPW',   $this->_container->getParameter('database_password') );
        define('UC_DBNAME', $this->_container->getParameter('database_name') );

        define('UC_DBTABLEPRE', 'pre_ucenter_');

        define('UC_DBCHARSET', 'utf8');
        define('UC_COOKIEPATH', '/');
        define('UC_COOKIEDOMAIN', '');
        define('UC_DBCONNECT', 0);
        define('UC_CHARSET', 'utf-8');

        define('UC_FOUNDERPW',  $this->_container->getParameter('bbs_ucs_found_pw') );
        define('UC_FOUNDERSALT',  $this->_container->getParameter('bbs_ucs_found_salt') );
        define('UC_KEY',  $this->_container->getParameter('bbs_ucs_key') );
        define('UC_SITEID', $this->_container->getParameter('bbs_ucs_site_id') );
        define('UC_MYKEY', $this->_container->getParameter('bbs_ucs_mykey') );

        define('UC_DEBUG', $this->_container->getParameter('kernel.debug') ) ;

        define('UC_PPP', 20);
    }
} 