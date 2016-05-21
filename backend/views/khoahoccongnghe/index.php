<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KhoahoccongngheSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'khoa học công nghệ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khoahoccongnghe-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('tạo mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'baiviet_id',
            'baiviet_tieude:ntext',
            'baiviet_anh:ntext',
            'baiviet_gioithieu:ntext',
            'baiviet_noidung:ntext',
            // 'baivietid',
            // 'baiviet_ngaylap',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
