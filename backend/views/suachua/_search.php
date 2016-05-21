<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SuachuaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suachua-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'suachua_id') ?>

    <?= $form->field($model, 'suachua_tieude') ?>

    <?= $form->field($model, 'suachua_anh') ?>

    <?= $form->field($model, 'suachua_noidung') ?>

    <?= $form->field($model, 'suachua_ngaylap') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
