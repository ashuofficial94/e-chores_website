
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
  		<link rel="shortcut icon" href="../image/icon.ico">

  		<script type="text/javascript">
		    $(window).on('load',function(){
		        $('#registration_success').modal('show');
		    });
		</script>

		<style type="text/css">
			.modal-backdrop{ 
				opacity: 1 !important; 
			}
		</style>

	</head>
	<body style="font-family: raleway">

    		<?php 
    			session_start();
    			$user = $_GET['user'];
    			$pass = $_GET['pass'];
    		?>

			<section class="modal fade" id="registration_success" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<a href= '../main/index.php'><button type="button" class="close">&times;</button></a>
							<h4>Registration Successful</h4>
						</div>
						<div class="modal-body">
								<a href= '../main/index.php' style="text-decoration: none" ><button type="button" class="btn btn-default btn-danger btn-block">Continue as Guest</button></a>
								<br>
								<form action="../login_and_registration/login.php" method="POST">
									<input type='hidden' name="login_username" value= <?php echo $user ?>>
									<input type='hidden' name="login_password" value= <?php echo $pass ?>>
									<button type="submit" class="btn btn-default btn-success btn-block">Login as @<?php echo $user ?></button>
								</form>
						</div>

						<div class="modal-footer">
							<p><a href="../main/index.php"><span class="glyphicon glyphicon-menu-left"></span>Back to home</a></p>
						</div>
					</div>
				</div>
			</section>
	</body>
</html>