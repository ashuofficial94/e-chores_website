<?php 

include '../main/connect.php';
session_start();

$id = $_POST['id'];
$sql = "DELETE FROM SENTITEM WHERE MSGID = '$id'";
mysqli_query($conn,$sql);

header('Location: ../message/sent_items.php'); 

?>