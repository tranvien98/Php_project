<?php
//include_once 'connect.php';
$id_category = $_GET['id_category'];
$dau = $_GET['dau'];
if ($dau == 0) {
    $sql1 = "SELECT * FROM product,phone WHERE product.id_phone=phone.id_phone AND product.id_category=$id_category";
    $query1 = mysqli_query($conn, $sql1);
} else
    $sql1 = "SELECT * FROM phone WHERE 1";
    $query1 = mysqli_query($conn, $sql1);
?>
<div >
    <div class="container">
        <div class="row product-list">
            <?php
            while ($rowdm = mysqli_fetch_array($query1)) {
                ?>
                <div class="product-item col-md-3 col-sm-6 col-12">
                    <img class="img-fluid" src="./quantri/anh/<?php echo $rowdm['image']; ?>">
                    <p class="name"><?php echo $rowdm['phone_name']; ?></p>
                    <p class="price"><?php echo $rowdm['price'] . " VNĐ" ?></p>
                    <div class="mask">
                        <a href="index.php?page_layout=chitietsanpham&id_phone=<?php echo $rowdm['id_phone']; ?>&dau=1">Xem
                            chi tiết</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
</div>


