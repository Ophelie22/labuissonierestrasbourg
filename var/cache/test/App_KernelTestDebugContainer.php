<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYcDEz3Z\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYcDEz3Z/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerYcDEz3Z.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerYcDEz3Z\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerYcDEz3Z\App_KernelTestDebugContainer([
    'container.build_hash' => 'YcDEz3Z',
    'container.build_id' => '50bd6459',
    'container.build_time' => 1658044908,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYcDEz3Z');
