<?php
if (isset($_POST['submit'])) {
    $ten = $_POST['ten'];
    $mobi = $_POST['mobi'];
    $email = $_POST['email'];
    $add = $_POST['add'];
    if (isset($ten) && isset($mobi) && isset($email) && isset($add)) {
        // Thông tin Khách hàng
        $strBody = '<p>
    <b>Khách hàng:</b> ' . $ten . '<br />
    <b>Email:</b> ' . $email . '<br />
    <b>Điện thoại:</b> ' . $mobi . '<br />
    <b>Địa chỉ:</b> ' . $add . '
</p>';

        $strBody .= '<p align="justify">
    <b>Quý khách đã đặt hàng thành công!</b><br />
    • Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br />
    • Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br />
    <b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
</p>';


// Thiết lập SMTP Server
        require("class.phpmailer.php"); // nạp thư viện
        $mailer = new PHPMailer(); // khởi tạo đối tượng
        $mailer->IsSMTP(); // gọi class smtp để đăng nhập
        $mailer->CharSet = "utf-8"; // bảng mã unicode

//Đăng nhập Gmail
        $mailer->SMTPAuth = true; // Đăng nhập
        $mailer->SMTPSecure = "ssl"; // Giao thức SSL
        $mailer->Host = "smtp.gmail.com"; // SMTP của GMAIL
        $mailer->Port = 465; // cổng SMTP

// Phải chỉnh sửa lại
        $mailer->Username = "tranvanvienbgg@gmail.com"; // GMAIL username
        $mailer->Password = "Tranvien1998"; // GMAIL password
        $mailer->AddAddress($email, $ten); //email người nhận, $email và $ten là 2 biến đc gán bởi $_POST lấy từ trong form
        $mailer->AddCC("tranvanvienbgg@gmail.com", "Admin VienT Shop"); // gửi thêm một email cho Admin

// Chuẩn bị gửi thư nào
        $mailer->FromName = 'Vien Shop'; // tên người gửi
        $mailer->From = 'tranvanvienbgg@gmail.com'; // mail người gửi
        $mailer->Subject = 'Hóa đơn xác nhận mua hàng từ VienT Shop';
        $mailer->IsHTML(TRUE); //Bật HTML không thích thì false

// Nội dung lá thư
        $mailer->Body = $strBody;
        if (!$mailer->Send()) {
            echo "Lỗi gửi email" . $mailer->ErrorInfo;
        } else {
            header('location: index.php?page_layout=orderfinish');
        }


    }

}
//session_destroy();
if (isset($_SESSION["giohang1"]) || isset($_SESSION["giohang2"]) || isset($_SESSION["giohang3"])) {
    $sum1 = 0;
    $sum2 = 0;
    $sum3 = 0;
    $sum = 0;
    $km = 0;
    $sumkm = 0;
    ?>
    <div>
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row">

                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <form method="post">
                        <table class="table table-borderless">
                            <thead style="background-color:#D2B48C">
                            <tr>
                                <th colspan="3"><h5 style="color:red">Thông tin khách hàng</h5></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><strong>Họ và tên: *</strong></td>
                                <td>
                                    <div class="form-group">
                                        <input required type="text" class="form-control" id="usr" name="ten"
                                               placeholder="Nhập họ và tên">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Số điện thoại: *</strong></td>
                                <td>
                                    <div class="form-group">
                                        <input required type="text" class="form-control" id="uphone" name="mobi"
                                               placeholder="Nhập số điện thoại">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Email: *</strong></td>
                                <td>
                                    <div class="form-group">
                                        <input required type="email" class="form-control" id="email" name="email"
                                               placeholder="Nhập email">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Địa chỉ:*</strong></td>
                                <td>
                                    <div class="form-group">
                                        <input required=type="text" class="form-control" id="email" name="add"
                                               placeholder="Nhập số nhà, tên đường, phường / xã,quận (huyện),tỉnh(thành phố)">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" value="ĐẶT HÀNG">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>

                </div>
                <div class="col-md-5">
                    <table class="table table-hover">
                        <thead style="background-color:#D2B48C">
                        <tr>
                            <th colspan="2">
                                <h5>Đơn hàng của bạn
                                </h5>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (isset($_SESSION["giohang1"])) {
                            if (isset($_POST['sl1'])) {
                                foreach ($_POST['sl1'] as $id_sp1 => $sl1) {
                                    if ($sl1 <= 0) {
                                        $_SESSION['giohang1'][$id_sp1] = 1;
                                    } else {
                                        $_SESSION['giohang1'][$id_sp1] = $sl1;
                                    }
                                }

                            }
                            $arrId1 = array();
                            foreach ($_SESSION["giohang1"] as $k => $v) {
                                $arrId1[] = $k;
                            }
                            $strId1 = implode(",", $arrId1);

                            $sql1 = "SELECT * FROM phone WHERE phone.id_phone IN ($strId1) ";
                            $query1 = mysqli_query($conn, $sql1);
                            while ($row1 = mysqli_fetch_array($query1)) {
                                $sum1 += $row1["price"] * $_SESSION["giohang1"][$row1["id_phone"]];
                                $sl1 = $_SESSION["giohang1"][$row1["id_phone"]];
                                ?>
                                <tr>
                                    <td>
                                        <h6><?php echo $row1["phone_name"]; ?>
                                            <h6>

                                    </td>
                                    <td>
                                        <p class="price"><?php echo $row1["price"]; ?></p>
                                    </td>

                                </tr>
                                <?php
                            }
                        }
                        ?>
                        <?php
                        if (isset($_SESSION["giohang2"])) {
                            if (isset($_POST['sl2'])) {
                                foreach ($_POST['sl2'] as $id_sp2 => $sl2) {
                                    if ($sl2 <= 0) {
                                        $_SESSION['giohang2'][$id_sp2] = 1;
                                    } else {
                                        $_SESSION['giohang2'][$id_sp2] = $sl2;
                                    }
                                }

                            }
                            $arrId2 = array();
                            foreach ($_SESSION["giohang2"] as $k => $v) {
                                $arrId2[] = $k;
                            }
                            $strId2 = implode(",", $arrId2);
                            $sql2 = "SELECT * FROM giam_gia,phone WHERE giam_gia.id_phone=phone.id_phone AND phone.id_phone IN ($strId2) ";
                            $query2 = mysqli_query($conn, $sql2);
                            while ($row2 = mysqli_fetch_array($query2)) {
                                $sum2 += $row2["price"] * $_SESSION["giohang2"][$row2["id_phone"]];
                                $sl2 = $_SESSION["giohang2"][$row2["id_phone"]];
                                $km = $row2['price'] * $row2['khuyen_mai'] / 100;
                                $sumkm = $km * $sl2;
                                ?>
                                <tr>

                                    <td>
                                        <h6><?php echo $row2["phone_name"]; ?>
                                            <h6>

                                    </td>
                                    <td>
                                        <p class="price"><?php
                                            echo $row2['price'] - $km; ?></p>
                                        <del style="color:#E9967A"><?php echo $row2['price'] ?></del>
                                        <p class="safe"><?php echo "Giảm " . $row2['khuyen_mai'] . "%" ?></p>
                                    </td>

                                </tr>
                                <?php
                            }
                        }
                        ?>
                        <?php
                        if (isset($_SESSION["giohang3"])) {
                            if (isset($_POST['sl3'])) {
                                foreach ($_POST['sl3'] as $id_sp3 => $sl3) {
                                    if ($sl3 <= 0) {
                                        $_SESSION['giohang3'][$id_sp3] = 1;
                                    } else {
                                        $_SESSION['giohang3'][$id_sp3] = $sl3;
                                    }
                                }

                            }
                            $arrId3 = array();
                            foreach ($_SESSION["giohang3"] as $k => $v) {
                                $arrId3[] = $k;
                            }
                            $strId3 = implode(",", $arrId3);
                            $sql3 = "SELECT * FROM `phone_accessories` WHERE phone_accessories.id_phone_accessories IN ($strId3) ";
                            $query3 = mysqli_query($conn, $sql3);
                            while ($row3 = mysqli_fetch_array($query3)) {
                                $sum3 += $row3["price"] * $_SESSION["giohang3"][$row3["id_phone_accessories"]];
                                $sl3 = $_SESSION["giohang3"][$row3["id_phone_accessories"]];
                                ?>
                                <tr>

                                    <td>
                                        <h6><?php echo $row3["name"]; ?>
                                            <h6>
                                    </td>
                                    <td>
                                        <p class="price"><?php echo $row3["price"]; ?></p>
                                    </td>

                                </tr>
                                <?php
                            }
                        }
                        ?>
                        <tr>

                            <td><strong>Tạm tính:</strong></td>
                            <td><p class="price"><?php $sum = $sum1 + $sum2 + $sum3;
                                    echo $sum; ?></p></td>

                        </tr>
                        <tr>
                            <td>Phí vận chuyển:</td>
                            <td><i>Miễn phí</i></td>
                        </tr>

                        <tr>

                            <td><i>Khuyến mãi:</i></td>
                            <td><p class="pricesafe"><?php echo "-" . $sumkm; ?></p></td>

                        </tr>
                        <tr>
                            <td><strong>Tổng tiền:</strong></td>
                            <td><p class="price"><?php echo $sum - $sumkm; ?></p></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-md-1"></div>

            </div>
        </div>
    </div>
    <?php
}
?>