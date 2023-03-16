<?php

namespace ContainerEosU4aJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Firewall_Authenticator_UserSecureAreaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.firewall.authenticator.user_secure_area' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/Debug/TraceableAuthenticatorManagerListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AuthenticatorManagerListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManager.php';

        $a = ($container->privates['security.authenticator.form_login.user_secure_area'] ?? $container->load('getSecurity_Authenticator_FormLogin_UserSecureAreaService'));

        if (isset($container->privates['debug.security.firewall.authenticator.user_secure_area'])) {
            return $container->privates['debug.security.firewall.authenticator.user_secure_area'];
        }

        return $container->privates['debug.security.firewall.authenticator.user_secure_area'] = new \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener(new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener(new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([0 => ($container->privates['App\\Security\\AppUserAuthenticator'] ?? $container->load('getAppUserAuthenticatorService')), 1 => $a], ($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.event_dispatcher.user_secure_area'] ?? $container->getSecurity_EventDispatcher_UserSecureAreaService()), 'user_secure_area', ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()), true, true, [])));
    }
}
