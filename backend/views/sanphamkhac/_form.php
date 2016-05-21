<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sanphamkhac */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanphamkhac-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sanphamkhac_ten')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sanphamkhac_anh')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sanphamkhac_noidung')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sanphamkhac_ngaylap')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
