<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEosU4aJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEosU4aJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEosU4aJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEosU4aJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEosU4aJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'EosU4aJ',
    'container.build_id' => 'a5880878',
    'container.build_time' => 1677840144,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEosU4aJ');
