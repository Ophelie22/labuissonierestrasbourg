<?php

namespace ContainerGMxN9jC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarkTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\MarkType' shared autowired service.
     *
     * @return \App\Form\MarkType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/MarkType.php';

        return $container->privates['App\\Form\\MarkType'] = new \App\Form\MarkType();
    }
}
