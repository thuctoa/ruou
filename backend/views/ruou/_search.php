<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RuouSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ruou-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ruou_id') ?>

    <?= $form->field($model, 'ruou_tieude') ?>

    <?= $form->field($model, 'ruou_anh') ?>

    <?= $form->field($model, 'ruou_noidung') ?>

    <?= $form->field($model, 'ruou_ngaylap') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
