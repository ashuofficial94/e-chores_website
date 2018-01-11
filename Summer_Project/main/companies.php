<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway">
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<title>E-chores</title>
  		<link rel="shortcut icon" href="../image/icon.ico">
	</head>
	<body>
		<?php include '../main/navigate.php'; ?>
		<?php include '../company/companylist.php'; ?>
		<div class="container">
		<h3>Companies Providing Office Boy Service: </h3>
		<table class="table table-hover">
    		<thead>
	    		<tr>
	    			<th>CompanyID</th>
	    			<th>Company Name</th>
	    			<th>Contact No.</th>
	    			<th>E-mail</th>
	    		</tr>
    		</thead>

		<?php
			$_SESSION['url'] = $_SERVER['REQUEST_URI'];

			if(isset($_SESSION['OfficeBoyComp']))
			{

				$length = count($_SESSION['OfficeBoyComp']);
				for ($i=0; $i < $length; $i++) {
					$compid = $_SESSION['OfficeBoyComp'][$i][0];
					echo "<tr>
						<td>".$_SESSION['OfficeBoyComp'][$i][0]."</td>
						<td>".$_SESSION['OfficeBoyComp'][$i][1]."</td>
						<td>".$_SESSION['OfficeBoyComp'][$i][4]."</td>
						<td>".$_SESSION['OfficeBoyComp'][$i][5]."</td>

						<td><input form='companyinfo0".$i."' name='company' type='hidden' value=".$compid."></td>
						<td><button form='companyinfo0".$i."' type='submit' class='btn btn-primary'>Show Info</button></td>
						<td><form method='POST' action='../company/company_info.php' id='companyinfo0".$i."'></form></td>

						</tr>";
				}
			} 	
		?>
		</table>
		<hr>
		<h3>Companies Providing Guard Service: </h3>
		<table class="table table-hover">
    		<thead>
	    		<tr>
	    			<th>CompanyID</th>
	    			<th>Company Name</th>
	    			<th>Contact No.</th>
	    			<th>E-mail</th>
	    		</tr>
    		</thead>

		<?php
			if(isset($_SESSION['GuardComp']))
			{

				$length = count($_SESSION['GuardComp']);
				for ($i=0; $i < $length; $i++) {
					$compid = $_SESSION['GuardComp'][$i][0];
					echo "<tr>
						<td>".$_SESSION['GuardComp'][$i][0]."</td>
						<td>".$_SESSION['GuardComp'][$i][1]."</td>
						<td>".$_SESSION['GuardComp'][$i][4]."</td>
						<td>".$_SESSION['GuardComp'][$i][5]."</td>
						<td><input form='companyinfo1".$i."' name='company' type='hidden' value=".$compid."></td>
						<td><button form='companyinfo1".$i."' type='submit' class='btn btn-primary'>Show Info</button></td>
						<td><form method='POST' action='../company/company_info.php' id='companyinfo1".$i."'></form></td>

						</tr>";

				}
			} 	
		?>
		</table>
		<hr>
		<h3>Companies Providing Caretaker Service: </h3>
		<table class="table table-hover">
    		<thead>
	    		<tr>
	    			<th>CompanyID</th>
	    			<th>Company Name</th>
	    			<th>Contact No.</th>
	    			<th>E-mail</th>
	    		</tr>
    		</thead>

		<?php
			if(isset($_SESSION['OfficeBoyComp']))
			{

				$length = count($_SESSION['CaretakerComp']);
				for ($i=0; $i < $length; $i++) {
					$compid = $_SESSION['CaretakerComp'][$i][0];
					echo "<tr>
						<td>".$_SESSION['CaretakerComp'][$i][0]."</td>
						<td>".$_SESSION['CaretakerComp'][$i][1]."</td>
						<td>".$_SESSION['CaretakerComp'][$i][4]."</td>
						<td>".$_SESSION['CaretakerComp'][$i][5]."</td>
						<td><input form='companyinfo2".$i."' name='company' type='hidden' value=".$compid."></td>
						<td><button form='companyinfo2".$i."' type='submit' class='btn btn-primary'>Show Info</button></td>
						<td><form method='POST' action='../company/company_info.php' id='companyinfo2".$i."'></form></td>
						</tr>";
				}
			} 	
		?>
		</table>
		</div>
	</body>
</html>