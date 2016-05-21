<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TintucSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tin Tức';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tintuc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tạo tin mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tintuc_id',
            'tintuc_tieude',
             'tintuc_anh',
            'tintuc_gioithieu',
            'tintuc_noidung:ntext',
            'tintuc_ngaylap',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
