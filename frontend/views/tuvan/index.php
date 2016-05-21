<?php
    $this->title = "Sửa chữa, cải tạo máy thiết bị công nghệ";
?>
<div class="breadcrumb-page">
    <ol class="breadcrumb">
        <li><a href="?r=index">Trang chủ</a></li>
        <li class="active"><a href="?r=dichvu">Dịch vụ</a></li>
        <li class="active"><a href="?r=tuvan">Tư vấn các giải pháp công nghệ tối ưu hóa quá trình sản xuất</a> </h2</li>
    </ol><!--end breadcrumb-->
</div>
<div class="content-catogery">
    <div class="col-sm-3">
        <div  style="height: 300px" class="box-category">
          
             <h3>Dịch vụ</h3>
            <ul>
                <li><h2><a href="?r=suachua">Sửa chữa, cải tạo máy thiết bị công nghệ</a> </h2></li><br><br>
                <li><h2><a href="?r=tuvan">Tư vấn các giải pháp công nghệ tối ưu hóa quá trình sản xuất</a> </h2></li><br><br>
                <li><h2><a href="?r=nghiencuu">Nghiên cứu khoa học và chuyển giao công nghệ</a> </h2></li>
            </ul>
        </div><!--end box-category-->
    </div>
    <div class="col-sm-9">
        <div class="new">
            <?php
            foreach ($tuvan as $tuvan){
                $anh=$tuvan->tuvan_anh;
                $tieude=$tuvan->tuvan_tieude;
                $noidung=$tuvan->tuvan_noidung;
                $id=$tuvan->tuvan_id;
            ?>
            <div class="list-new">
                <a href="#" ><img src="<?=$anh?>" class="imgstyle"> </a>
                <h2><a href="?r=tuvan%2Fview&id=<?=$id?>"><?=$tieude?></a> </h2>
        
            <?php
            }
            ?>
           
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
</div> <!-- end content-catogery -->
