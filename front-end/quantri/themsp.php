<?php
$sql = "SELECT * FROM `category` WHERE loai=1";
$query = mysqli_query($conn , $sql);
if(isset($_POST['submit'])){
if($_POST['dac_biet'] == 0){
    $ten_sp="";
    $id_dm="";
    $gia_sp="";
    $chi_tiet_sp="";
    $so_luong="";
    if($_FILES['anh_sp']['name']==""){
        $error_anh_sp='<span style="color: red;">Lỗi ảnh</span>';
    }
    else {
        $anh_sp=$_FILES['anh_sp']['name'];
        $tmp_name=$_FILES['anh_sp']['tmp_name'];
    }

    $bao_hanh="";
    $man_hinh="";
    $he_dieu_hanh="";
    $camera_sau="";
    $camera_truoc="";
    $cpu="";
    $ram="";
    $the_nho="";
    $sim="";
    $bo_nho_trong="";

       $ten_sp=$_POST['ten_sp'];
    $id_dm=$_POST['id_dm'];
    $gia_sp=$_POST['gia_sp'];
    $chi_tiet_sp=$_POST['chi_tiet_sp'];
    $so_luong=$_POST['so_luong'];
    $bao_hanh=$_POST['bao_hanh'];
    $man_hinh=$_POST['man_hinh'];
    $he_dieu_hanh=$_POST['he_dieu_hanh'];
    $camera_sau=$_POST['camera_sau'];
    $camera_truoc=$_POST['camera_truoc'];
    $cpu=$_POST['cpu'];
    $ram=$_POST['ram'];
    $the_nho=$_POST['the_nho'];
    $sim=$_POST['sim'];
    $bo_nho_trong=$_POST['bo_nho_trong'];
    if($anh_sp!=null){
        move_uploaded_file($tmp_name, './anh/'.$anh_sp);
        $sql1 = "INSERT INTO `phone` (`phone_name`, `hang_san_xuat`, `price`, `description`,
        `quantity`, `image`, `warranty`, `count_sell`, `man_hinh`,
        `he_dieu_hanh`, `camera_sau`, `camera_truoc`, `cpu`, `ram`,
            `bo_nho_trong`, `the_nho`, `sim`, `pin`) VALUES 
            ('$ten_sp', '$id_dm', '$gia_sp', $chi_tiet_sp, '$so_luong',
            '$anh_sp', '$bao_hanh', '0', '$man_hinh', '$he_dieu_hanh', '$camera_sau',
            '$camera_truoc', '$cpu', '$ram', '$bo_nho_trong',
            '$the_nho', '$sim', '$pin')";
        $query1 = mysqli_query($conn, $sql1);
        header('location: quantri.php?page_layout=danhsachsp');
    }
}
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active"></li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm sản phẩm mới</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Thêm sản phẩm mới</div>
                <div class="panel-body">

                    <form method="post" enctype="multipart/form-data" role="form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="ten_sp" required="">
                            </div>

                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input type="text" class="form-control" name="gia_sp" required="">
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input type="text" class="form-control" name="so_luong" required="">
                            </div>
                            <div class="form-group">
                                <label>Bảo hành</label>
                                <input type="text" class="form-control" name="bao_hanh" value="12 Tháng" required="">
                            </div>

                            <div class="form-group">
                                <label>Màn hình</label>
                                <input type="text" class="form-control" name="man_hinh">
                            </div>
                            <div class="form-group">
                                <label>Hệ điều hành</label>
                                <input type="text" class="form-control" name="he_dieu_hanh">
                            </div>
                            <div class="form-group">
                                <label>Camera sau</label>
                                <input type="text" class="form-control" name="camera_sau">
                            </div>
                            <div class="form-group">
                                <label>Camera trước</label>
                                <input type="text" class="form-control" name="camera_truoc">
                            </div>
                            <div class="form-group">
                                <label>CPU</label>
                                <input type="text" class="form-control" name="cpu">
                            </div>
                            <div class="form-group">
                                <label>Ram</label>
                                <input type="text" class="form-control" name="ram">
                            </div>
                            <div class="form-group">
                                <label>Bộ nhớ trong</label>
                                <input type="text" class="form-control" name="bo_nho_trong">
                            </div>
                            <div class="form-group">
                                <label>Thẻ nhớ</label>
                                <input type="text" class="form-control" name="the_nho">
                            </div>
                            <div class="form-group">
                                <label>sim</label>
                                <input type="text" class="form-control" name="sim">
                            </div>
                            <div class="form-group">
                                <label>Ảnh mô tả</label>
                                <input type="file" name="anh_sp">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Khuyến mãi</label>
                                <input type="text" class="form-control" name="khuyen_mai" value="">
                            </div>
                            <div class="form-group">
                                <label>Sản phẩm khuyen mai</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="dac_biet" id="optionsRadios1" value=1>Có
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="dac_biet" id="optionsRadios2" value=0 checked>Không
                                    </label>
                                </div>

                            </div>

                            <div class="form-group">
                                <label>Nhà cung cấp</label>
                                <select name="id_dm" class="form-control">
                                    <?php while ($row = mysqli_fetch_array($query)) {?>
                                    <option><?php echo $row['category_name']; ?></option>
                                   <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thông tin mô tả</label>
                                <textarea class="form-control" rows="3" name="chi_tiet_sp"></textarea>
                            </div>


                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                        <button type="reset" class="btn btn-default" name="reset">Làm mới</button>


                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->
