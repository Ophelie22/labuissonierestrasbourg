<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerI4EfncN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerI4EfncN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerI4EfncN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerI4EfncN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerI4EfncN\App_KernelDevDebugContainer([
    'container.build_hash' => 'I4EfncN',
    'container.build_id' => '5be85129',
    'container.build_time' => 1658007981,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerI4EfncN');
