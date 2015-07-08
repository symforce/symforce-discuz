<?php

namespace Symforce\DiscuzBundle\Service\PluginModule;


abstract class NavigationHomePluginModule extends NavigationQuickPluginModule {

    protected $type = '家园导航项目' ;

    protected $navsubname ;
    protected $navsuburl ;

    protected function getPluginConfig(){
        $config = parent::getPluginConfig() ;
        $config['navsubname'] = $this->navsubname ;
        $config['navsuburl'] =  $this->navsuburl ;
        return $config ;
    }

}
