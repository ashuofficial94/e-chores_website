	<?php 
	include '../main/connect.php';
	session_start();

	$compid = $_POST['compid'];
	$userid = $_SESSION['user_info'][0];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$sql = "INSERT INTO FEEDBACK(USERID, COMPANYID, SUBJECT, MESSAGE) VALUES('$userid','$compid','$subject','$message')";
	$result = mysqli_query($conn, $sql);

	if($result) {
		echo 'feedback sent';
		header('refresh:0.5;url=../main/index.php');
	}
	else {
		echo mysqli_error($conn);
	}
?>