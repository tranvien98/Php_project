<?php
$id_sp1 = $_GET['id_sp1'];
$id_sp2 = $_GET['id_sp2'];
$sql1 = "SELECT * FROM phone WHERE id_phone=$id_sp1";
$query1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_array($query1);
$sql2 = "SELECT * FROM phone WHERE id_phone=$id_sp2";
$query2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($query2);
?>
<div>
    <div class="container">
        <h2 id="tim"> So Sánh điện thoại </h2>
        <div class="products">
            <div class="row ">
                <div class="col-12-md col-12-sm col-12">
                    <table class="tables">
                        <thead>
                        <tr>
                            <th></th>
                            <th>
                                <img class="imageso" src="./quantri/anh/<?php echo $row1['image']; ?>">
                                <p><?php echo $row1['phone_name']; ?></p>
                            </th>
                            <th>
                                <img class="imageso" src="./quantri/anh/<?php echo $row2['image']; ?>">
                                <p><?php echo $row2['phone_name']; ?></p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="table-m">
                            <td>Màn hình</td>
                            <td><?php echo $row1['man_hinh']; ?></td>
                            <td><?php echo $row2['man_hinh']; ?></td>
                        </tr>
                        <tr class="table-m">
                            <td>hệ điều hành</td>
                            <td><?php echo $row1['he_dieu_hanh']; ?></td>
                            <td><?php echo $row2['he_dieu_hanh']; ?></td>
                        </tr>
                        <tr class="table-m">
                            <td>camera sau</td>
                            <td><?php echo $row1['camera_sau']; ?></td>
                            <td><?php echo $row2['camera_sau']; ?></td>
                        </tr>
                        <tr class="table-m">
                            <td>camera trước</td>
                            <td><?php echo $row1['camera_truoc']; ?></td>
                            <td><?php echo $row2['camera_truoc']; ?></td>
                        </tr>
                        <tr class="table-m">
                            <td>CPU</td>
                            <td><?php echo $row1['cpu']; ?></td>
                            <td><?php echo $row2['cpu']; ?></td>
                        </tr>
                        <tr class="table-m">
                            <td>Ram</td>
                            <td><?php echo $row1['ram']; ?></td>
                            <td><?php echo $row2['ram']; ?></td>
                        </tr>
                        <tr class="table-m">
                            <td>Bộ nhớ trong</td>
                            <td><?php echo $row1['bo_nho_trong']; ?></td>
                            <td><?php echo $row2['bo_nho_trong']; ?></td>
                        </tr class="table-m">
                        <tr>
                            <td>thẻ nhớ</td>
                            <td><?php echo $row1['the_nho']; ?></td>
                            <td><?php echo $row2['the_nho']; ?></td>
                        </tr>
                        <tr class="table-m">
                            <td>pin</td>
                            <td><?php echo $row1['pin']; ?></td>
                            <td><?php echo $row2['pin']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>