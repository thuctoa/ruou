<?php
    $this->title = "Tin tức";
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
            <h3>Tin tức</h3>
            <ul>
                <li><h2><a href="?r=sukienvadoitac">Sự kiện và đối tác</a> </h2></li>
                <li><h2><a href="?r=khoahoccongnghe">Khoa học công nghệ</a> </h2></li>
                <li><h2><a href="?r=tuyendungnhansu">Tuyển dụng nhân sự</a> </h2></li>
            </ul>
        </div><!--end box-category-->
    </div>
    <div class="col-sm-9">
        <div class="new">
            <?php
            foreach ($tintuc as $tintuc){
                $anh=$tintuc->tintuc_anh;
                $tieude=$tintuc->tintuc_tieude;
                $gioithieu=$tintuc->tintuc_gioithieu;
                $id=$tintuc->tintuc_id;
            ?>
            <div class="list-new">
                <a href="#" ><img src="<?=$anh?>" class="imgstyle"> </a>
                <h2><a href="?r=tintuc%2Fview&id=<?=$id?>"><?=$tieude?></a> </h2>
                <p>
                   <?=$gioithieu?>
                </p>
            </div>
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
