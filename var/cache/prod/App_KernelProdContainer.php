<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTIfzDfs\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTIfzDfs/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerTIfzDfs.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerTIfzDfs\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerTIfzDfs\App_KernelProdContainer([
    'container.build_hash' => 'TIfzDfs',
    'container.build_id' => '50ce939f',
    'container.build_time' => 1659035087,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTIfzDfs');
