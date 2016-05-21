<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Sukienvadoitac */

$this->title = $model->baiviet_id;
$this->params['breadcrumbs'][] = ['label' => 'Sukienvadoitacs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sukienvadoitac-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->baiviet_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->baiviet_id], [
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
            'baiviet_id',
            'baiviet_tieude:ntext',
            'baiviet_anh:ntext',
            'baiviet_gioithieu:ntext',
            'baiviet_noidung:ntext',
            'baiviet_ngaylap',
        ],
    ]) ?>

</div>
