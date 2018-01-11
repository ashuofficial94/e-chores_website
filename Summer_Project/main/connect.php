<?php

	$conn = mysqli_connect('localhost:3306', 'root','');

	if(!$conn) {
		die ("Database Connection failed". mysqli_error($conn));
	}

	$sql = "CREATE DATABASE IF NOT EXISTS E-CHORES";
	mysqli_query($conn, $sql);

	$select_db = mysqli_select_db($conn, 'e-chores');

	if(!$select_db) {
		die ("Database Selection failed". mysqli_error($conn));
	}

?>