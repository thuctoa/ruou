<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tuyendungnhansu */

$this->title = 'Update Tuyendungnhansu: ' . $model->baiviet_id;
$this->params['breadcrumbs'][] = ['label' => 'Tuyendungnhansus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->baiviet_id, 'url' => ['view', 'id' => $model->baiviet_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tuyendungnhansu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
