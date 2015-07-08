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

    public function getGlobalConfiguration() {
        $_config = array() ;
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
        $_config['memory']['prefix'] = $this->_container->getParameter('sf.bbs.memory_prefix') ;
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

        // -------------------------  CONFIG DOWNLOAD  -------------------------- //
        $_config['download']['readmod'] = 2;
        $_config['download']['xsendfile']['type'] = '0';
        $_config['download']['xsendfile']['dir'] = '/down/';

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
        $_config['cookie']['cookiepre'] = $this->_container->getParameter('sf.bbs.cookiepre') ;
        $_config['cookie']['cookiedomain'] = '';
        $_config['cookie']['cookiepath'] = '/';

        // -------------------------  CONFIG SECURITY  -------------------------- //
        $_config['security']['authkey'] = $this->_container->getParameter('sf.bbs.security_authkey') ;
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

        // --------------------------  CONFIG REMOTE  --------------------------- //
        $_config['remote']['on'] = '0';
        $_config['remote']['dir'] = 'remote';
        $_config['remote']['appkey'] = $this->_container->getParameter('sf.bbs.remote_appkey') ;
        $_config['remote']['cron'] = '0';

        // ---------------------------  CONFIG INPUT  --------------------------- //
        $_config['input']['compatible'] = 1;

        // ---------------------------  CONFIG Plugin Developer  --------------------------- //
        if ( $this->_container->getParameter('kernel.debug') ) {
            $_config['plugindeveloper'] = $this->_container->getParameter('sf.bbs.plugin.developer') ;
        }

        return $_config ;
    }

    public function getUserCenterConfiguration() {
        return array(
            'UC_CONNECT'    => 'mysql' ,
            'UC_DBHOST'     => $this->_container->getParameter('database_host') ,
            'UC_DBUSER'     => $this->_container->getParameter('database_user') ,
            'UC_DBPW'       => $this->_container->getParameter('database_password') ,
            'UC_DBNAME'     => $this->_container->getParameter('database_name') ,

            'UC_DBCHARSET'  => 'utf8' ,
            'UC_DBTABLEPRE' => sprintf('`%s`.pre_ucenter_', $this->_container->getParameter('database_name') ) ,
            'UC_DBCONNECT'  => 0 ,

            'UC_CHARSET'    => 'utf8' ,
            'UC_KEY'        => $this->_container->getParameter('sf.bbs.uc_key') ,
            'UC_APPID'      => '1' ,
            'UC_IP'         => '' ,
            'UC_PPP'        => 20 ,
            'UC_API'        => sprintf('%s/uc_server', $this->_container->getParameter('sf.web_host') ) ,
        ) ;
    }

    public function getUserCenterServerConfiguration() {
        return array(
            'UC_DBHOST'   =>  $this->_container->getParameter('database_host') ,
            'UC_DBUSER'   =>    $this->_container->getParameter('database_user') ,
            'UC_DBPW'     =>   $this->_container->getParameter('database_password') ,
            'UC_DBNAME'   => $this->_container->getParameter('database_name') ,
            'UC_DBTABLEPRE'   =>  'pre_ucenter_',
            'UC_DBCHARSET'    =>  'utf8',
            'UC_COOKIEPATH'   =>  '/',
            'UC_COOKIEDOMAIN'   =>  '',
            'UC_DBCONNECT'   =>  0,
            'UC_CHARSET'     =>  'utf-8',
            'UC_FOUNDERPW'   =>   $this->_container->getParameter('sf.bbs.ucs_found_pw'),
            'UC_FOUNDERSALT'   =>   $this->_container->getParameter('sf.bbs.ucs_found_salt'),
            'UC_KEY'        =>  $this->_container->getParameter('sf.bbs.ucs_key'),
            'UC_SITEID'   =>  $this->_container->getParameter('sf.bbs.ucs_site_id'),
            'UC_MYKEY'   =>  $this->_container->getParameter('sf.bbs.ucs_mykey'),
            'UC_DEBUG'   =>  $this->_container->getParameter('kernel.debug'),
            'UC_PPP'    =>  20,
        );
    }
}