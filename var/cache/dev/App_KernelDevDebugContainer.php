<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9yku9QW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9yku9QW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9yku9QW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9yku9QW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9yku9QW\App_KernelDevDebugContainer([
    'container.build_hash' => '9yku9QW',
    'container.build_id' => '36b538a4',
    'container.build_time' => 1658066554,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9yku9QW');
