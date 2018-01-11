<?php 
	include '../main/connect.php';
	session_start();


	$subject = $_POST['subject'];
	$content = $_POST['content'];
	$remark = $_POST['remark'];

	$sql = "INSERT INTO NEWS(SUBJECT, CONTENTS, REMARK) VALUES('$subject','$content','$remark')";
	mysqli_query($conn, $sql);

	header('Location: ../admin/news_update.php');
?>