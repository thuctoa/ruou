<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tuyendungnhansu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuyendungnhansu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'baiviet_tieude')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'baiviet_anh')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'baiviet_gioithieu')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'baiviet_noidung')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'baiviet_ngaylap')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
