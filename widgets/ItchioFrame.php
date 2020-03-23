<?php

namespace humhub\modules\itchio\widgets;

use Yii;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class ItchioFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('itchio')->getServerUrl() . '/';

        $author = Yii::$app->getModule('itchio')->getauthor() . '';

        $authorUrl = Yii::$app->getModule('itchio')->getAuthorUrl() . '/';

        $game = Yii::$app->getModule('itchio')->getGame() . '';

        return $this->render('itchioframe', ['game' => $game, 'author' => $author, 'itchoiUrl' => $url, 'authorUrl' => $authorUrl]);
    }

}