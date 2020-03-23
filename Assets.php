<?php

namespace humhub\modules\itchio;

use Yii;
use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $publishOptions = [
        'forceCopy' => 'false'
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/resources';
        parent::init();
    }
}
