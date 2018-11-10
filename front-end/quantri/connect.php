<?php
//mysqli (PHP7)
$dbhost= 'localhost';
$dbuser= 'root';
$dbpass= '';
$dbname= 'sellphone';
// real chat : $dbsocket , $dpport;
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_set_charset($conn, 'UTF8');
if (mysqli_connect_errno()) {
  echo 'Failed to connect to Mysql : '.$mysqli_connect_errno();
}
if($conn)
{
    // echo "TC";
    $sql = "SET NAMES 'utf8";
    $query = mysqli_query($conn, $sql);
}
else 
{
    // echo "TB" . mysqli_error($conn);
}
?>