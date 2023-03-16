<?php

namespace ContainerEosU4aJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L1zIsd0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.l1zIsd0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.l1zIsd0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'genre' => ['privates', '.errored..service_locator.l1zIsd0.App\\Entity\\Genre', NULL, 'Cannot autowire service ".service_locator.l1zIsd0": it needs an instance of "App\\Entity\\Genre" but this type has been excluded in "config/services.yaml".'],
            'genreRepository' => ['privates', 'App\\Repository\\GenreRepository', 'getGenreRepositoryService', true],
        ], [
            'genre' => 'App\\Entity\\Genre',
            'genreRepository' => 'App\\Repository\\GenreRepository',
        ]);
    }
}
