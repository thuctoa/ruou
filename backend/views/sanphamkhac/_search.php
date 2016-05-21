<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SanphamkhacSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanphamkhac-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sanphamkhac_id') ?>

    <?= $form->field($model, 'sanphamkhac_ten') ?>

    <?= $form->field($model, 'sanphamkhac_anh') ?>

    <?= $form->field($model, 'sanphamkhac_noidung') ?>

    <?= $form->field($model, 'sanphamkhac_ngaylap') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
