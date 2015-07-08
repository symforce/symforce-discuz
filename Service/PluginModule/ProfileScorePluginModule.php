<?php

namespace Symforce\DiscuzBundle\Service\PluginModule;

abstract class ProfileScorePluginModule extends ProfilePluginModule {

    protected $type = '个人设置 - 积分' ;

    /**
     * @var string
     */
    protected $dispatch_layout = 'AppForumBundle:PluginModule:layout_profile_score.html.twig' ;

}
