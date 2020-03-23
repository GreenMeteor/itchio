<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;
use humhub\widgets\PanelMenu;
use humhub\modules\itchio\Assets;

Assets::register($this);
?>

<div class="panel panel-default panel-itchio" id="panel-itchio">
    <?= PanelMenu::widget(['id' => 'panel-itchio']); ?>
  <div class="panel-heading">
    <strong><?= $game; ?></strong>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<iframe frameborder="0" src="<?= $itchoiUrl; ?>" width=100% height="167"><a href="<?= $authorUrl; ?>"><?= $author; ?></a></iframe>
<?= Html::endTag('div'); ?>

</div>
</div>
