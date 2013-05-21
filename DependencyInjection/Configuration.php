<?php

namespace Theodo\Bundle\DrupalBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Kenny Durand <kennyd@theodo.fr>
 * @author Thierry Marianne <thierrym@theodo.fr>
 */

class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('theodo_drupal', 'array');
        $rootNode
            ->addDefaultsIfNotSet()
            ->children()
                ->scalarNode('root')->isRequired()
                ->info('The root directory of your drupal application')->end()
            ->end();

        return $treeBuilder;
    }
}
