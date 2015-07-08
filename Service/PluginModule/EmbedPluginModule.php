<?php


namespace Symforce\DiscuzBundle\Service\PluginModule;

abstract class EmbedPluginModule extends \Symforce\DiscuzBundle\Service\PluginModule {

    protected $type = '页面嵌入 - 普通版' ;

    protected $adminid = 0 ;

    public function compile(array & $config) {

    }
} 