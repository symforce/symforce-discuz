<?php

namespace Symforce\DiscuzBundle\Service\Helper;


final class EmbedHelper {

    /**
     * @var \ReflectionMethod
     */
    public $method ;

    /**
     * @var \Symforce\DiscuzBundle\Annotation\Embed
     */
    public $config ;

    /**
     * @var \Symforce\DiscuzBundle\Service\PluginModule
     */
    public $plugin_module ;

    /**
     * @var string
     */
    public $code  ;

    public function __construct(\Symforce\DiscuzBundle\Annotation\Embed $config, \ReflectionMethod $method, \Symforce\DiscuzBundle\Service\PluginModule $pm ) {
        $this->config   = $config ;
        $this->method   = $method ;
        $this->plugin_module = $pm ;
        $this->code     = \Dev::getMethodParametersDeclaringCode($method) ;
    }


}