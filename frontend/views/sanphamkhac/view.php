<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TintucSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $sanphamkhac->sanphamkhac_ten;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breadcrumb-page">
    <ol class="breadcrumb">
          <li><a href="?r=index">Trang chủ</a></li>
        <li class="active"><a href="?r=sanpham">Sản phẩm</a></li>
               <li class="active"><a href="?r=sanphamkhac">Sản phẩm Khác</a></li>
                      <li class="active"><a href="?r=sanphamkhac%2Fview&id=<?=$sanphamkhac->sanphamkhac_id?>"><?=$sanphamkhac->sanphamkhac_ten?></a></li>
    </ol><!--end breadcrumb-->
</div>
<div class="content-catogery">
    <div class="col-sm-3">
        <div class="box-category">
            <h3>Sản phẩm</h3>
              <ul class="link1">
                <li><h2><a href="?r=ruou"> Rượu</a> </h2></li>
                    <li><h2><a href="?r=sanphamkhac">các thiết bị khác</a> </h2></li>
                  
                
               </ul>
        </div><!--end box-category-->
    </div>
    <div class="col-sm-9">

        <div class="product-detail">
            <div class="box-des">
                <!-- img show mobile -->
                <div class="img-mobile">
                    <img src="<?=$sanphamkhac->sanphamkhac_anh?>">
                </div>
                <div class="slider-images">
                    <div class="simpleLens-gallery-container" id="zoomimages">
                        <div class="simpleLens-container">
                            <div class="simpleLens-big-image-container">
                                <a class="simpleLens-lens-image" data-lens-image="/<?=$sanphamkhac->sanphamkhac_anh?>">
                                    <img src="<?=$sanphamkhac->sanphamkhac_anh?>" class="simpleLens-big-image">
                                </a>
                            </div>
                        </div>

                        <div class="simpleLens-thumbnails-container">
                            <!-- <a href="#" class="simpleLens-thumbnail-wrapper"
                               data-lens-image="/images/product2.jpg"
                               data-big-image="/images/product2.jpg">
                              <img src="images/product2.jpg">
                            </a> -->

                            <!-- <a href="#" class="simpleLens-thumbnail-wrapper"
                               data-lens-image="/images/product3.jpg"
                               data-big-image="/images/product3.jpg">
                              <img src="images/product3.jpg">
                            </a> -->

                            <a href="#" class="simpleLens-thumbnail-wrapper"
                               data-lens-image="<?=$sanphamkhac->sanphamkhac_anh?>"
                               data-big-image="<?=$sanphamkhac->sanphamkhac_anh?>">
                                <img src="<?=$sanphamkhac->sanphamkhac_anh?>">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-detail-des">
                    <h2><?=$sanphamkhac->sanphamkhac_ten?></h2>
                    <br class="space"/>
                    <!-- <span class="over">Còn hàng</span> -->
                    <!-- <div class="box-price">
                      GIÁ: <b class="red">120.000VNĐ</b><b class="gny">180,000VNĐ</b>
                    </div> -->
                          <!-- <span>
                            <strong>Loại sản phẩm:</strong>
                            <em>Đặt dưới chậu rửa</em>
                          </span>
                           <span>
                            <strong>Công suất lọc:</strong>
                            <em>600GDP</em>
                          </span> -->
                   <?=$sanphamkhac->sanphamkhac_noidung?>
                    <br class="space"/>
                    <!-- <span class="submit_btn"><a href="dathang.html">Đặt hàng ngay</a></span> -->
                    <div class="row">
                        <div class="col-xs-6">
                            <a class="btn btn-primary btn-block" href="tel:0989289666" target="_blank"><i class="fa fa-phone"></i><span class="hidden-xs">&nbsp;Gọi điện</span></a>
                        </div>
                        <div class="col-xs-6">
                            <a class="btn btn-primary btn-block hidden-md hidden-lg" href="sms:0989289666" target="_blank"><i class="fa fa-commenting-o"></i><span class="hidden-xs">&nbsp;Nhắn tin</span></a>
                        </div>
                        <div class="col-xs-6">
                            <a class="btn btn-primary btn-block hidden-xs hidden-sm" href="/lien-he"><i class="fa fa-envelope-o"></i><span>&nbsp;Gửi email</span></a>
                        </div>
                    </div>
                </div>
                <br class="space"/>
            </div><!-- end slider-images-->
            <div class="box-info">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Bài viết liên quan</a></li>
                    <!-- <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Thông số kỹ thuật</a></li>
                    <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Video</a></li> -->
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <div class="list-new">
                            <a href="?r=tintuc%2Fview&id=4" ><img src="images/anh-bai-viet.jpg" class="imgstyle"> </a>
                            <h2><a href="?r=tintuc%2Fview&id=4">Một số thiết bị và các dự án đã triển khai - phần 1</a> </h2>
                            <p>Hình ảnh một số thiết bị và các dự án đã triển khai</p>
                        </div>
                        <div class="list-new">
                            <a href="?r=tintuc%2Fview&id=5"><img src="images/anh-bai-viet.jpg"  class="imgstyle"> </a>
                            <h2><a href="?r=tintuc%2Fview&id=5">Một số thiết bị và các dự án đã triển khai - phần 2</a> </h2>
                            <p>Hình ảnh một số thiết bị và các dự án đã triển khai</p>
                        </div>
                        <div class="list-new">
                            <a href="#"><img src="images/anh-bai-viet.jpg"  class="imgstyle"> </a>
                            <h2><a href="?r=tintuc%2Fview&id=6">Một số thiết bị và các dự án đã triển khai - phần 3</a> </h2>
                            <p>Hình ảnh một số thiết bị và các dự án đã triển khai</p>
                        </div>
                    </div>
                    <!-- <div role="tabpanel" class="tab-pane" id="tab2">Safety guaranteed on the human body with the use of parts made from NSF-approved materials
    
                      Efficient water filtering function with the various water
                      treatment systems</div>
                    <div role="tabpanel" class="tab-pane" id="tab3">Video</div> -->
                </div>
                <br class="space"/>
            </div><!-- end .box-info-->
            <br class="space"/>
            <div class="product-other">
                <span class="title">thiết bị khác</span>
                <div class="listproduct-other">
                    <div class="col-sm-4">
                        <div class="item-product-category">
                            <div class="p-images">
                                <a href="#"><img src="<?=$sanphamkhac->sanphamkhac_anh?>" alt="Filter"></a>
                            </div>
                            <h2><a href="#">Bình gom hơi đốt</a> </h2>
                            <!-- <span class="price">2.200.000VNĐ</span> -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item-product-category">
                            <div class="p-images">
                                <a href="#"><img src="<?=$sanphamkhac->sanphamkhac_anh?>" alt="Filter"></a>
                            </div>
                            <h2><a href="#">Bình gom hơi đốt</a> </h2>
                            <!-- <span class="price">2.200.000VNĐ</span> -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item-product-category">
                            <div class="p-images">
                                <a href="#"><img src="<?=$sanphamkhac->sanphamkhac_anh?>" alt="Filter"></a>
                            </div>
                            <h2><a href="#">Bình gom hơi đốt</a> </h2>
                            <!-- <span class="price">2.200.000VNĐ</span> -->
                        </div>
                    </div>
                </div>
                <br class="space"/>
            </div><!-- product-other -->
        </div><!--product-detail -->
    </div>
    <br class="space"/>
</div> <!-- end content-catogery -->

