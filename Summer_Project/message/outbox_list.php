<?php 

include '../main/connect.php';

$sender = $_SESSION['sender'];

$sql = "SELECT * FROM SENTITEM WHERE SENDERID = '$sender'";
$info = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($info);

unset($_SESSION['outbox_list']);
$_SESSION['outbox_list'] = $result;

?>