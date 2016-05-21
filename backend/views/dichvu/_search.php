<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DichvuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dichvu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'dichvu_id') ?>

    <?= $form->field($model, 'dichvu_tieude') ?>

    <?= $form->field($model, 'dichvu_anh') ?>

    <?= $form->field($model, 'dichvu_noidung') ?>

    <?= $form->field($model, 'dichvu_ngaylap') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
