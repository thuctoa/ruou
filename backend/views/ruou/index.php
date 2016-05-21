<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RuouSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ruous';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruou-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ruou', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ruou_id',
            'ruou_tieude:ntext',
            'ruou_anh:ntext',
            'ruou_noidung:ntext',
            'ruou_ngaylap',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
