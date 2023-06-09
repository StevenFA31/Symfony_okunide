<?php

namespace ContainerEosU4aJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DwT9vugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DwT9vug' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DwT9vug'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.admin_secure_area' => ['privates', 'security.event_dispatcher.admin_secure_area', 'getSecurity_EventDispatcher_AdminSecureAreaService', false],
            'security.event_dispatcher.main' => ['privates', 'security.event_dispatcher.main', 'getSecurity_EventDispatcher_MainService', false],
            'security.event_dispatcher.user_secure_area' => ['privates', 'security.event_dispatcher.user_secure_area', 'getSecurity_EventDispatcher_UserSecureAreaService', false],
        ], [
            'event_dispatcher' => '?',
            'security.event_dispatcher.admin_secure_area' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.main' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.user_secure_area' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
        ]);
    }
}
