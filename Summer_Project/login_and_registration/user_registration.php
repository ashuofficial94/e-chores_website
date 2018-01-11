<?php 

	include '../main/connect.php';
	session_start();

	$name = $_POST['user_name'];
	$id = $_POST['user_id'];
	$mail = $_POST['user_email'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$contactno = $_POST['contactno'];
	$password = $_POST['password'];

	$sql = "INSERT INTO USER(USERID, NAME, GENDER, ADDRESS, CONTACTNO, EMAILID) VALUES ('$id','$name','$gender','$address','$contactno','$mail')";
	$result = mysqli_query($conn, $sql);

	if($result) {
		$sql = "INSERT INTO LOGINDETAIL(ID, USERPASS, USERTYPE, STATUS) VALUES('$id','$password','user','false')"; 
		$info = mysqli_query($conn, $sql);
		if($info) {
			header('Location: ../login_and_registration/registration_success.php?user='.$id.'&pass='.$password);
		}
	}
	else {
		echo 'User registration failed.'. mysqli_error($conn);
	}

?> 