<?php

namespace Symforce\DiscuzBundle\Security\Factory;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\DefinitionDecorator;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\SecurityFactoryInterface;

class UserSecurityFactory implements SecurityFactoryInterface
{
    public function create(ContainerBuilder $container, $id, $config, $userProvider, $defaultEntryPoint)
    {
        $providerId = 'sf.bbs.authentication.provider.'.$id ;
        \Dev::dump($providerId) ; exit;

        $container
            ->setDefinition($providerId, new DefinitionDecorator('sf.bbs.authentication.provider'))
            ->replaceArgument(0, new Reference($userProvider))
        ;
        $listenerId = 'sf.bbs.authentication.listener.'.$id ;
        return array($providerId, $listenerId, $defaultEntryPoint);
    }

    public function getPosition()
    {
        return 'pre_auth';
    }

    public function getKey()
    {
        return 'sf_bbs_login';
    }

    public function addConfiguration(NodeDefinition $node)
    {
    }
}