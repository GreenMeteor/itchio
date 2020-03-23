<?php

namespace humhub\modules\itchio;

use Yii;
use yii\helpers\Url;
use yii\base\BaseObject;
use humhub\models\Setting;
use humhub\modules\itchio\widgets\ItchioFrame;

class Events extends BaseObject
{

    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => Yii::t('ItchioModule.base', 'Itch.io Settings'),
            'url' => Url::toRoute('/itchio/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fab fa-itchio"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'itchio' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

    public static function addItchioFrame($event)
    {
        $event->sender->view->registerAssetBundle(Assets::class);
        $event->sender->addWidget(widgets\ItchioFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'itchio')
        ]);
    }
}
