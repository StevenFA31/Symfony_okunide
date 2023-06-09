<?php

namespace ContainerEosU4aJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BBU45QhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BBU45Qh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BBU45Qh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'artist' => ['privates', '.errored..service_locator.BBU45Qh.App\\Entity\\Artist', NULL, 'Cannot autowire service ".service_locator.BBU45Qh": it needs an instance of "App\\Entity\\Artist" but this type has been excluded in "config/services.yaml".'],
            'artistRepository' => ['privates', 'App\\Repository\\ArtistRepository', 'getArtistRepositoryService', true],
        ], [
            'artist' => 'App\\Entity\\Artist',
            'artistRepository' => 'App\\Repository\\ArtistRepository',
        ]);
    }
}
