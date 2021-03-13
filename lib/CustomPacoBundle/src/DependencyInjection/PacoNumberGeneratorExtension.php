<?php


namespace Paco\CustomPacoBundle\DependencyInjection;


use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class PacoNumberGeneratorExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        // TODO: Implement load() method.
        var_dump("in the bundle");die;
    }
}