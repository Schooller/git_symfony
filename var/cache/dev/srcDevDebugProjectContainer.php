<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBlh6gDG\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBlh6gDG/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBlh6gDG.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBlh6gDG\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerBlh6gDG\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Blh6gDG',
    'container.build_id' => '7b010c29',
    'container.build_time' => 1541099070,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerBlh6gDG');
