<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXwuDHo8\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXwuDHo8/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXwuDHo8.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXwuDHo8\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerXwuDHo8\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'XwuDHo8',
    'container.build_id' => '2381feff',
    'container.build_time' => 1517768496,
));