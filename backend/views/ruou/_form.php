<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Ruou */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ruou-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ruou_tieude')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ruou_anh')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ruou_noidung')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ruou_ngaylap')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
