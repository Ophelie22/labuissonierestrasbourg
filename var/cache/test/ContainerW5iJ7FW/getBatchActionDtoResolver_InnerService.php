<?php

namespace ContainerW5iJ7FW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatchActionDtoResolver_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver.inner' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/ArgumentResolver/BatchActionDtoResolver.php';

        return $container->privates['debug.EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver\\BatchActionDtoResolver.inner'] = new \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()), (isset($container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']) ? $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']() : $container->getAdminUrlGeneratorService()));
    }
}
