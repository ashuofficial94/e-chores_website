<?php 

include 'connect.php';

$sql = "SELECT * FROM NEWS";
$info = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($info, MYSQLI_NUM);

unset($_SESSION['news']);

$_SESSION['news'] = $result;

?>