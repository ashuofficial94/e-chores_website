<?php 

include '../main/connect.php';

$compid = $_SESSION['user_info'][0];
$sql="SELECT * FROM SERVICEREQUEST WHERE USERID = '$compid'";
$info = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($info, MYSQLI_NUM);

unset($_SESSION['service_requests']);

$_SESSION['service_requests'] = $result;

?>