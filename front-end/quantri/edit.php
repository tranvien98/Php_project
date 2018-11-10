<?php
include_once 'connect.php';
$id = $_GET['id_sp'];
if($_POST['submit']){
    $check =$_POST['textset'];
    $sql ="UPDATE `comment` SET `check` = '$check' WHERE `comment`.`id_comment` = $id;";
    $query = mysqli_query($conn, $sql);
    header('location: quantri.php?page_layout=binhluan');
}

?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"
>
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
    <form method="post">
        <table  data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
            <tr>
                <td data-checkbox="true">Duyệt comment</td>
                <td data-checkbox="true">
                    <select name="textset" >
                        <option value="N">chưa duyệt</option>
                        <option value="Y">Đã duyệt</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td data-checkbox="true"></td>
                <td data-checkbox="true"><input type="submit" name="submit" value="upload"></td>
            </tr>
        </table>
    </form>
    </div>
</div>