<?php

namespace Symforce\DiscuzBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class PluginResourcePass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('sf.bbs.plugin_manager')) {
            return;
        }

        $definition = $container->getDefinition('sf.bbs.plugin_manager');

        $taggedServices = $container->findTaggedServiceIds(
            'sf.bbs.plugin.module'
        );

        foreach ($taggedServices as $id => $attributes) {
            $definition->addMethodCall( 'addPlugin', array(new Reference($id), $id ) ) ;
        }

    }
}
