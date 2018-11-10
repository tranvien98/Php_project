<?php
$sql ="SELECT * FROM `comment` WHERE 1";
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
            <h1 class="page-header">Quản lý bình luận</h1>
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
                            <th data-sortable="true">ID sản phẩm</th>
                            <th data-sortable="true">Tên khách hàng</th>
                            <th data-sortable="true">Nội dung</th>
                            <th data-sortable="true">Duyệt</th>
                            <th data-sortable="true">xóa</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_array($query)){ ?>
                            <tr style="height: 300px;">
                                <td data-checkbox="true"><?php echo $row['id_comment']; ?></td>
                                <td data-checkbox="true"><?php echo $row['id_product'] ?></td>
                                <td data-checkbox="true"><?php echo $row['name'] ?></td>
                                <td data-checkbox="true"><?php echo $row['comment_content'] ?></td>
                                <td data-sortable="true">   <a href="quantri.php?page_layout=edit&id_sp=<?php echo $row['id_comment']; ?>"> <?php echo $row['check'] ?></a></td>
                                <td data-sortable="true">  <a href="del.php?id_sp=<?php echo $row['id_comment']; ?>">xóa</a></td>

                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->



</div><!--/.main-->
