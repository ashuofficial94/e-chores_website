<?php 
include ('connect.php');

$jobid = 'OfficeBoy';

$sql = "SELECT * FROM EMPDETAIL WHERE jobid = '$jobid'";
$info = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($info, MYSQLI_NUM);

if(isset($_SESSION['OfficeBoy']))
	$_SESSION['OfficeBoy'] = array_replace($_SESSION['OfficeBoy'], $result);
else
	$_SESSION['OfficeBoy'] = $result;

$jobid = 'Guard';

$sql = "SELECT * FROM EMPDETAIL WHERE jobid = '$jobid'";
$info = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($info, MYSQLI_NUM);

if(isset($_SESSION['Guard']))
	$_SESSION['Guard'] = array_replace($_SESSION['Guard'], $result);
else
	$_SESSION['Guard'] = $result;

$jobid = 'Caretaker';

$sql = "SELECT * FROM EMPDETAIL WHERE jobid = '$jobid'";
$info = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($info, MYSQLI_NUM);

if(isset($_SESSION['Caretaker']))
	$_SESSION['Caretaker'] = array_replace($_SESSION['Caretaker'], $result);
else
	$_SESSION['Caretaker'] = $result;


?>