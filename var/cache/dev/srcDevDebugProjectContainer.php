<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIHoIMIK\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIHoIMIK/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerIHoIMIK.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerIHoIMIK\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerIHoIMIK\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'IHoIMIK',
    'container.build_id' => '5c25dfe9',
    'container.build_time' => 1520174901,
));
