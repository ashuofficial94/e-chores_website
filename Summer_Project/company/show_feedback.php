<?php 
  session_start();
?>
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
	<body style="font-family: raleway">
    <?php include '../main/navigate.php'; ?>
    <?php include '../company/get_feedback.php'; ?>
    <div class="container">
      <h3 class="alert alert-warning">Feedbacks and Complaints</h3><br>
      <ul>
        <?php 
          $length = count($_SESSION['feedbacks']);
          for($i=$length-1; $i>=0 ; $i--) {
              echo '<li>';
              echo '<h4>'.$_SESSION['feedbacks'][$i][2].'</h4>';
              echo '<small>'.$_SESSION['feedbacks'][$i][4].'</small><br>';
              echo '<b>From: </b>'.$_SESSION['feedbacks'][$i][1].'<br>';
              echo $_SESSION['feedbacks'][$i][3];
              echo '<hr></li>';
          }
        ?>
        </ul>  
    </div>
  </body>
</html>