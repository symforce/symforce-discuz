<?php

namespace Symforce\DiscuzBundle\Service\PluginModule;

abstract class NavigationPluginModule extends \Symforce\DiscuzBundle\Service\PluginModule\IncludePluginModule {

    protected $type = '主导航项目' ;

    protected $displayorder = 2 ;

    /**
     * @var string
     */
    protected $dispatch_layout = 'SymforceDiscuzBundle:PluginModule:nav_admin.html.twig' ;

    protected function getPluginConfig() {
        return array(
            'name'  => $this->getIdentifier()  ,
            'param' => '' ,
            'menu'  => $this->getTitle() ,
            'url'   => '' ,
            'adminid'   => 0 ,
            'type'  => $this->getTypeId() ,
            'displayorder'  => $this->getOrder() ,
            'navtitle'  => $this->getTitle() ,
            'navicon'   =>  '' ,
            'navsubname'    =>  '',
            'navsuburl' => '' ,
        ) ;
    }

    /**
     * @var string
     */
    protected $dispatch_helper_param_name   = 'pmact' ;

}