<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TuyendungnhansuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuyendungnhansu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'baiviet_id') ?>

    <?= $form->field($model, 'baiviet_tieude') ?>

    <?= $form->field($model, 'baiviet_anh') ?>

    <?= $form->field($model, 'baiviet_gioithieu') ?>

    <?= $form->field($model, 'baiviet_noidung') ?>

    <?php // echo $form->field($model, 'baivietid') ?>

    <?php // echo $form->field($model, 'baiviet_ngaylap') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
