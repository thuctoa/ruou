<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GioithieuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'giới thiệu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gioithieu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
$this->title = "Giới thiệu";
?>
<div class="breadcrumb-page">
    <ol class="breadcrumb">
        <li><a href="?r=site/index">Trang chủ</a></li>
        <li class="active"><a href="?r=gioithieu%2Fview&id=1">Giới thiệu</a></li>
    </ol><!--end breadcrumb-->
</div>
<div class="content-catogery">
    <div class="col-sm-3">
        <div class="box-category">
            <h3>Giới thiệu</h3>
            <ul>
                <li><h2><a href="?r=gioithieu%2Fview&id=1">Giới thiệu về trung tâm</a> </h2></li>
                <li><h2><a href="?r=gioithieu%2Fview&id=3">Thiết bị công nghệ rượu</a> </h2></li>
                <li><h2><a href="?r=gioithieu%2Fview&id=2">Thiết bị công nghệ tinh dầu</a> </h2></li>
                <!-- <li><h2><a href="#">Products to be Launched</a> </h2></li> -->
            </ul>
        </div><!--end box-category-->
    </div>
    <div class="col-sm-9">
        <div class="detail-new">
            <h3 class="name-tittle">Giới thiệu</h3>
            <div class="content-new">

                <h3 class="text-center"><?php=$gioithieu->gioithieu_tieude?></h3>

                <?=$gioithieu->gioithieu_noidung;?>
            </div>
            <br class="space"/>
        </div> <!-- end content-catogery -->
    </div>