<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUPWoHN4\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUPWoHN4/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerUPWoHN4.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerUPWoHN4\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerUPWoHN4\appAppKernelProdContainer([
    'container.build_hash' => 'UPWoHN4',
    'container.build_id' => '3d0fe31b',
    'container.build_time' => 1724450973,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUPWoHN4');
