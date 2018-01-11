
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
	</head>
	<body style="font-family: raleway">
		<script type="text/javascript">
		    $(window).on('load',function(){
		        $('#info').modal('show');
		    });
		</script>

		<?php 
			include ('../main/connect.php');
			session_start();
			// $index = $_GET['index'];
			$companyid = $_POST['company'];
			$sql = "SELECT * FROM COMPDETAIL WHERE compid = '$companyid'";
			$info = mysqli_query($conn, $sql);
			$result = mysqli_fetch_row($info);

			// $sql = "SELECT column_name FROM information_schema.columns WHERE TABLE = 'EMPDETAIL'";
			// $info = mysqli_query($conn, $sql);
			$field = mysqli_fetch_fields($info);

		?>
		<style type="text/css">
    		.modal-backdrop{ opacity: 1 !important; }
    		.borderless td, .borderless th {
			    border: none !important;
			}
    	</style>

			<section class="modal fade" id="info" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a href = <?php echo $_SESSION['url'];?>><button type="button" class="close">&times;</button></a>
							<h4>Company Information</h4>
						</div>
						<div class="modal-body">
							<table style="font-size: 16px" class="table borderless">
								<?php 
									// print_r($result);
									$length = count($field);
									for($i=0; $i<$length; $i++) {
								?>
								<tr><td><label><?php echo $field[$i]->name;?></label></td><td><?php echo $result[$i];?></td></tr>
								<?php } ?>
							</table>
						</div>
						<div class="modal-footer">
							<p><a href= <?php echo $_SESSION['url'];?> ><span class="glyphicon glyphicon-menu-left"></span>Back</a></p>
						</div>
					</div>
				</div>
			</section>
	</body>
</html>
