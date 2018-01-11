<?php 

	include '../main/connect.php';
	session_start();

	if ($_SERVER["REQUEST_METHOD"]=="POST" and isset($_POST) and !empty($_POST)) {
		
		$contact = mysqli_real_escape_string($conn, trim($_POST['contact']));
		$address = mysqli_real_escape_string($conn, trim($_POST['address']));
		$name = mysqli_real_escape_string($conn, trim($_POST['name']));
		$email = mysqli_real_escape_string($conn, trim($_POST['email']));
		$oname = mysqli_real_escape_string($conn, trim($_POST['oname']));
		$aow = mysqli_real_escape_string($conn, trim($_POST['aow']));

		$contactdel = $_POST['contactdel'];
		$addressdel = $_POST['addressdel'];
		$namedel = $_POST['namedel'];
		$emaildel = $_POST['emaildel'];
		$onamedel = $_POST['onamedel'];
		$aowdel = $_POST['aowdel'];

		$compid = $_SESSION['company_info'][0];
		
		
		if(strlen($contact)!=0) {
			$sql = "UPDATE COMPDETAIL SET Contactno = '$contact' WHERE compid = '$compid'";
			mysqli_query($conn, $sql);
		}

		if(strlen($address)!=0) {
			$sql = "UPDATE COMPDETAIL SET Address = '$address' WHERE compid = '$compid'";
			mysqli_query($conn, $sql);
		}

		if(strlen($name)!=0) {
			$sql = "UPDATE COMPDETAIL SET name = '$name' WHERE compid = '$compid'";
			mysqli_query($conn, $sql);
		}

		if(strlen($email)!=0) {
			$sql = "UPDATE COMPDETAIL SET emailid = '$email' WHERE compid = '$compid'";
			mysqli_query($conn, $sql);
		}

		if(strlen($oname)!=0) {
			$sql = "UPDATE COMPDETAIL SET Ownername = '$oname' WHERE compid = '$compid'";
			mysqli_query($conn, $sql);
		}

		if(strlen($aow)!=0) {
			$sql = "UPDATE COMPDETAIL SET areaofwork = '$aow' WHERE compid = '$compid'";
			mysqli_query($conn, $sql);
		}

		if($emaildel) {
			$sql = "UPDATE COMPDETAIL SET emailid = '' WHERE compid = '$compid'";
			mysqli_query($conn, $sql);
		}

		if($onamedel) {
			$sql = "UPDATE COMPDETAIL SET Ownername = '' WHERE compid = '$compid'";
			mysqli_query($conn, $sql);
		}

		if($contactdel) {
			$sql = "UPDATE COMPDETAIL SET Contactno = '' WHERE compid = '$compid'";
			mysqli_query($conn, $sql);
		}

		if($addressdel) {
			$sql = "UPDATE COMPDETAIL SET address = '' WHERE compid = '$compid'";
			mysqli_query($conn, $sql);
		}

		if($namedel) {
			$sql = "UPDATE COMPDETAIL SET name = '' WHERE compid = '$compid'";
			mysqli_query($conn, $sql);
		}

		if($aowdel) {
			$sql = "UPDATE COMPDETAIL SET areaofwork = '' WHERE compid = '$compid'";
			mysqli_query($conn, $sql);
		}

        $sql = "SELECT * FROM COMPDETAIL WHERE compid='$compid'";
        $info = mysqli_query($conn, $sql);
        $result = mysqli_fetch_row($info);

        unset($_SESSION['company_info']);
        $_SESSION['company_info'] = $result;

		header("Location: ../company/company_profile.php");
	}			
?>