<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TintucSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $khoahoccongnghe->baiviet_tieude;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breadcrumb-page">
    <ol class="breadcrumb">
        <li><a href="?r=site/index">Trang chủ</a></li>
        <li class="active"><a href="?r=tintuc">Tin tức</a></li>
         <li class="active"><a href="?r=khoahoccongnghe">Khoa học công nghệ</a></li>
        
         <li class="active"><a href="?r=khoahoccongnghe%2Fview&id=<?=$khoahoccongnghe->baiviet_id?>"><?= $khoahoccongnghe->baiviet_tieude?></a></li>
    </ol><!--end breadcrumb-->
</div>
<div class="content-catogery">
    <div class="col-sm-3">
        <div class="box-category">
         
              <h3>Tin tức</h3>
            <ul>
                <li><h2><a href="?r=sukienvadoitac">Sự kiện và đối tác</a> </h2></li>
                <li><h2><a href="?r=khoahoccongnghe">Khoa học công nghệ</a> </h2></li>
                <li><h2><a href="?r=tuyendungnhansu">Tuyển dụng nhân sự</a> </h2></li>
            </ul>
        </div><!--end box-category-->
    </div>
    <div class="col-sm-9">
        <div class="detail-new">
             <h1><?= $khoahoccongnghe->baiviet_tieude?></h1>
            <div class="content-new">
                <div class="tintuc-index" style="position: relative;bottom: 66px;">
                    <br>
               
                    <br>
                    <br>
                    <?= $khoahoccongnghe->baiviet_noidung ?>
                    
                </div>
                
                <br class="space"/>
            </div>
        </div>
        <br class="space"/>
    </div>
    <br class="space"/>
</div> <!-- end content-catogery -->
