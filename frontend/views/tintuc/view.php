<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TintucSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $tintuc->tintuc_tieude;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breadcrumb-page">
    <ol class="breadcrumb">
        <li><a href="?r=site/index">Trang chủ</a></li>
        <li class="active"><a href="?r=tintuc">Tin tức</a></li>
    </ol><!--end breadcrumb-->
</div>
<div class="content-catogery">
    <div class="col-sm-3">
        <div class="box-category">
            <h3>Giới thiêu</h3>
            <ul>
                    <li><h2><a href="?r=gioithieu%2Fview&id=1">Giới thiệu về trung tâm</a> </h2></li>
                <li><h2><a href="?r=gioithieu%2Fview&id=3">Thiết bị công nghệ rượu</a> </h2></li>
                <li><h2><a href="?r=gioithieu%2Fview&id=2">Thiết bị công nghệ tinh dầu</a> </h2></li>
            </ul>
        </div><!--end box-category-->
    </div>
    <div class="col-sm-9">
        <div class="detail-new">
            
            <div class="content-new">
                <div class="tintuc-index" style="position: relative;bottom: 66px;">
                    <?= $tintuc->tintuc_noidung ?>
                    
                </div>
                
                <br class="space"/>
            </div>
        </div>
        <br class="space"/>
    </div>
    <br class="space"/>
</div> <!-- end content-catogery -->
