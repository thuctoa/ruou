<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TuvanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuvan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tuvan_id') ?>

    <?= $form->field($model, 'tuvan_tieude') ?>

    <?= $form->field($model, 'tuvan_anh') ?>

    <?= $form->field($model, 'tuvan_noidung') ?>

    <?= $form->field($model, 'tuvan_ngaytao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
