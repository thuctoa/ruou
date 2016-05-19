<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sanpham */

$this->title = 'Update Sanpham: ' . $model->sampham_id;
$this->params['breadcrumbs'][] = ['label' => 'Sanphams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sampham_id, 'url' => ['view', 'id' => $model->sampham_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sanpham-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
