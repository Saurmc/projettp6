<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJEw0XAQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJEw0XAQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJEw0XAQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJEw0XAQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJEw0XAQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'JEw0XAQ',
    'container.build_id' => '035dcb51',
    'container.build_time' => 1736552935,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJEw0XAQ');