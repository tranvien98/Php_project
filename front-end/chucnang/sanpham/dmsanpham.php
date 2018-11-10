<?php
$sql = "SELECT * FROM `category` WHERE category.loai=1";
$query = mysqli_query($conn,$sql);
?>
<div id="menu" class="col-md-6 col-sm-12 col-12">
    <nav>
        <ul class="nav">
            <li>
                <a id="icon1" href="index.php?page_layout=phone&dau=1&id_category=0">Điện thoại</a>
                <ul class="sub-menu">
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <li><a href="index.php?page_layout=phone&dau=0&id_category=<?php echo $row['id_category']; ?>"><?php echo $row['category_name'] ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </li>
            <?php
            $sql1 = "SELECT * FROM `category` WHERE category.loai=2";
            $query1 = mysqli_query($conn,$sql1);
            ?>
            <li>
                <a id="icon2" href="index.php?page_layout=phukien&dau=1&id_category=0">Phụ kiện</a>
                <ul class="sub-menu">
                    <?php
                    while($rowpk = mysqli_fetch_array($query1)) {
                        ?>
                        <li><a href="index.php?page_layout=phukien&dau=0&id_category=<?php echo $rowpk['id_category']; ?>"><?php echo $rowpk['category_name']; ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </li>
            <li><a id="icon3" href="#">Liên hệ</a></li>
            <li><a id="icon4" href="index.php?page_layout=giohang">Giỏ hàng</a></li>
        </ul>
    </nav>
</div>