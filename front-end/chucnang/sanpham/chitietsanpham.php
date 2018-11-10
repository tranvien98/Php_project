<?php
$id_phone = $_GET['id_phone'];
$dau = $_GET['dau'];
if($dau == 0)
{
    $sql = "SELECT * FROM giam_gia,phone WHERE giam_gia.id_phone=phone.id_phone AND phone.id_phone=$id_phone";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
}
else
{
    $sql = "SELECT * FROM phone WHERE phone.id_phone=$id_phone ";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    $row['khuyen_mai'] = 0;
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
                    <a href="./chucnang/giohang/themhang.php?dau=1&id_sp=<?php echo $row['id_phone']; ?>">
                        <button type="button" class="btn btn-success">Đặt mua</button>
                    </a>

                </div>
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="policy">
                        <ul>
                            <li>
                                <p><strong>Trong hộp có:</strong>Củ sạc, Cáp sạc, Tai nghe, Que chọc sim, Sách hướng dẫn
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
                                <h3>Đánh giá</h3>
                                <p>Chưa có đánh giá nào.</p>
                                <h4><?php echo "Hãy là người đầu tiên đánh giá ".$row['phone_name'] ?></h4>
                                <div class="review-form">
                                    <div class="stars">
                                        <form action="">
                                            <p>Đánh giá của bạn:</p>
                                            <input class="star star-5" id="star-5" type="radio" name="star"/>
                                            <label class="star star-5" for="star-5"></label>
                                            <input class="star star-4" id="star-4" type="radio" name="star"/>
                                            <label class="star star-4" for="star-4"></label>
                                            <input class="star star-3" id="star-3" type="radio" name="star"/>
                                            <label class="star star-3" for="star-3"></label>
                                            <input class="star star-2" id="star-2" type="radio" name="star"/>
                                            <label class="star star-2" for="star-2"></label>
                                            <input class="star star-1" id="star-1" type="radio" name="star"/>
                                            <label class="star star-1" for="star-1"></label>
                                        </form>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Nhận xét của bạn *:</label>
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Tên*:</label>
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                    <button type="button" class="btn btn-warning">Gửi</button>
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
</div>
