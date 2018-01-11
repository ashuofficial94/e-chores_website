<?php 

	include '../main/connect.php';
	session_start();

	if ($_SERVER["REQUEST_METHOD"]=="POST" and isset($_POST) and !empty($_POST)) {
		
		$contact = mysqli_real_escape_string($conn, trim($_POST['contact']));
		$paddress = mysqli_real_escape_string($conn, trim($_POST['paddress']));
		$name = mysqli_real_escape_string($conn, trim($_POST['name']));
		$email = mysqli_real_escape_string($conn, trim($_POST['email']));
		$gender = '';

		$contactdel = $_POST['contactdel'];
		$paddressdel = $_POST['paddressdel'];
		$namedel = $_POST['namedel'];
		$emaildel = $_POST['emaildel'];
		$genderdel = $_POST['genderdel'];


		if(isset($_POST['gender']))
			$gender = mysqli_real_escape_string($conn, $_POST['gender']);		

		$user = $_SESSION['user_info'];
		$userid = $_SESSION['user_info'][0];
		
		
		if(strlen($contact)!=0) {
			$sql = "UPDATE user SET Contactno = '$contact' WHERE userid = '$userid'";
			mysqli_query($conn, $sql);
		}

		if(strlen($paddress)!=0) {
			$sql = "UPDATE user SET Address = '$paddress' WHERE userid = '$userid'";
			mysqli_query($conn, $sql);
		}

		if(strlen($name)!=0) {
			$sql = "UPDATE user SET name = '$name' WHERE userid = '$userid'";
			mysqli_query($conn, $sql);
		}

		if(strlen($email)!=0) {
			$sql = "UPDATE user SET emailid = '$email' WHERE userid = '$userid'";
			mysqli_query($conn, $sql);
		}

		if(strlen($gender)!=0) {
			$sql = "UPDATE user SET Gender = '$gender' WHERE userid = '$userid'";
			mysqli_query($conn, $sql);
		}

		if($emaildel) {
			$sql = "UPDATE user SET emailid = '' WHERE userid = '$userid'";
			mysqli_query($conn, $sql);
		}

		if($genderdel) {
			$sql = "UPDATE user SET Gender = '' WHERE userid = '$userid'";
			mysqli_query($conn, $sql);
		}

		if($contactdel) {
			$sql = "UPDATE user SET Contactno = '' WHERE userid = '$userid'";
			mysqli_query($conn, $sql);
		}

		if($paddressdel) {
			$sql = "UPDATE user SET Paddress = '' WHERE userid = '$userid'";
			mysqli_query($conn, $sql);
		}

		if($namedel) {
			$sql = "UPDATE user SET name = '' WHERE userid = '$userid'";
			mysqli_query($conn, $sql);
		}


        $sql = "SELECT * FROM user WHERE userid='$userid'";
        $info = mysqli_query($conn, $sql);
        $result = mysqli_fetch_row($info);

        unset($_SESSION['user_info']);
		$_SESSION['user_info'] = $result;

		header("Location: ../user/user_profile.php");
	}			
?>