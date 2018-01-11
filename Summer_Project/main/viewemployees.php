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
  		<link rel="stylesheet" type="text/css" href="main.css">
  		<title>E-chores</title>
	</head>
	<body style="font-family: raleway">
		
 		<?php 
 			include('../main/navigate.php');
 			include('../main/employeelist.php'); 
 			
			$_SESSION['url'] = $_SERVER['REQUEST_URI'];
 		?>
 		
		<div class="container">
			<nav class="navbar row">
				<ul class="nav nav-tabs col-md-5">
					<li class="active"><a data-toggle="tab" href="#Services"><b>Services</b></a></li>
					<li><a data-toggle="tab" href="#service1"><b>Office Boy</b></a></li>
					<li><a data-toggle="tab" href="#service2"><b>Guard</b></a></li>
					<li><a data-toggle="tab" href="#service3"><b>Caretaker</b></a></li>
				</ul>
				<br><br>
				<div class="tab-content">
					<div id="Services" class="tab-pane in active slide-right">
						<h3>Services Offered: </h3>
				    	<a data-toggle="tab" href="#service1" style="text-decoration: none"><h3>Office Boy</h3></a>
				    	<a data-toggle="tab" href="#service2" style="text-decoration: none"><h3>Guard</h3></a>
				    	<a data-toggle="tab" href="#service3" style="text-decoration: none"><h3>Caretaker</h3></a>
					</div>
					<div id="service1" class="tab-pane slide-right">
				    	<div>
				    		<h3>List of employees for this service</h3>
				    		
				    		<table class="table table-hover">
				    		<thead>
					    		<tr>
					    			<th>EmployeeID</th>
					    			<th>Name</th>
					    			<th>Contact No.</th>
					    			<th>Company</th>
					    		</tr>
				    		</thead>
				    		<?php
				    			if(isset($_SESSION['OfficeBoy']))
				    			{

				    				$length = count($_SESSION['OfficeBoy']);
				    				for ($i=0; $i < $length; $i++) {
				    					$eid = $_SESSION['OfficeBoy'][$i][0];
				    					echo "<tr>
				    						<td>".$_SESSION['OfficeBoy'][$i][0]."</td>
				    						<td>".$_SESSION['OfficeBoy'][$i][1]."</td>
				    						<td>".$_SESSION['OfficeBoy'][$i][7]."</td>
				    						<td>".$_SESSION['OfficeBoy'][$i][9]."</td>
				    						<td><input form='employeeinfo0".$i."' name='employee' type='hidden' value=".$eid."></td>
				    						<td><button form='employeeinfo0".$i."' type='submit' class='btn btn-primary'>Show Info</button></td>
				    						<td><form method='POST' action='employeeinfo.php' id='employeeinfo0".$i."'></form></td>
				    						</tr>";
				    				}
				    			} 	
				    		?>
				    		</table>
				    	</div>
				    </div>
				  	<div id="service2" class="tab-pane slide-right">
				    	<div>
				    		<h3>List of employees for this service</h3>
				    		<table class="table table-hover">
				    		<thead>
					    		<tr>
					    			<th>EmployeeID</th>
					    			<th>Name</th>
					    			<th>Contact No.</th>
					    			<th>Company</th>
					    		</tr>
				    		</thead>
				    		<?php
				    			if(isset($_SESSION['Guard']))
				    			{

				    				$length = count($_SESSION['Guard']);
				    				for ($i=0; $i < $length; $i++) {
				    					$eid = $_SESSION['Guard'][$i][0];
				    					echo "<tr>
				    						<td>".$_SESSION['Guard'][$i][0]."</td>
				    						<td>".$_SESSION['Guard'][$i][1]."</td>
				    						<td>".$_SESSION['Guard'][$i][7]."</td>
				    						<td>".$_SESSION['Guard'][$i][9]."</td>
				    						<td><input form='employeeinfo1".$i."' name='employee' type='hidden' value=".$eid."></td>
				    						<td><button form='employeeinfo1".$i."' type='submit' class='btn btn-primary'>Show Info</button></td>
				    						<td><form method='POST' action='employeeinfo.php' id='employeeinfo1".$i."'></form></td>
				    						</tr>";
				    				}
				    			} 	
				    		?>
				    		</table>	
				    	</div>
				  	</div>
				  	<div id="service3" class="tab-pane slide-right">
				    	<div>
				    		<h3>List of employees for this service</h3>
				    		<table class="table table-hover">
				    		<thead>
					    		<tr>
					    			<th>EmployeeID</th>
					    			<th>Name</th>
					    			<th>Contact No.</th>
					    			<th>Company</th>
					    		</tr>
				    		</thead>
				    		<?php
				    			if(isset($_SESSION['Caretaker']))
				    			{

				    				$length = count($_SESSION['Caretaker']);
				    				for ($i=0; $i < $length; $i++) {
				    					$eid = $_SESSION['Caretaker'][$i][0];
				    					echo "<tr>
				    						<td>".$_SESSION['Caretaker'][$i][0]."</td>
				    						<td>".$_SESSION['Caretaker'][$i][1]."</td>
				    						<td>".$_SESSION['Caretaker'][$i][7]."</td>
				    						<td>".$_SESSION['Caretaker'][$i][9]."</td>
				    						<td><input form='employeeinfo2".$i."' name='employee' type='hidden' value=".$eid."></td>
				    						<td><button form='employeeinfo2".$i."' type='submit' class='btn btn-primary'>Show Info</button></td>
				    						<td><form method='POST' action='employeeinfo.php' id='employeeinfo2".$i."'></form></td>
				    						</tr>";
				    				}
				    			} 	
				    		?>
				    		</table>		
				    	</div>
				  	</div>
				</div>
			</nav>
		</div> 
	</body>
</html>