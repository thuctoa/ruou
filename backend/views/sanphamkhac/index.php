<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SanphamkhacSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sanphamkhacs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanphamkhac-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sanphamkhac', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sanphamkhac_id',
            'sanphamkhac_ten:ntext',
            'sanphamkhac_anh:ntext',
            'sanphamkhac_noidung:ntext',
            'sanphamkhac_ngaylap',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
