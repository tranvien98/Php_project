<?php
// session_destroy();
session_start();
$dau = $_GET["dau"];
$id_sp = $_GET["id_sp"];
$_SESSION["dau"]=$dau;
if($dau == 1){
    $id_sp = $_GET["id_sp"];
//    echo $id_sp;
    if (isset($_SESSION["giohang1"]["$id_sp"])) {
        $_SESSION["giohang1"]["$id_sp"]++;
    } else {
        $_SESSION["giohang1"]["$id_sp"] = 1;
    }
}
else if ($dau == 0) {
    $id_sp = $_GET["id_sp"];
//    echo $id_sp;
    if (isset($_SESSION["giohang2"]["$id_sp"])) {
        $_SESSION["giohang2"]["$id_sp"]++;
    } else {
        $_SESSION["giohang2"]["$id_sp"] = 1;
    }
}
else {
    $id_pk = $_GET["id_pk"];
    if (isset($_SESSION["giohang3"]["$id_pk"])) {
        $_SESSION["giohang3"]["$id_pk"]++;
    } else {
        $_SESSION["giohang3"]["$id_pk"] = 1;
    }
}
//foreach ($_SESSION["giohang1"] as $k => $v ) {
//    echo "$v";
//}
//echo $_SESSION["giohang2"][1];
 header("location:../../index.php?page_layout=giohang");
?>