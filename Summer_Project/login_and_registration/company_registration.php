<?php
	include '../main/connect.php';

	$name = $_POST['company_name'];
	$id = $_POST['company_id'];
	$contact = $_POST['contactno'];
	$address = $_POST['address'];
	$email = $_POST['company_email'];
	$aow = $_POST['areaofwork'];
	$owner = $_POST['owner_name'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$jobid = $_POST['jobid'];

	$sql = "INSERT INTO COMPDETAIL(COMPID, COMPNAME, AREAOFWORK,CONTACTNO, EMAILID, OWNERNAME, ADDRESS, JOBID)
			VALUES ('$id', '$name', '$aow', '$contact', '$email', '$owner','$address', '$jobid')";

	$result = mysqli_query($conn, $sql);
			
	$sql = "INSERT INTO LOGINDETAIL(ID, USERPASS, USERTYPE, STATUS) VALUES ('$id', '$password', 'company', 'false')";

	mysqli_query($conn, $sql);

	if($result) {
		header('Location: ../login_and_registration/registration_success.php?user='.$id.'&pass='.$password);
	}

	else {
		echo 'Registration Failed.'.mysqli_error($conn);
	}

?>