<?php

namespace ContainerW5iJ7FW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_ContainerAwareMigrationsFactory_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.container_aware_migrations_factory.inner' shared service.
     *
     * @return \Doctrine\Migrations\Version\MigrationFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/MigrationFactory.php';

        return $container->privates['doctrine.migrations.container_aware_migrations_factory.inner'] = ($container->privates['doctrine.migrations.dependency_factory'] ?? $container->getDoctrine_Migrations_DependencyFactoryService())->getMigrationFactory();
    }
}
