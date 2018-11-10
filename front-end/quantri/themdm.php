<?php
if(isset($_POST['submit']))
{
    $tendm = $_POST['tendm'];
    $loai = $_POST['loai'];
    if( $tendm!=null && $loai != null)
    {
        $sql = "INSERT INTO `category` (`category_name`, `loai`) VALUES ('$tendm', '$loai')";
        $query = mysqli_query($conn, $sql);
        if($query != null){
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
                    <h1 class="page-header">Thêm mới danh mục</h1>
                </div>
            </div><!--/.row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Thêm mới danh mục</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form role="form" method="post">

                                    <div class="form-group">
                                        <label>Tên danh mục</label>
                                        <input class="form-control" type="text" required="" name="tendm">
                                    </div>
                                    <div class="form-group">
                                        <label>Loại</label>
                                        <input class="form-control" type="text" required="" name="loai">
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                                    <button type="reset" class="btn btn-default">Làm mới</button>

                            </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->

        </div><!--/.main-->
