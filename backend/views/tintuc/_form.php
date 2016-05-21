<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tintuc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tintuc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tintuc_tieude')->textInput(['maxlength' => true]) ?>
      
    <?= $form->field($model, 'tintuc_anh')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'tintuc_gioithieu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tintuc_noidung')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tintuc_ngaylap')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
