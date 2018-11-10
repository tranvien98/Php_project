<?php
// session_destroy();
session_start();
$dau = $_GET["dau"];
$_SESSION["dau"] = $dau;
if ($dau == 1) {
    $id_sp = $_GET["id_sp"];
    unset($_SESSION["giohang1"]["$id_sp"]);
} else if ($dau == 0) {
    $id_sp = $_GET["id_sp"];
    unset($_SESSION["giohang2"]["$id_sp"]);
} else {
    $id_pk = $_GET["id_pk"];
    unset($_SESSION["giohang3"]["$id_pk"]);
}
if($_SESSION['giohang1']==null){
    unset($_SESSION['giohang1']);
}
if($_SESSION['giohang2']==null){
    unset($_SESSION['giohang2']);
}
if($_SESSION['giohang3']==null){
    unset($_SESSION['giohang3']);
}

header("location:../../index.php?page_layout=giohang");
?>