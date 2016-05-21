<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TuvanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tuvans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuvan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tuvan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tuvan_id',
            'tuvan_tieude:ntext',
            'tuvan_anh:ntext',
            'tuvan_noidung:ntext',
            'tuvan_ngaytao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
