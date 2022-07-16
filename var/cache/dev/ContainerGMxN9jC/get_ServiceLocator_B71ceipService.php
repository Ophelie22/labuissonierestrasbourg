<?php

namespace ContainerGMxN9jC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B71ceipService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.b71ceip' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.b71ceip'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'choosenUser' => ['privates', '.errored..service_locator.b71ceip.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.b71ceip": it references class "App\\Entity\\User" but no such service exists.'],
            'hasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'choosenUser' => 'App\\Entity\\User',
            'hasher' => '?',
            'manager' => '?',
        ]);
    }
}
