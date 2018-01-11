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
	    <?php include '../message/user_list.php' ;?>
	    <?php include '../message/outbox_list.php';?>
	    <div class="container">
		    <div style="width: 20%; float:left;">
		      <h2>Messages</h2>               
		      <ul class="nav nav-pills nav-stacked" role="tablist">
		        <li><a href="../message/message.php">Compose</a></li>
		        <li><a href="../message/inbox.php">Inbox</a></li>
		        <li class="active"><a href="../message/sent_items.php">Sent Items</a></li>      
		      </ul>
		    </div>
		    <div style="width: 80%; float: right;">
			    <ul>
			        <?php 
			          $length = count($_SESSION['outbox_list']);
			          for($i=$length-1; $i>=0 ; $i--) {
			              echo '<hr><li>';
			              echo '<h4>'.$_SESSION['outbox_list'][$i][3].'</h4>';
			              echo '<small>'.$_SESSION['outbox_list'][$i][5].'</small><br>';
			              echo '<b>To: </b>'.$_SESSION['outbox_list'][$i][2].'<br>';
			              echo $_SESSION['outbox_list'][$i][4]; ?>
			              <form method="POST" action="../message/delete_msg.php">
			              	<input type="hidden" value=<?php echo $_SESSION['outbox_list'][$i][0]?> name="id" >
			              	<button type="submit" class="btn btn-danger">Delete</button>
			              </form>
			              <?php
			              echo '</li>';
			          }
			        ?>
			    </ul>  
			</div>
	    </div>
    </body>
</html>