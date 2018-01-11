<?php 
include '../main/connect.php';
session_start();

$response = $_POST['response'];
$id = $_POST['id'];

$sql = "UPDATE SERVICEREQUEST SET SERVICESTATUS = '$response' WHERE REQID = '$id'";
mysqli_query($conn, $sql);
header('Location: ../company/service_requests.php');

if($response == 'accepted') {

}

?>