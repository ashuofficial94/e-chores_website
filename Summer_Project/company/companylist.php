<?php 
	include ('../main/connect.php');

	$jobid = 'OfficeBoy';

	$sql = "SELECT * FROM COMPDETAIL WHERE jobid = '$jobid'";
	$info = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($info, MYSQLI_NUM);

	unset($_SESSION['OfficeBoyComp']);
	$_SESSION['OfficeBoyComp'] = $result;

	$jobid = 'Guard';

	$sql = "SELECT * FROM COMPDETAIL WHERE jobid = '$jobid'";
	$info = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($info, MYSQLI_NUM);

	unset($_SESSION['GuardComp']);
	$_SESSION['GuardComp'] = $result;

	$jobid = 'Caretaker';

	$sql = "SELECT * FROM COMPDETAIL WHERE jobid = '$jobid'";
	$info = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($info, MYSQLI_NUM);

	unset($_SESSION['CaretakerComp']);
	$_SESSION['CaretakerComp'] = $result;

	$sql = "SELECT COMPID FROM COMPDETAIL";
	$info = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($info);

	unset($_SESSION['company_list']);
	$_SESSION['company_list'] = $result;

?>