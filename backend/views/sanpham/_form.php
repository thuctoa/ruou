<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sanpham */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanpham-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sanpham_ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sanpham_anh')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sanpham_noidung')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sanpham_ngaylap')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
