<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZde6Pww\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZde6Pww/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerZde6Pww.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerZde6Pww\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerZde6Pww\App_KernelProdContainer([
    'container.build_hash' => 'Zde6Pww',
    'container.build_id' => 'ecd9c5a1',
    'container.build_time' => 1658044932,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZde6Pww');
