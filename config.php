<?php

namespace humhub\modules\itchio;

use humhub\modules\itchio\Events;
use humhub\modules\itchio\Module;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\dashboard\widgets\Sidebar;
use humhub\modules\space\widgets\Sidebar as Spacebar;

return [
    'id' => 'itchio',
    'class' => Module::class,
    'namespace' => 'humhub\modules\itchio',
    'events' => [
        ['class' => Sidebar::class, 'event' => Sidebar::EVENT_INIT, 'callback' => [Events::class, 'addItchioFrame']],
        ['class' => Spacebar::class, 'event' => Spacebar::EVENT_INIT, 'callback' => [Events::class, 'addItchioFrame']],
        ['class' => AdminMenu::class, 'event' => AdminMenu::EVENT_INIT, 'callback' => [Events::class, 'onAdminMenuInit']]
    ]
];
?>