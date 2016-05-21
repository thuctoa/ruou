<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sanphamkhac */

$this->title = 'Update Sanphamkhac: ' . $model->sanphamkhac_id;
$this->params['breadcrumbs'][] = ['label' => 'Sanphamkhacs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sanphamkhac_id, 'url' => ['view', 'id' => $model->sanphamkhac_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sanphamkhac-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
