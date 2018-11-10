<?php
$sql = "SELECT * FROM giam_gia,phone WHERE giam_gia.id_phone=phone.id_phone LIMIT 6";
$query = mysqli_query($conn, $sql);
$sqlsl = "SELECT * FROM advertisement WHERE loai=1 LIMIT 6";
$querysl = mysqli_query($conn, $sqlsl);
?>
<div>
    <div class="container">
        <div class="row fix-slide">
            <div id="slide" class="col-md-8 col/sm-12 col-12">
                <!--slide-->
                <div id="jssor_1"
                     style=";cposition:relative;margin:0 auto;top:0px;left:0px;width:980px;height:450px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin"
                         style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <!--<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />-->
                    </div>
                    <div data-u="slides"
                         style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                        <?php
                        while($rowsl = mysqli_fetch_array($querysl)) {
                            ?>
                            <div>
                                <img data-u="image" class="img-fluid" src="./quantri/hinh/<?php echo $rowsl['image']; ?>"/>
                                <h4 data-u="thumb"><?php echo $rowsl['thong_tin1']."<br/>".$rowsl['thong_tin2']; ?></h4>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <!-- Thumbnail Navigator -->
                    <!--thông tin phía dưới-->
                    <div data-u="thumbnavigator" class="jssort101"
                         style="position:absolute;left:0px;bottom:0px;width:980px;height:50px;background-color:#fff;"
                         data-autocenter="1" data-scale-bottom="0.75">
                        <div data-u="slides">
                            <div data-u="prototype" class="p" style="width:190px;height:90px;">
                                <div data-u="thumbnailtemplate" class="t"></div>
                                <!--<svg viewbox="0 0 16000 16000" class="cv">-->
                                <!--<circle class="a" cx="8000" cy="8000" r="3238.1"></circle>-->
                                <!--<line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>-->
                                <!--<line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>-->
                                <!--</svg>-->
                            </div>
                        </div>
                    </div>
                    <!--Arrow Navigator Mũi tên diều hướng-->
                    <!--bên phải-->
                    <div data-u="arrowleft" class="jssora106"
                         style="width:55px;height:55px;top:162px;left:30px;"
                         data-scale="0.75">
                        <svg viewbox="0 0 16000 16000"
                             style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                            <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                            <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                        </svg>
                    </div>
                    <!--bên trái-->
                    <div data-u="arrowright" class="jssora106"
                         style="width:55px;height:55px;top:162px;right:30px;"
                         data-scale="0.75">
                        <svg viewbox="0 0 16000 16000"
                             style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                            <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                            <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <!--banner right-->
                <aside id="news">
                    <h4><a href="#">Tin Công nghệ</a></h4>
                    <div class="tintuc">
                        <a href="#">
                            <img class="anh" src="images/news1.png"/>
                            <p>Huawei P20 Pro bắt đầu được cập nhật Android 9.0 Pie</p>
                        </a>
                    </div>
                    <div class="tintuc">
                        <a href="#">
                            <img class="anh" src="images/news1.png"/>
                            <p>Huawei P20 Pro bắt đầu được cập nhật Android 9.0 Pie</p>
                        </a>
                    </div>
                    <?php
                    $sqlbn1 = "SELECT * FROM advertisement WHERE loai=2 LIMIT 2";
                    $querybn1 = mysqli_query($conn, $sqlbn1);
                    while ($rowbn1 = mysqli_fetch_array($querybn1)) {
                        ?>
                        <div>
                            <div class="bannerl">
                                <img src="./quantri/hinh/<?php echo $rowbn1['image']; ?>">
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </aside>
            </div>
        </div>
    </div>
    <div class="container" style="padding-left: 0px">
        <div class="row" id="banner-m">
            <?php
            $sqlbn2 = "SELECT * FROM advertisement WHERE loai=3 LIMIT 1";
            $querybn2 = mysqli_query($conn, $sqlbn2);
            $rowbn2 = mysqli_fetch_array($querybn2);
            ?>
            <div class="col-md-12 col-sm-12 col-12">
               <img class="img-fluid" src="./quantri/hinh/<?php echo $rowbn2['image']; ?>"/>
            </div>
        </div>
    </div>
    <div class="container " style="padding-left: 0;">
        <h3 class="tag title">khuyến mãi sốc</h3>

        <div class="product-list row" style="margin: 0;">
            <?php
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <div class="product-item col-md-4 col-sm-6 col-12">

                    <a href="index.php?page_layout=chitietsanphamkm&id_phone=<?php echo $row['id_phone'];?>&dau=0">
                        <div>
                            <img class="pr1" class="img-fluid" src="./quantri/anh/<?php echo $row['image']; ?>">

                            <div class="pr2">
                                <p><?php echo $row['phone_name']; ?></p>
                                <p class="price"><?php echo $row['price']; ?> VNĐ</p>
                            </div>
                        </div>
                        <p class="tag-product title-p"><?php echo "Giảm giá ".$row['khuyen_mai']."%"; ?></p>

                    </a>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
    <?php
    $sql1 = "SELECT * FROM `phone` ORDER BY id_phone DESC LIMIT 6";
    $query1 = mysqli_query($conn,$sql1);

    ?>
    <div class="container " style="padding-left: 0;">
        <h3 class="tag phone">Điện thoại mới nhất</h3>
        <div class="product-list row" style="margin: 0;">
            <?php
            while ($row1 = mysqli_fetch_array($query1)) {
                ?>
                <div class="product-item col-md-4 col-sm-6 col-12">

                    <a href="index.php?page_layout=chitietsanpham&id_phone=<?php echo $row1['id_phone'];?>&dau=1">
                        <div>
                            <img class="pr1" class="img-fluid" src="./quantri/anh/<?php echo $row1['image']; ?>">
                            <div class="pr2">
                                <p><?php echo $row1['phone_name']; ?></p>
                                <p class="price"><?php echo $row1['price']; ?> VNĐ</p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php
    $sql2 = "SELECT * FROM `phone_accessories` ORDER BY id_phone_accessories LIMIT 6";
    $query2 = mysqli_query($conn,$sql2);
    ?>
    <div class="container " style="padding-left: 0;">
        <h3 class="tag phone">Phụ kiện giá rẻ</h3>
        <div class="product-list row" style="margin: 0;">
            <?php
            while($row2 = mysqli_fetch_array($query2)){
            ?>
            <div class="product-accphone col-md-2 col-sm-3 col-6">
                <a href="index.php?page_layout=chitietphukien&id_phone_accessories=<?php echo $row2['id_phone_accessories']; ?>&dau=1">
                    <div>
                        <img class="pr-acc1" class="img-fluid" src="./quantri/phukien/<?php echo $row2['image']; ?>">

                        <div class="pr-acc2">
                            <p><?php echo $row2['name']; ?></p>
                            <span class="cost"><?php echo $row2['price']." VNĐ"; ?></span>
                        </div>
                    </div>

                </a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>