<?php
include_once 'connect.php';
$id = $_GET['id_sp'];
$sql1 = "DELETE FROM `comment` WHERE `comment`.`id_comment` = $id";
mysqli_query($conn, $sql1);
header('location: quantri.php?page_layout=binhluan');
?>