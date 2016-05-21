<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Tuvan */

$this->title = $model->tuvan_id;
$this->params['breadcrumbs'][] = ['label' => 'Tuvans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuvan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tuvan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tuvan_id], [
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
            'tuvan_id',
            'tuvan_tieude:ntext',
            'tuvan_anh:ntext',
            'tuvan_noidung:ntext',
            'tuvan_ngaytao',
        ],
    ]) ?>

</div>
