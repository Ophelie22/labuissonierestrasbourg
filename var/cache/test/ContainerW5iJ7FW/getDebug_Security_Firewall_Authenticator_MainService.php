<?php

namespace ContainerW5iJ7FW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Firewall_Authenticator_MainService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.security.firewall.authenticator.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/Debug/TraceableAuthenticatorManagerListener.php';

        return $container->privates['debug.security.firewall.authenticator.main'] = new \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener(($container->privates['debug.security.firewall.authenticator.main.inner'] ?? $container->load('getDebug_Security_Firewall_Authenticator_Main_InnerService')));
    }
}
