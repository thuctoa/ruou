<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SanphamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanpham-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sanpham_id') ?>

    <?= $form->field($model, 'sanpham_ten') ?>

    <?= $form->field($model, 'sanpham_anh') ?>

    <?= $form->field($model, 'sanpham_noidung') ?>

    <?= $form->field($model, 'sanpham_ngaylap') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
