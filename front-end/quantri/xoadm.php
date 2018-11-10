<?php
session_start();

if($_SESSION['email']!=null){
    $id_dm=$_GET['id_dm'];
    include_once 'connect.php';
    $sql = "DELETE FROM category WHERE id_category=$id_dm";
    $query = mysqli_query($conn, $sql);
    if($query!=null){
        header('location: quantri.php?page_layout=danhsachdm');
    }
    else
    {
        header('index.php');
    }
}
?>