<?php
$id_dm=$_GET['id_dm'];
$sql = "SELECT * FROM category WHERE id_category=$id_dm";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
if(isset($_POST['submit'])){
    $category_name = $_POST['ten_dm'];
    $loai = $_POST['loai'];
    if($category_name!=null && $loai!=null){
        $sql1 = "UPDATE `category` SET `category_name` = '$category_name', `loai` = '$loai' WHERE `category`.`id_category` = $id_dm;";
        $query1 = mysqli_query($conn, $sql1);
        if($query1!=null){
            header('location: quantri.php?page_layout=danhsachdm');
        }
    }

}
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
                    <h1 class="page-header">Sửa danh mục</h1>
                </div>
            </div><!--/.row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Sửa danh mục</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form role="form" method="post">

                                    <div class="form-group">
                                        <label>Tên danh mục</label>
                                        <input class="form-control" type="text" name="ten_dm" value="<?php echo $row['category_name'] ?>" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Loại</label>
                                        <input class="form-control" type="text" name="loai" value="<?php echo $row['loai'] ?>" required="">
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Sửa</button>
                                    <button type="reset" class="btn btn-default">Làm mới</button>

                            </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->

        </div><!--/.main-->

