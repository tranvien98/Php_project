<?php
$id_phone = $_GET['id_phone'];
$dau = $_GET['dau'];
if ($dau == 0) {
    $sql = "SELECT * FROM giam_gia,phone WHERE giam_gia.id_phone=phone.id_phone AND phone.id_phone=$id_phone";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
} else {
    $sql = "SELECT * FROM phone WHERE phone.id_phone=$id_phone ";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $row['khuyen_mai'] = 0;
}
$loi = array();
$ten = null;
$comment = null;
$loi['ten'] = null;
$loi['comment'] = null;
//$_POST['submit']=null;
if (isset($_POST['submit'])) {
    if (empty($_POST['ten'])) {
        $loi['ten'] = "xin vui lòng nhập tên<br/>";
    } else {
        $ten = $_POST['ten'];

    }
    if (empty($_POST['comment'])) {
        $loi['comment'] = "Nhập ý kiến của bạn<br/>";
    } else {
        $comment = $_POST['comment'];
    }
    if ($ten && $comment) {
        $sql1 = "INSERT INTO `comment` (`id_product`, `name`, `comment_content`, `full_time`, `check`) 
          VALUES ('$id_phone', '$ten', '$comment', now(), 'N');";
        $query1 = mysqli_query($conn, $sql1);
//        mysqli_close($conn);
    }
}
?>

    <div>
        <section>
            <div class="container">
                <div class="row">
                    <h2><?php echo $row['phone_name'] ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-12">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./quantri/anh/<?php echo $row['image'] ?>" width="100%"
                                         class="mx-auto d-block">
                                </div>
                                <div class="carousel-item">
                                    <img src="./quantri/anh/<?php echo $row['image'] ?>" width="100%"
                                         class="mx-auto d-block">
                                </div>
                                <div class="carousel-item">
                                    <img src="./quantri/anh/<?php echo $row['image'] ?>" width="100%"
                                         class="mx-auto d-block">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 col-sm-4 col-12">
                        <h4 class="price1"><?php echo $row['price'] ?></h4>
                        <h4 class="ft-ghoh"> Sản phẩm giao trả hàng trong <strong>24 giờ</strong></h4>
                        <div class="jumbotron">
                            <h3>Khuyến Mại</h3>
                            <p style="color: red; font-size: 20px;"><?php echo $row['khuyen_mai'] . "%" ?></p>
                        </div>
                        <a href="./chucnang/giohang/themhang.php?dau=0&id_sp=<?php echo $row['id_phone']; ?>">
                            <button type="button" class="btn btn-success">Đặt mua</button>
                        </a>

                    </div>
                    <div class="col-md-3 col-sm-4 col-12">
                        <div class="policy">
                            <ul>
                                <li>
                                    <p><strong>Trong hộp có:</strong>Củ sạc, Cáp sạc, Tai nghe, Que chọc sim, Sách hướng
                                        dẫn
                                        sử dụng.</p>
                                </li>
                                <li>
                                    <strong style="color:#B22222;"><?php echo $row['warranty'] ?></strong>
                                </li>
                            </ul>
                        </div>
                        <div class="commitment">
                            <strong>Shop cam kết:</strong>
                            <ul type="circle">
                                <li>Hàng chính hãng</li>
                                <li>1 đổi 1 trong 1 tháng nếu lỗi, đổi sản phẩm tại nhà trong 1 ngày.</li>
                                <li>Giao hàng miễn phí toàn quốc trong 2 tiếng</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Sản phẩm tương tự-->
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 body2">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-description">Mô tả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-reviews">Đánh Giá</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-description" class="container tab-pane active">
                                <?php echo $row['description'] ?>
                            </div>
                            <div id="tab-reviews" class="container tab-pane fade"><br>
                                <div class="col large-12">
                                    <h4><?php echo "Đánh giá " . $row['phone_name'] ?></h4>
                                    <form action="index.php?page_layout=chitietsanphamkm&dau=0&id_phone=<?php echo $row['id_phone']; ?>"
                                          method="post">
                                        <div class="review-form">
                                            <div class="form-group">
                                                <label for="comment">Nhận xét của bạn *:</label>
                                                <textarea required class="form-control" rows="5"
                                                          name="comment"> <?php echo $loi['comment']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="usr">Tên*:</label>
                                                <input required type="text" class="form-control"
                                                       value="<?php echo $loi['ten']; ?>" name="ten">
                                            </div>
                                            <input type="submit" class="btn btn-warning" name="submit">
                                        </div>
                                    </form>
                                    <div>
                                        <ul class="ratingLst">
                                            <?php
                                            $sql2 = "SELECT * FROM `comment` WHERE comment.id_product=$id_phone";
                                            $query2 = mysqli_query($conn, $sql2);
                                            while ($rowcm = mysqli_fetch_array($query2)) {
                                                ?>
                                                <li id="r-30794371" class="par">
                                                    <div class="rh">
                                                        <span><?php echo $rowcm['name']; ?></span>
                                                    </div>

                                                    <div class="rc">
                                                        <p>

                                                            <i><?php echo $rowcm['comment_content']; ?> </i>
                                                        </p>
                                                    </div>


                                                    <div class="ra">

                                                        <span>• </span>
                                                        <div href="javascript:;"
                                                             class="cmtd"><?php echo $rowcm['full_time']; ?></div>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                            ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4">
                        <table class="table table-borderless parameter">
                            <thead>
                            <tr>
                                <th colspan="2">Thông số kỹ thuật</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $row['man_hinh']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $row['he_dieu_hanh']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $row['camera_sau']; ?>/td>
                            </tr>
                            <tr>
                                <td><?php echo $row['camera_truoc']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $row['cpu']; ?></td>

                            </tr>
                            <tr>
                                <td><?php $row['ram']; ?></td>

                            </tr>
                            <tr>
                                <td><?php $row['bo_nho_trong']; ?></td>

                            </tr>
                            <tr>
                                <td><?php echo $row['the_nho']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $row['sim']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $row['pin']; ?></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="products">
                            <h3>Sản phẩm cùng hãng</h3>
                            <div class="row product-list">
                                <?php
                                $hsx = $row['hang_san_xuat'];
                            $sqlss = "SELECT * FROM `phone` WHERE phone.hang_san_xuat= '$hsx' LIMIT 4";
                            $queryss = mysqli_query($conn, $sqlss);
                            while ($rowss = mysqli_fetch_array($queryss)){
                            ?>
                                <div class="product-item col-md-3 col-sm-6 col-12">
                                    <img class="img-fluid" src="./quantri/anh/<?php echo $rowss['image']; ?>">
                                    <p class="name"><?php echo $rowss['phone_name'];?></p>
                                    <p class="price"><?php echo $rowss['price']; ?></p>
                                    <div class="mask">
                                        <a href="index.php?page_layout=sosanh&id_sp1=<?php echo $row['id_phone']; ?>&id_sp2=<?php echo $rowss['id_phone']; ?>">so sánh chi tiết</a>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
mysqli_close($conn);
?>