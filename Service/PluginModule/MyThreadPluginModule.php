<?php

namespace Symforce\DiscuzBundle\Service\PluginModule;


use Symforce\DiscuzBundle\Service\Helper\ActionHelper ;

abstract class MyThreadPluginModule extends IncludePluginModule {

    protected $type =  '我的帖子' ;

    /**
     * @var string
     */
    protected $dispatch_layout = 'AppForumBundle:PluginModule:layout_my_thread.html.twig' ;

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
