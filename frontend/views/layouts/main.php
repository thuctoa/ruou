<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        
        <div id="wrap-page">
            <div id="top-page">
                <div class="top-in">
                    <span class="phone"> 0973 58 77 59</span>
                    <div class="language">
                        <select>
                            <option value="en_US">Tiếng Anh</option>
                            <option value="vn_US">Việt Nam</option>
                        </select>
                    </div>
                </div><!-- end .top-in-->

            </div><!-- end .top-page-->
            <header>
                <div class="container">
                    <div class="row">
                        <div class="header-in">
                            <div class="col-sm-5">
                                <a href="/site/index" class="logo"><img src="/images/logo.png"></a>
                            </div>
                            <div class="col-sm-7">
                                <div class="menu">
                                    <div class="navbar-header navbar-brand">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div id="navbar" class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="/site/index">Trang chủ</a></li>
                                            <li class=""><a href="/site/about" class="ui-link">Giới thiệu</a></li>
                                            <li class=""><a href="/site/sanpham" class="ui-link">Sản phẩm</a></li>
                                            <li class=""><a href="/site/dichvu" class="ui-link">Dịch vụ</a></li>
                                            <li class=""><a href="/site/tintuc" class="ui-link">Tin tức</a></li>
                                        </ul>
                                    </div><!--/.nav-collapse -->
                                </div><!--end menu -->
                            </div>
                        </div>
                    </div>
                </div><!-- end .container-->
            </header><!-- end header -->
                <?= $content ?>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="wrap-footer">
                        <div class="col-sm-8">
                            <div class="ft-top">
                                <div class="col-sm-4">
                                    <h2>liên hệ</h2>
                                    <ul class="contact-info">
                                        <li class="adress">ĐH Nông Lâm Bắc Giang</li>
                                        <li class="phone">0973.58.77.59</li>
                                        <li class="mail">quanghc43bkhn@gmail.com</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h2>chúng tôi và khách hàng</h2>
                                    <ul class="customer-info">
                                        <li><a href="#"> Chính sách bảo hành</a></li>
                                        <li><a href="#">Tư vấn lắp đặt</a></li>
                                        <li><a href="#">Thanh toán</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 footer-social">
                                    <h2>kết nối với chúng tôi</h2>
                                    <a target="_blank" class="twitter"  href="https://twitter.com/thietbicongnghe"></a>
                                    <a target="_blank" class="facebook" href="https://www.facebook.com/maythietbicongnghe"></a>
                                    <a target="_blank" class="google" rel="publisher"
                                       href="https://plus.google.com/u/2/106242573171093732801/about?hl=vi"></a>
                                    <a target="_blank" class="youtube" rel="publisher" href="https://youtube.com"></a>
                                </div>
                            </div>
                            <div class="ft-bottom">
                                <span class="namecompany">Trung tâm thiết kế, chế tạo và chuyển giao thiết bị công nghệ cao Việt Nam</span>
                                <span> Địa chỉ:  Số 196 - đường Thân Nhân Trung - Bích Động - Việt Yên - Bắc Giang.</span>
                                <span> Điện thoại:  (0973) 58 77 59 | Email: quanghc43bkhn@gmail.com</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div id="faebook-inner">
                                <iframe frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:280px; height:240px;" scrolling="no" src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/maythietbicongnghe&amp;width=280&amp;height=240&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true"></iframe>
                            </div>
                        </div>
                        <br class="space"/>
                    </div>
                </div>
            </div>
        </footer><!--end footer -->

<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
