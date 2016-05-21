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
         <li class="active"><a href="?r=tintuc%2Fview&id=<?=$tintuc->tintuc_id?>"><?= $tintuc->tintuc_tieude?></a></li>
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
             <h1><?= $tintuc->tintuc_tieude?></h1>
            <div class="content-new">
                <div class="tintuc-index" style="position: relative;bottom: 66px;">
                    <br>
               
                    <br>
                    <br>
                    <?= $tintuc->tintuc_noidung ?>
                    
                </div>
                
                <br class="space"/>
            </div>
        </div>
        <br class="space"/>
    </div>
    <br class="space"/>
</div> <!-- end content-catogery -->
