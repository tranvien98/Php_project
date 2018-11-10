<?php
$sql = "SELECT * FROM `phone_accessories` WHERE 1";
$query = mysqli_query($conn, $sql);
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active"></li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý điện thoại</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body" style="position: relative;">
                    <a href="quantri.php?page_layout=themsp" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm sản phẩm mới</a>
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-sortable="true">ID</th>
                            <th data-sortable="true">Tên sản phẩm</th>
                            <th data-sortable="true">Giá</th>
                            <th data-sortable="true">Ảnh mô tả</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_array($query)){ ?>
                            <tr style="height: 300px;">
                                <td data-checkbox="true"><?php echo $row['id_phone_accessories']; ?></td>
                                <td data-checkbox="true"><a href="#"><?php echo $row['name']; ?></a></td>
                                <td data-checkbox="true"><?php echo $row['price']; ?> VNĐ</td>
                                <td data-sortable="true">
                                    <span class="thumb"><img  height="150px" src="./phukien/<?php echo $row['image']; ?>" /></span>

                                </td>
                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->



</div><!--/.main-->
