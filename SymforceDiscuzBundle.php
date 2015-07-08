<?php

namespace Symforce\DiscuzBundle;

use Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\Console\Application;

class SymforceDiscuzBundle extends Bundle
{

    /**
     * {@inheritDoc}
     */
    public function registerCommands(Application $application)
    {
        $application->add(new Command\EmbedCommand());

    }


    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new DependencyInjection\Compiler\PluginResourcePass());

        /**
         * @var $extension \Symfony\Bundle\SecurityBundle\DependencyInjection\SecurityExtension
         */
        $extension = $container->getExtension('security');
        $extension->addSecurityListenerFactory( new \Symforce\DiscuzBundle\Security\Factory\UserSecurityFactory() );
    }

}
