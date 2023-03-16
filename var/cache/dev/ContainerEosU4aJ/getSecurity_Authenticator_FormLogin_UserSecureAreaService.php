<?php

namespace ContainerEosU4aJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_FormLogin_UserSecureAreaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.form_login.user_secure_area' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractLoginFormAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/FormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';

        $a = ($container->services['http_kernel'] ?? $container->getHttpKernelService());

        if (isset($container->privates['security.authenticator.form_login.user_secure_area'])) {
            return $container->privates['security.authenticator.form_login.user_secure_area'];
        }
        $b = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));
        $c = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($b, [], ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
        $c->setOptions(['login_path' => 'user_login', 'default_target_path' => 'app_account', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $c->setFirewallName('user_secure_area');
        $d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($a, $b, [], ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()));
        $d->setOptions(['login_path' => 'user_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $container->privates['security.authenticator.form_login.user_secure_area'] = new \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator($b, ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), $c, $d, ['login_path' => 'user_login', 'check_path' => 'user_login', 'username_parameter' => 'login[email]', 'password_parameter' => 'login[password]', 'enable_csrf' => true, 'use_forward' => false, 'require_previous_session' => false, 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true, 'form_only' => false]);
    }
}
