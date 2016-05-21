<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DichvuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dichvus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dichvu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dichvu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dichvu_id',
            'dichvu_tieude:ntext',
            'dichvu_anh:ntext',
            'dichvu_noidung:ntext',
            'dichvu_ngaylap',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
