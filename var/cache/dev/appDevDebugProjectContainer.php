<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAjb3xyr\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAjb3xyr/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerAjb3xyr.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerAjb3xyr\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerAjb3xyr\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Ajb3xyr',
    'container.build_id' => 'f0813b62',
    'container.build_time' => 1542884429,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerAjb3xyr');
