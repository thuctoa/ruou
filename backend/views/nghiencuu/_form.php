<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Nghiencuu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nghiencuu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nghiencuu_tieude')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nghiencuu_anh')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ngiencuu_noidung')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nghiencuu_ngaylap')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
