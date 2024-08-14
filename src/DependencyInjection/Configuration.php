<?php

declare(strict_types=1);

namespace SyliusLabs\RabbitMqSimpleBusBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('rabbitmq_simplebus');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
