<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRFV1dbq\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRFV1dbq/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRFV1dbq.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRFV1dbq\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerRFV1dbq\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'RFV1dbq',
    'container.build_id' => '32243be0',
    'container.build_time' => 1610012805,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRFV1dbq');