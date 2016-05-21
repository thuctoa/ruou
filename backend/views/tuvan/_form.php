<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tuvan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuvan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tuvan_tieude')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tuvan_anh')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tuvan_noidung')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tuvan_ngaytao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
