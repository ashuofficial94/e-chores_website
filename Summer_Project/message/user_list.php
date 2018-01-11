<?php 
	include '../main/connect.php';

	$sql = "SELECT ID FROM LOGINDETAIL";
	$info = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($info);
	if(!$result) {
		echo mysqli_error($conn);
	}
	$_SESSION['user_list'] = $result;

	if(isset($_SESSION['company_info'])) {
		$_SESSION['sender'] = $_SESSION['company_info'][0];
	}

	if(isset($_SESSION['user_info'])) {
		$_SESSION['sender'] = $_SESSION['user_info'][0];
	}

	if(isset($_SESSION['admin_info'])) {
		$_SESSION['sender'] = $_SESSION['admin_info'][0];
	}

?>