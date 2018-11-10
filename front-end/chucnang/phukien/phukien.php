<?php
//include_once 'connect.php';
$id_category = $_GET['id_category'];
$dau = $_GET['dau'];
if ($dau == 0) {
    $sql1 = "SELECT * FROM phone_accessories,product WHERE phone_accessories.id_phone_accessories=product.id_phone_accessories AND product.id_category=$id_category";
    $query1 = mysqli_query($conn, $sql1);
} else
    $sql1 = "SELECT * FROM phone_accessories WHERE 1";
$query1 = mysqli_query($conn, $sql1);
?>
<div>
    <div class="container">
        <div class="row product-list">
            <?php
            while ($rowdm = mysqli_fetch_array($query1)) {
                ?>
                <div class="product-item col-md-3 col-sm-6 col-12">
                    <img class="img-fluid" src="./quantri/phukien/<?php echo $rowdm['image']; ?>">
                    <p class="name"><?php echo $rowdm['name']; ?></p>
                    <p class="price"><?php echo $rowdm['price'] . " VNĐ" ?></p>
                    <div class="mask">
                        <a href="index.php?page_layout=chitietphukien&id_phone_accessories=<?php echo $rowdm['id_phone_accessories']; ?>&dau=1">Xem
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


