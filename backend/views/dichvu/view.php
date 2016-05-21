<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Dichvu */

$this->title = $model->dichvu_id;
$this->params['breadcrumbs'][] = ['label' => 'Dichvus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dichvu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->dichvu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->dichvu_id], [
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
            'dichvu_id',
            'dichvu_tieude:ntext',
            'dichvu_anh:ntext',
            'dichvu_noidung:ntext',
            'dichvu_ngaylap',
        ],
    ]) ?>

</div>
