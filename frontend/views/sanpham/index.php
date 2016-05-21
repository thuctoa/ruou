

<div class="breadcrumb-page">
    <ol class="breadcrumb">
        <li><a href="?r=index">Trang chủ</a></li>
        <li class="active"><a href="?r=sanpham">Sản phẩm</a></li>
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


            </ul>
        </div><!--end box-category-->
        <div class="box-news">
            <h3>tin tức</h3>
            <div class="itemnew-home">
                <a href="?r=tintuc%2Fview&id=4"><img src="images/anh-bai-viet.jpg" width="80" height="60" alt="Một số thiết bị và các dự án đã triển khai - phần 1" title="Một số thiết bị và các dự án đã triển khai - phần 1"></a>
                <h4>
                    <a href="?r=tintuc%2Fview&id=4">Một số thiết bị và các dự án đã triển khai - phần 1</a>
                </h4>
            </div>
            <div class="itemnew-home">
                <a href="?r=tintuc%2Fview&id=5"><img src="images/anh-bai-viet.jpg" width="80" height="60" alt="Một số thiết bị và các dự án đã triển khai - phần 2" title="Một số thiết bị và các dự án đã triển khai - phần 2"></a>
                <h4>
                    <a href="?r=tintuc%2Fview&id=5">Một số thiết bị và các dự án đã triển khai - phần 2</a>
                </h4>
            </div>
            <div class="itemnew-home">
                <a href="?r=tintuc%2Fview&id=6"><img src="images/anh-bai-viet.jpg" width="80" height="60" alt="Một số thiết bị và các dự án đã triển khai - phần 3" title="Một số thiết bị và các dự án đã triển khai - phần 3"></a>
                <h4>
                    <a href="?r=tintuc%2Fview&id=6">Một số thiết bị và các dự án đã triển khai - phần 3</a>
                </h4>
            </div>
        </div><!--end box-news-->
    </div>
    <div class="col-sm-9">
        <div class="product-category">
            <div class="col-sm-4">
                <?php
                foreach ($sanpham as $sanpham){
                    $anh=$sanpham->sanpham_anh;
                    $noidung=$sanpham->sanpham_noidung;
                    $ten=$sanpham->sanpham_ten;
                    $id=$sanpham->sanpham_id;
               
                ?>
                <div class="item-product-category">
                    <h2><a href="?r=sanpham%2Fview&id=<?=$id?>"><?=$ten?></a> </h2>
                    <div class="p-images">
                        <a href="?r=sanpham%2Fview&id=<?=$id?>"><img src="<?=$anh?>" alt="Filter"></a>
                    </div>
                    <span class="more"><a href="?r=sanpham%2Fview&id=<?=$id?>"> <span class="more">Chi tiết</span></a></span>
                </div>
                  <?php
                  
                }
                  ?>
            </div>
           
            </div>
            <br class="space"/>
        </div><!--  end product-category -->
        <div class="pagination">
            <nav>
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div><!--pagination -->

    </div>
    <br class="space"/>
</div>

                <br class="space"/>
            </div>
        </div>
        <br class="space"/>
    </div>
    <br class="space"/>
</div> <!-- end content-catogery -->

