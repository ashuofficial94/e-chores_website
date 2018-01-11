<?php
	session_start();	
	
	header("Location: ../main/index.php");

	session_destroy();

?>