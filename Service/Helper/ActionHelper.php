<?php

namespace Symforce\DiscuzBundle\Service\Helper;


final class ActionHelper {

    /**
     * @var \ReflectionMethod
     */
    public $method ;

    /**
     * @var \Symforce\DiscuzBundle\Annotation\Action
     */
    public $config ;

    /**
     * @var \Symforce\DiscuzBundle\Service\PluginModule
     */
    public $plugin_module ;

    /**
     * @var bool
     */
    public $is_current_action ;

    public function __construct(\Symforce\DiscuzBundle\Annotation\Action $config, \ReflectionMethod $method, \Symforce\DiscuzBundle\Service\PluginModule $pm ) {
        $this->config   = $config ;
        $this->method   = $method ;
        $this->plugin_module = $pm ;
    }

    public function isCurrentAction() {
        return $this->is_current_action ;
    }

    public function  getName(){
        return $this->config->name ;
    }

    public function  getTitle(){
        return $this->config->title ;
    }

} 