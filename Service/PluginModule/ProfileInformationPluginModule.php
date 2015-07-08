<?php

namespace Symforce\DiscuzBundle\Service\PluginModule;

abstract class ProfileInformationPluginModule extends ProfilePluginModule {

    protected $type = '个人设置 - 个人资料' ;

    /**
     * @var string
     */
    protected $dispatch_layout = 'AppForumBundle:PluginModule:layout_profile_info.html.twig' ;


}
