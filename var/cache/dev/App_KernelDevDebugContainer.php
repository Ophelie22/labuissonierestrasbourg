<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUVDrdSD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUVDrdSD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUVDrdSD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUVDrdSD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUVDrdSD\App_KernelDevDebugContainer([
    'container.build_hash' => 'UVDrdSD',
    'container.build_id' => '904fea52',
    'container.build_time' => 1676993195,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUVDrdSD');
