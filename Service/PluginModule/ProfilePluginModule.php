<?php

namespace Symforce\DiscuzBundle\Service\PluginModule;

abstract class ProfilePluginModule  extends IncludePluginModule {

    protected $type = '个人设置' ;

    /**
     * @var integer
     *
     * 0 -> 普通用户
     * 1 -> 管理员
     * 2 -> 超级版主
     * 3 -> 版主
     */
    protected $adminid = 0 ;

    /**
     * @var string
     */
    protected $dispatch_layout = 'SymforceDiscuzBundle:PluginModule:layout_profile.html.twig' ;

    protected function getPluginConfig() {
        return array(
            'name'  => $this->getIdentifier()  ,
            'param' => '' ,
            'menu'  => $this->getTitle() ,
            'url'   => '' ,
            'admin'   => $this->adminid ,
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