<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<div class="panel panel-default">

    <div class="panel-heading"><?= Yii::t('ItchioModule.base', '<strong>Itch.io</strong> module configuration'); ?></div>

    <div class="panel-body">

        <?php $form = ActiveForm::begin(['id' => 'configure-form']); ?>
        <div class="form-group">
            <?= $form->field($model, 'game'); ?>
            <?= $form->field($model, 'author'); ?>
            <?= $form->field($model, 'authorUrl'); ?>
            <?= $form->field($model, 'serverUrl'); ?>
        </div>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('ItchioModule.base', 'Save'), ['class' => 'btn btn-primary', 'data-ui-loader' => '']); ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>