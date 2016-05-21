<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Dichvu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dichvu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dichvu_tieude')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dichvu_anh')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dichvu_noidung')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dichvu_ngaylap')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
