<?php

namespace ContainerW5iJ7FW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaginatorFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/PaginatorFactory.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator'] ?? $container->load('getEntityPaginatorService')));
    }
}
