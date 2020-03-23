<?php

namespace humhub\modules\itchio;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    public $resourcesPath = 'resources';

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to(['/itchio/admin']);
    }

    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');
        if (empty($url)) {
            return 'https://itch.io/embed';
        }
        return $url;
    }

    public function getAuthor()
    {
        $author = $this->settings->get('author');
        if (empty($author)) {
            return '';
        }
        return $author;
    }

    public function getAuthorUrl()
    {
        $authorUrl = $this->settings->get('authorUrl');
        if (empty($authorUrl)) {
            return 'https://*.itch.io';
        }
        return $authorUrl;
    }

    public function getGame()
    {
        $game = $this->settings->get('game');
        if (empty($game)) {
            return '';
        }
        return $game;
    }
}