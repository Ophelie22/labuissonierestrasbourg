<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLHkvkdU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLHkvkdU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLHkvkdU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLHkvkdU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLHkvkdU\App_KernelDevDebugContainer([
    'container.build_hash' => 'LHkvkdU',
    'container.build_id' => '5b1d92b9',
    'container.build_time' => 1659004912,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLHkvkdU');
