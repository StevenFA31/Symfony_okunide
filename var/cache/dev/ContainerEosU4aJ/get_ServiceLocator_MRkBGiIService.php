<?php

namespace ContainerEosU4aJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MRkBGiIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MRkBGiI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MRkBGiI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'disque' => ['privates', '.errored..service_locator.MRkBGiI.App\\Entity\\Disque', NULL, 'Cannot autowire service ".service_locator.MRkBGiI": it needs an instance of "App\\Entity\\Disque" but this type has been excluded in "config/services.yaml".'],
            'disqueRepository' => ['privates', 'App\\Repository\\DisqueRepository', 'getDisqueRepositoryService', true],
        ], [
            'disque' => 'App\\Entity\\Disque',
            'disqueRepository' => 'App\\Repository\\DisqueRepository',
        ]);
    }
}