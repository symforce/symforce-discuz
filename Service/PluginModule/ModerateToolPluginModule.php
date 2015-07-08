<?php

namespace Symforce\DiscuzBundle\Service\PluginModule;

abstract class ModerateToolPluginModule extends ModerateBasePluginModule {

    protected $type = '论坛管理 - 工具' ;

    /**
     * @var string
     */
    protected $dispatch_layout = 'AppForumBundle:PluginModule:layout_moderate_tools.html.twig' ;


} 