<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Nghiencuu */

$this->title = $model->nghiencuu_id;
$this->params['breadcrumbs'][] = ['label' => 'Nghiencuus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nghiencuu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nghiencuu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nghiencuu_id], [
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
            'nghiencuu_id',
            'nghiencuu_tieude:ntext',
            'nghiencuu_anh:ntext',
            'ngiencuu_noidung:ntext',
            'nghiencuu_ngaylap',
        ],
    ]) ?>

</div>
