<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWBxNM1y\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWBxNM1y/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerWBxNM1y.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerWBxNM1y\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerWBxNM1y\App_KernelProdContainer([
    'container.build_hash' => 'WBxNM1y',
    'container.build_id' => '1f58b14d',
    'container.build_time' => 1659022291,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWBxNM1y');
