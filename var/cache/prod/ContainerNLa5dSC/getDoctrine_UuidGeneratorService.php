<?php

namespace ContainerNLa5dSC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_UuidGeneratorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.uuid_generator' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.uuid_generator'] = new \Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator(new \Symfony\Component\Uid\Factory\UuidFactory(6, 6, 5, 'Symfony\\Component\\Uid\\UuidV4', NULL, NULL));
    }
}
