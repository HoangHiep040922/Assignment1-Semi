<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLhuSfje\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLhuSfje/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLhuSfje.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLhuSfje\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLhuSfje\App_KernelDevDebugContainer([
    'container.build_hash' => 'LhuSfje',
    'container.build_id' => '0633d70a',
    'container.build_time' => 1660919001,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLhuSfje');
