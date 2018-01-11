<?php 

	include '../main/connect.php';
	session_start();

	$id = $_POST['id'];
	$sql = "DELETE FROM NEWS WHERE NEWSID = '$id'";
	$result = mysqli_query($conn, $sql);

	header('Location: ../admin/news_update.php');
?>