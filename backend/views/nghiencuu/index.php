<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NghiencuuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nghiencuus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nghiencuu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nghiencuu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nghiencuu_id',
            'nghiencuu_tieude:ntext',
            'nghiencuu_anh:ntext',
            'ngiencuu_noidung:ntext',
            'nghiencuu_ngaylap',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
