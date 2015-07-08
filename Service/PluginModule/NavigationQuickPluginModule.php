<?php

namespace Symforce\DiscuzBundle\Service\PluginModule;


abstract class NavigationQuickPluginModule extends NavigationPluginModule {

    protected $type = '快捷导航项目' ;

    protected $navtitle ;
    protected $navcon ;

    protected function getPluginConfig() {
        $config = parent::getPluginConfig() ;
        $config['navtitle'] =  $this->navtitle ;
        $config['navcon'] =  $this->navcon ;
        return $config ;
    }

}
