<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGXsRfIy\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGXsRfIy/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerGXsRfIy.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerGXsRfIy\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerGXsRfIy\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'GXsRfIy',
    'container.build_id' => '16ac898f',
    'container.build_time' => 1517074789,
));
