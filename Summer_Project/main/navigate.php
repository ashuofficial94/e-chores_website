
<?php include '../login_and_registration/company_form.php'; ?>
<?php include '../login_and_registration/login_form.php'; ?>
<?php include '../login_and_registration/user_form.php'; ?>
<?php include '../company/companylist.php'; ?>
<?php include '../user/request_form.php'; ?>
<?php include '../user/feedback_form.php'; ?>
<section style="font-family: raleway">
<nav class="navbar navbar-inverse navbar-static-top row">
	<div class="container-fluid">
		<div class="navbar-header col-md-2">			
			<a class="navbar-brand" href="../main/index.php"><img src="../image/icon.png" height="50" width="50"></a>
			<a class="navbar-brand" href="../main/index.php">E-chores</a>
		</div>
    	<div class="col-md-4 collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li><a href="../main/index.php">Home</a></li>
				<li><a href="../main/aboutus.php">About Us</a></li>
				<li><a href="../main/contactus.php">Contact Us</a></li>
				<li><a href="../main/companies.php">Companies</a></li>
				<li><a href="../main/viewemployees.php">View Employees</a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<form class="navbar-form navbar-left" method="POST" action="../main/search.php">
					<div class="form-group">
					<input type="text" class="form-control" name="keyword" placeholder="Employees, Companies, Services etc." style="width: 225px;" required>
					</div>
					<?php $_SESSION['content'] = 'Search Results: ';?>
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
			</form>
		</div>
		<?php 
		if(isset($_SESSION['user_info'])) {
		?>
		<div class="col-md-2">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['user_info'][1]?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="dropdown-header">  @<?php echo $_SESSION['user_info'][0];?></li>
					<li class="divider"></li>
					<li><a href="../user/user_profile.php">My Profile</a></li>
					<li><a href="#feedback_form" data-toggle="modal" data-target="#feedback_form">Send Feedback</a></li>
					<li><a href="../message/message.php">Message</a></li>
					<li><a href="#request_form" data-toggle="modal" data-target="#request_form">Send Request</a></li>
					<li><a href="../user/service_requests.php">Service Requests</a></li>
					<li><a href="../login_and_registration/logout.php">Logout</a></li>
				</ul>
				</li>
			</ul>
		</div>
		<?php } 
		elseif (isset($_SESSION['company_info'])) { ?>
		<div class="col-md-2">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['company_info'][1]?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="dropdown-header">  @<?php echo $_SESSION['company_info'][0];?></li>
					<li class="divider"></li>
					<li><a href="../company/company_profile.php">Company Profile</a></li>
					<li><a href="../message/message.php">Message</a></li>
					<li><a href="../company/show_feedback.php">Feedbacks and Complaints</a></li>
					<li><a href="../company/add_employees.php">Add Employees</a></li>
					<li><a href="../company/service_requests.php">Service Requests</a></li>
					<li><a href="../login_and_registration/logout.php">Logout</a></li>
				</ul>
				</li>
			</ul>
		</div>
		<?php }
		elseif (isset($_SESSION['admin_info'])) { ?>
		<div class="col-md-2">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['admin_info'][0]?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="dropdown-header">  @<?php echo $_SESSION['admin_info'][0];?></li>
					<li class="divider"></li>
					<li><a href="../message/message.php">Message</a></li>
					<li><a href="../admin/news_update.php">Update News</a></li>
					<li><a href="../login_and_registration/logout.php">Logout</a></li>
				</ul>
				</li>
			</ul>
		</div>
		<?php }
		else { ?>
		<div class="col-md-2">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Register<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#company_form" data-toggle="modal" data-target="#company_form">Company</a></li>
					<li><a href="#user_form" data-toggle="modal" data-target="#user_form">User</a></li>
				</ul>
				</li>
				<li><button type="button" class="btn btn-success navbar-btn" data-toggle="modal" data-target="#login">Login</button></li>
			</ul>
		</div>
		<?php } ?>
	</div>
</nav>
</section>