<?php

namespace Symforce\DiscuzBundle\Service\PluginModule;


use Symforce\DiscuzBundle\Service\Helper\ActionHelper ;

abstract class HelpPluginModule extends IncludePluginModule {

    protected $type =  '站点帮助' ;

    /**
     * @var string
     */
    protected $dispatch_layout = 'SymforceDiscuzBundle:PluginModule:layout_help.html.twig' ;

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
