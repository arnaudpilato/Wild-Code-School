<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNyNB1FQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNyNB1FQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNyNB1FQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNyNB1FQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNyNB1FQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'NyNB1FQ',
    'container.build_id' => '1853c4c2',
    'container.build_time' => 1609199766,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNyNB1FQ');
