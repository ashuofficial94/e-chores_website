<?php 

include '../main/connect.php';

$compid = $_SESSION['company_info'][0];
$sql="SELECT * FROM FEEDBACK WHERE COMPANYID = '$compid'";
$info = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($info, MYSQLI_NUM);

unset($_SESSION['feedbacks']);

$_SESSION['feedbacks'] = $result;

?>