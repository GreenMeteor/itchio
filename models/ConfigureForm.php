<?php

namespace humhub\modules\itchio\models;

use Yii;
use yii\base\Model;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends Model
{

    public $game;
    public $serverUrl;
    public $author;
    public $authorUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['game', 'required'],
            ['serverUrl', 'required'],
            ['author', 'required'],
            ['authorUrl', 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'game' => 'Game name:',
            'serverUrl' => 'Game widget Url:',
            'author' => 'Author:',
            'authorUrl' => 'Author Url:'
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'game' => 'Game name',
            'serverUrl' => 'e.g: https://itch.io/embed/{id}',
            'author' => 'e.g Name of the autho of the game.',
            'authorUrl' => 'e.g Url to the author of the game.'
        ];
    }

    public function loadSettings()
    {
        $this->game = Yii::$app->getModule('itchio')->settings->get('game');

        $this->serverUrl = Yii::$app->getModule('itchio')->settings->get('serverUrl');

        $this->author = Yii::$app->getModule('itchio')->settings->get('author');

        $this->authorUrl = Yii::$app->getModule('itchio')->settings->get('authorUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('itchio')->settings->set('game', $this->game);

        Yii::$app->getModule('itchio')->settings->set('serverUrl', $this->serverUrl);

        Yii::$app->getModule('itchio')->settings->set('author', $this->author);

        Yii::$app->getModule('itchio')->settings->set('authorUrl', $this->authorUrl);

        return true;
    }

}