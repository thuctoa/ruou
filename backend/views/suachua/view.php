<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Suachua */

$this->title = $model->suachua_id;
$this->params['breadcrumbs'][] = ['label' => 'Suachuas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suachua-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->suachua_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->suachua_id], [
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
            'suachua_id',
            'suachua_tieude:ntext',
            'suachua_anh:ntext',
            'suachua_noidung:ntext',
            'suachua_ngaylap',
        ],
    ]) ?>

</div>
