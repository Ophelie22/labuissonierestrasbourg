<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVDfVcRo\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVDfVcRo/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVDfVcRo.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVDfVcRo\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVDfVcRo\App_KernelDevDebugContainer([
    'container.build_hash' => 'VDfVcRo',
    'container.build_id' => 'a2d8c1db',
    'container.build_time' => 1658050995,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVDfVcRo');