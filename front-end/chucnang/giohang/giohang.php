<?php

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
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <form id="giohang" method="post">
                        <table class="table table-hover">
                            <thead style="background-color:#D2B48C">
                            <tr>
                                <th colspan="5">
                                    <h5>Giỏ hàng của bạn
                                        <small>
                                            <?php
                                            $c = 0;
                                            if (isset($_SESSION["giohang1"])) {
                                                $c += count($_SESSION["giohang1"]);
                                            }
                                            if (isset($_SESSION["giohang2"])) {
                                                $c += count($_SESSION["giohang2"]);
                                            }
                                            if (isset($_SESSION["giohang3"])) {
                                                $c += count($_SESSION["giohang3"]);
                                            }
                                            echo "(có $c trong giỏ hàng)";
                                            ?>
                                        </small>
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
                                            <div target="_blank">
                                                <img style="height: 200px" class="img-fluid"
                                                     src="./quantri/anh/<?php echo $row1["image"]; ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <h6><?php echo $row1["phone_name"]; ?>
                                                <h6>

                                        </td>
                                        <td>
                                            <p class="price"><?php echo $row1["price"]; ?></p>
                                        </td>
                                        <td data-th="Quantity"><input name="sl1[<?php echo $row1["id_phone"] ?>]"
                                                                      class="form-control text-center"
                                                                      value="<?php echo $sl1; ?>"
                                                                      type="number">
                                        </td>
                                        <td>
                                            <a href="./chucnang/giohang/xoahang.php?dau=1&id_sp=<?php echo $row1['id_phone']; ?>">
                                                <i class="fa fa-trash-o">X</i></a>
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
                                    $sumkm =  $km*$sl2 ;
                                    ?>
                                    <tr>
                                        <td>
                                            <div target="_blank">
                                                <img style="height: 200px" class="img-fluid"
                                                     src="./quantri/anh/<?php echo $row2["image"]; ?>">
                                            </div>
                                        </td>
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
                                        </td>
                                        <td data-th="Quantity"><input name="sl2[<?php echo $row2["id_phone"] ?>]"
                                                                      class="form-control text-center"
                                                                      value="<?php echo $sl2; ?>"
                                                                      type="number">
                                        </td>
                                        <td>
                                            <a href="./chucnang/giohang/xoahang.php?dau=0&id_sp=<?php echo $row2['id_phone']; ?>">
                                                <i class="fa fa-trash-o">X</i></a>
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
                                            <div target="_blank">
                                                <img style="height: 200px" class="img-fluid"
                                                     src="./quantri/phukien/<?php echo $row3["image"]; ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <h6><?php echo $row3["name"]; ?>
                                                <h6>
                                        </td>
                                        <td>
                                            <p class="price"><?php echo $row3["price"]; ?></p>
                                        </td>
                                        <td data-th="Quantity"><input
                                                    name="sl3[<?php echo $row3["id_phone_accessories"] ?>]"
                                                    class="form-control text-center" value="<?php echo $sl3; ?>"
                                                    type="number">
                                        </td>
                                        <td>
                                            <a href="./chucnang/giohang/xoahang.php?dau=2&id_pk=<?php echo $row3['id_phone_accessories']; ?>"><i
                                                        class="fa fa-trash-o">X</i></a>

                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><strong>Tạm tính:</strong></td>
                                <td><p class="price"><?php $sum = $sum1 + $sum2 + $sum3;
                                        echo $sum; ?></p></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><i>Khuyến mãi:</i></td>
                                <td><p class="pricesafe"><?php echo "-" . $sumkm; ?></p></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><strong>Tổng tiền:</strong></td>
                                <td><p class="price"><?php echo $sum - $sumkm; ?></p></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table table-borderless">
                            <thead style="background-color:#D2B48C">
                            <tr>
                                <td></td>
                                <td>
                                    <button onclick="document.getElementById('giohang').submit();" type="submit"
                                            class="btn btn-primary">Cập nhật
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                    <a href="index.php?page_layout=order"> <button class="btn btn-primary">Tiếp tục</button></a>
                </div>
            </div>

        </div>
    </div>
    <?php
} else {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12"
                 style="background: #fff; height: 500px; text-align: center; padding-top: 100px;">
                <div>Không có sẩn phẩm nào trong giỏ hàng</div>
                <a href="index.php">
                    <button type="submit" class="btn btn-primary">Về trang chủ</button>
                </a>
            </div>
        </div>
    </div>
    <?php
}
?>