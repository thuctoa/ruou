<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Gioithieu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gioithieu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gioithieu_tieude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gioithieu_noidung')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
