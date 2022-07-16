<?php

namespace ContainerLaBm48J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ContactRepository' shared autowired service.
     *
     * @return \App\Repository\ContactRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ContactRepository'] = new \App\Repository\ContactRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
