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
  		<script src="../user/profile.js"></script>
  		<link rel="stylesheet" type="text/css" href="../main/main.css">
  		<link rel="shortcut icon" href="../image/icon.ico">
	</head>
	<body style="font-family: raleway">
		<?php include('../main/navigate.php') ?>
		<div class="container-fluid row">
			<div class="col-md-1"></div>
			<div class="panel panel-info col-md-10">
				<div class="panel-heading" style="height: 40px">
					<div clas="row">
						<div class="col-md-3">Company Information</div>
						<div id="edit_changes" class="col-md-1 pull-right"><a href='#' onclick="hideEdit()"><span class="glyphicon glyphicon-pencil"></span>Edit</a></div>
						<div id="delete_info" class="col-md-1 pull-right" style="display:none;"><a href='#' onclick="showDelete()">Delete</a></div>
					</div>
				</div>
				<form class="panel-body" method="post" action="update_profile.php">
				
					<table class="table">
						<tr>
							<td><label>Company Id</label></td>
							<td><?php echo $_SESSION['company_info'][0];?></td>
						</tr>
						<tr>
							<td><label>JobId</label></td>
							<td><?php echo $_SESSION['company_info'][8];?></td>
						</tr>
						<tr>
							<td><label>Company Name</label></td>
							<td><?php echo $_SESSION['company_info'][1];?></td>
							<td><input type="text" class="form-control mutable" style="display: none" name="name" placeholder="Enter your Name"></td>
							<td><input type="checkbox" class="form-control check" style="display: none" name="namedel"></td>
						</tr>
						<tr>
							<td><label>Contact No.</label></td>
							<td><?php echo $_SESSION['company_info'][4];?></td>
							<td><input type="text" class="form-control mutable" style="display: none" name="contact" placeholder="Enter your Contact No."></td>
							<td><input type="checkbox" class="form-control check" style="display: none" name="contactdel"></td>

						</tr>
						<tr>
							<td><label>Address</label></td>
							<td><?php echo $_SESSION['company_info'][7];?></td>
							<td><input type="text" class="form-control mutable" style="display: none" name="address" placeholder="Enter your Address"></td>
							<td><input type="checkbox" class="form-control check" style="display: none" name="addressdel"></td>
						</tr>
						<tr>
							<td><label>E-mail</label></td>
							<td><?php echo $_SESSION['company_info'][5];?></td>
							<td><input type="email" class="form-control mutable" style="display: none" name="email" placeholder="Enter your E-mail"></td>
							<td><input type="checkbox" class="form-control check" style="display: none" name="emaildel"></td>

						</tr>
						<tr>
							<td><label>Owner Name</label></td>
							<td><?php echo $_SESSION['company_info'][6];?></td>
							<td><input type="text" class="form-control mutable" style="display: none" name="oname" placeholder="Enter Owner's name"></td>
							<td><input type="checkbox" class="form-control check" style="display: none" name="onamedel"></td>
						</tr>

						<tr>
							<td><label>Area of Work</label></td>
							<td><?php echo $_SESSION['company_info'][3];?></td>
							<td><input type="text" class="form-control mutable" style="display: none" name="aow" placeholder="Enter the Area of Work"></td>
							<td><input type="checkbox" class="form-control check" style="display: none" name="aowdel"></td>
						</tr>
					</table>
					<div id="save_changes" style="text-align: right; display: none;">
						<button type='submit' class='btn btn-success'>Save Changes</button>
						<button type='button' class='btn btn-default' onclick="showEdit()">Cancel</button>
					</div>
					<div id="delete" style="text-align: right; display: none;">
						<button type='submit' class='btn btn-primary'>Delete Info</button>
						<button type='button' class='btn btn-default' onclick="hideDelete()">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>