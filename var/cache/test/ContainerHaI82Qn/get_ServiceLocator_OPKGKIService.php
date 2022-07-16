<?php

namespace ContainerHaI82Qn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OPKGKIService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.oP_kGKI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oP_kGKI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'article' => ['privates', '.errored..service_locator.oP_kGKI.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.oP_kGKI": it references class "App\\Entity\\Article" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'article' => 'App\\Entity\\Article',
            'manager' => '?',
        ]);
    }
}
