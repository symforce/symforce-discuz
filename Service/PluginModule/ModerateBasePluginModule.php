<?php

namespace Symforce\DiscuzBundle\Service\PluginModule;

abstract class ModerateBasePluginModule extends IncludePluginModule {

    protected $type = '论坛管理 - 基本' ;

    /**
     * @var string
     */
    protected $dispatch_layout = 'AppForumBundle:PluginModule:layout_moderate.html.twig' ;

    protected function getPluginConfig() {
        return array(
            'name'  => $this->getIdentifier()  ,
            'param' => '' ,
            'menu'  => $this->getTitle() ,
            'url'   => '' ,
            'adminid'   => 0 ,
            'type'  => $this->getTypeId() ,
            'displayorder'  => $this->getOrder() ,
            'navtitle'  => '' ,
            'navicon'   =>  '' ,
            'navsubname'    =>  $this->getTitle() ,
            'navsuburl' => '' ,
        )  ;
    }

    public function getActionUrl(\Symforce\DiscuzBundle\Service\Helper\ActionHelper $helper) {

    }

}
