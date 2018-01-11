<?php 
	include '../main/connect.php';
	session_start();

	$eid = $_POST['eid'];
	$ename = $_POST['ename'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$jobid = $_POST['jobid'];
	$experience = $_POST['experience'];
	$contact = $_POST['contactno'];
	$gender = $_POST['gender'];
	$compid = $_SESSION['company_info'][0];

	$sql = "INSERT INTO EMPDETAIL(EMPID, EMPNAME, ADDRESS, JOBID, EXPERIENCE, DOB, GENDER, CONTACTNO, COMPID) 
			VALUES ('$eid','$ename','$address','$jobid','$experience', '$dob','$gender','$contact','$compid')";

	$result = mysqli_query($conn, $sql);

	if(!$result) {
		echo mysqli_error($conn);
	}

	if (!file_exists('../profile_pics/')) {
	    mkdir('../profile_pics/');
	}

	$target_dir = "../profile_pics/";
	$target_file = $target_dir.basename($_FILES["uploadFile"]["name"]);

	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
		echo 'File not an image.';
	}

	else {
	    
	    if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file)) {
	        
	        $profile_pic = $_FILES["uploadFile"]["name"];

	        $sql = "UPDATE EMPDETAIL SET PHOTO = '$profile_pic' WHERE EMPID = '$eid'";
	        mysqli_query($conn, $sql);
	    } 

	    else {
	        echo 'image upload error.';
	    }
	}


	if($result) {
		echo 'Employee Added.';
		header('refresh:0.5;url=../company/add_employees.php');
	}

	else {
		echo mysqli_error($conn);
	}

?>