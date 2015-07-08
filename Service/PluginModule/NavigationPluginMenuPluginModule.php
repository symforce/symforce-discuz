<?php

namespace Symforce\DiscuzBundle\Service\PluginModule;


abstract class NavigationPluginMenuPluginModule extends NavigationPluginModule {

    protected $type = '主导航项目 - 插件菜单' ;

    /**
     * @var integer
     *
     * 0 -> 普通用户
     * 1 -> 管理员
     * 2 -> 超级版主
     * 3 -> 版主
     */
    protected $adminid = 0 ;

    protected function getPluginConfig() {
        $config = parent::getPluginConfig() ;
        $config['adminid'] = $this->adminid ;
        return $config ;
    }

} 