<?php 
include '../main/connect.php';
session_start();

$compid = $_POST['compid'];
$userid = $_SESSION['user_info'][0];
$subject = $_POST['subject'];
$request = $_POST['request'];

$sql = "INSERT INTO SERVICEREQUEST(USERID, COMPID, SUBJECT, REQUEST ,SERVICESTATUS) 
		VALUES ('$userid','$compid','$subject','$request','requested')";

$result = mysqli_query($conn, $sql);

if($result) {
	echo 'request send';
	header('refresh:0.5;url=../main/index.php');
}

?>