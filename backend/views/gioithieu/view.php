<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Gioithieu */

$this->title = $model->gioithieu_id;
$this->params['breadcrumbs'][] = ['label' => 'Gioithieus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gioithieu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->gioithieu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->gioithieu_id], [
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
            'gioithieu_id',
            'gioithieu_tieude',
            'gioithieu_noidung:ntext',
        ],
    ]) ?>

</div>
