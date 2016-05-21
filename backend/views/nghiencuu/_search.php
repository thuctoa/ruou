<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NghiencuuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nghiencuu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nghiencuu_id') ?>

    <?= $form->field($model, 'nghiencuu_tieude') ?>

    <?= $form->field($model, 'nghiencuu_anh') ?>

    <?= $form->field($model, 'ngiencuu_noidung') ?>

    <?= $form->field($model, 'nghiencuu_ngaylap') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
