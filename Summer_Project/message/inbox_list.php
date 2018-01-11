<?php 

include '../main/connect.php';

$sender = $_SESSION['sender'];

$sql = "SELECT * FROM INBOX WHERE RECEIVERID = '$sender'";
$info = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($info);

unset($_SESSION['inbox_list']);
$_SESSION['inbox_list'] = $result;

?>