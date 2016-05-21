<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TintucSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $dichvu->dichvu_tieude;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breadcrumb-page">
    <ol class="breadcrumb">
        <li><a href="?r=site/index">Trang chủ</a></li>
        <li class="active"><a href="?r=dichvu">Dịch vụ</a></li>
         <li class="active"><a href="?r=dichvu%2Fview&id=<?=$dichvu->dichvu_id?>"><?= $dichvu->dichvu_tieude?></a></li>
    </ol><!--end breadcrumb-->
</div>
<div class="content-catogery">
    <div class="col-sm-3">
        <div class="box-category">
         
              <h3>Tin tức</h3>
         <h3>Dịch vụ</h3>
            <ul>
                <li><h2><a href="?r=suachua">Sửa chữa, cải tạo máy thiết bị công nghệ</a> </h2></li><br><br>
                <li><h2><a href="?r=tuvan">Tư vấn các giải pháp công nghệ tối ưu hóa quá trình sản xuất</a> </h2></li><br><br>
                <li><h2><a href="?r=nghiencuu">Nghiên cứu khoa học và chuyển giao công nghệ</a> </h2></li>
            </ul>
        </div><!--end box-category-->
    </div>
    <div class="col-sm-9">
        <div class="detail-new">
             <h1><?= $dichvu->dichvu_tieude?></h1>
            <div class="content-new">
                <div class="dichvu-index" style="position: relative;bottom: 66px;">
                    <br>
               
                    <br>
                    <br>
                    <?= $dichvu->dichvu_noidung ?>
                    
                </div>
                
                <br class="space"/>
            </div>
        </div>
        <br class="space"/>
    </div>
    <br class="space"/>
</div> <!-- end content-catogery -->
