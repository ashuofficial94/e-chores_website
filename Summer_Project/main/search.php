<?php

	include 'connect.php';
	session_start();

	$keyword = $_POST['keyword'];
	$_SESSION['keyword'] = $keyword;

	$sql = "SELECT * FROM EMPDETAIL WHERE JOBID='$keyword' OR EMPNAME='$keyword' OR EMPID='$keyword' OR COMPID='$keyword'"; 

	$info = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($info, MYSQLI_NUM);

	unset($_SESSION['search_results_emp']);

	$_SESSION['search_results_emp'] = $result;

	// print_r($_SESSION['search_results']);
	
	$sql = "SELECT * FROM COMPDETAIL WHERE COMPID = '$keyword' OR COMPNAME='$keyword' OR JOBID='$keyword'";

    $info = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($info, MYSQLI_NUM);

	unset($_SESSION['search_results_comp']);

	$_SESSION['search_results_comp'] = $result;

	header('Location: search_results.php');
?>