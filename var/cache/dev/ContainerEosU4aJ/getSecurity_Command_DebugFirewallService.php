<?php

namespace ContainerEosU4aJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/DebugFirewallCommand.php';

        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.ipy50uC'] ?? $container->get_ServiceLocator_Ipy50uCService()), ($container->privates['.service_locator.DwT9vug'] ?? $container->load('get_ServiceLocator_DwT9vugService')), ['admin_secure_area' => [0 => ($container->privates['App\\Security\\AppAdminControllerAuthenticator'] ?? $container->load('getAppAdminControllerAuthenticatorService')), 1 => ($container->privates['security.authenticator.form_login.admin_secure_area'] ?? $container->load('getSecurity_Authenticator_FormLogin_AdminSecureAreaService'))], 'user_secure_area' => [0 => ($container->privates['App\\Security\\AppUserAuthenticator'] ?? $container->load('getAppUserAuthenticatorService')), 1 => ($container->privates['security.authenticator.form_login.user_secure_area'] ?? $container->load('getSecurity_Authenticator_FormLogin_UserSecureAreaService'))], 'main' => []], false);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
