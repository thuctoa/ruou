<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Sanphamkhac */

$this->title = $model->sanphamkhac_id;
$this->params['breadcrumbs'][] = ['label' => 'Sanphamkhacs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanphamkhac-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->sanphamkhac_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->sanphamkhac_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'sanphamkhac_id',
            'sanphamkhac_ten:ntext',
            'sanphamkhac_anh:ntext',
            'sanphamkhac_noidung:ntext',
            'sanphamkhac_ngaylap',
        ],
    ]) ?>

</div>
