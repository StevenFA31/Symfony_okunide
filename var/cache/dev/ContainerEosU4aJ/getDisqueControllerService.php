<?php

namespace ContainerEosU4aJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDisqueControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DisqueController' shared autowired service.
     *
     * @return \App\Controller\DisqueController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DisqueController.php';

        $container->services['App\\Controller\\DisqueController'] = $instance = new \App\Controller\DisqueController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\DisqueController', $container));

        return $instance;
    }
}
