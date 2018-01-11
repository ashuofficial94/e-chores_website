<?php 

	include '../main/connect.php';
	session_start();

	$senderid = $_SESSION['sender'];
	$recieverid = $_POST['recieverid'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$sql = "INSERT INTO INBOX(SENDERID, RECEIVERID, SUBJECT, MESSAGE) VALUES('$senderid','$recieverid','$subject','$message')";
	$result = mysqli_query($conn, $sql);

	if(!$result) {
		echo mysqli_error($conn);
	}
	$sql = "INSERT INTO SENTITEM(SENDERID, RECEIVERID, SUBJECT, MESSAGE) VALUES('$senderid','$recieverid','$subject','$message')";
	mysqli_query($conn, $sql);

	header('Location: ../message/message.php');

?>