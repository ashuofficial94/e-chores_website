<?php 
	
	include '../main/connect.php';
	session_start();

	$user = $_POST['login_username'];
	$pass = $_POST['login_password'];

	$sql = "SELECT * FROM LOGINDETAIL WHERE USERPASS = '$pass' AND ID = '$user'";
	$info = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($info);
	$result = mysqli_fetch_row($info);

	print_r($_POST);
	print_r($result);

	if($count == 1){
		switch($result[2]) {

			case 'company':
				unset($_SESSION['admin_info']);
				unset($_SESSION['user_info']);
				$sql = "SELECT * FROM COMPDETAIL WHERE COMPID = '$user'";
				$info = mysqli_query($conn, $sql);
				$result = mysqli_fetch_row($info);
				$_SESSION['company_info'] = $result;
				header('Location: ../main/index.php');
				die();
			break;

			case 'admin':
				unset($_SESSION['company_info']);
				unset($_SESSION['user_info']);
				$_SESSION['admin_info'] = $result;
				header('Location: ../main/index.php');
				die();
			break;

			case 'user':
				unset($_SESSION['admin_info']);
				unset($_SESSION['company_info']);
				$sql = "SELECT * FROM USER WHERE USERID = '$user'";
				$info = mysqli_query($conn, $sql);
				$result = mysqli_fetch_row($info);
				$_SESSION['user_info'] = $result;
				header('Location: ../main/index.php');
				die();
			break;
		}

		header('Location: ../main/index.php');
	}
	else {
		echo 'Login failed.';
	}

?>