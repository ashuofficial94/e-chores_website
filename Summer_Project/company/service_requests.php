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
      <style>
        .borderless td, .borderless th {
          border: none !important;
        }
       .panel-body  {
        word-break:break-all
      }
      </style>
	</head>
	<body style="font-family: raleway">
    <?php include '../main/navigate.php'; ?>
    <?php include '../company/get_requests.php' ?>
    <div class="conatiner">
    <div class="panel panel-info">
      <div class="panel-heading" style="height: 40px">
        Service Requests
      </div>
      <div class="panel-body">
        <ol>
        <?php 
          $length = count($_SESSION['service_requests']);
          for($i=0; $i<$length ; $i++) {
            if($_SESSION['service_requests'][$i][8] == 'requested') {
              echo '<li>';
              echo '<h4>'.$_SESSION['service_requests'][$i][3].'</h4>';
              echo '<small>'.$_SESSION['service_requests'][$i][5].'</small><br>';
              echo '<b>From: </b>'.$_SESSION['service_requests'][$i][1].'<br>';
              echo $_SESSION['service_requests'][$i][4]; ?>

              <table class="table borderless"><tr><td width="100px">
              <form action="process_requests.php" method="POST">
                <input type="hidden" value="accepted" name="response">
                <input type="hidden" value=<?php echo $_SESSION['service_requests'][$i][0] ?> name="id">
                <button type="submit" class="btn btn-success">Accept</button>
              </form>
              </td><td>
              <form action="process_requests.php" method="POST">
                <input type="hidden" value="declined" name="response">
                <input type="hidden" value=<?php echo $_SESSION['service_requests'][$i][0] ?> name="id">
                <button type="submit" class="btn btn-danger">Decline</button>
              </form>
              </td><tr>
              </table>

        <?php      
              echo '<hr></li>';
            }
          }
        ?>
        </ol>
      </div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading" style="height: 40px">
        Service Accepted
      </div>
      <div class="panel-body">
        <ol>
        <?php 
          $length = count($_SESSION['service_requests']);
          for($i=0; $i<$length ; $i++) {
            if($_SESSION['service_requests'][$i][8] == 'accepted') {
              echo '<li>';
              echo '<h4>'.$_SESSION['service_requests'][$i][3].'</h4>';
              echo '<small>'.$_SESSION['service_requests'][$i][5].'</small><br>';
              echo '<b>From: </b>'.$_SESSION['service_requests'][$i][1].'<br>';
              echo $_SESSION['service_requests'][$i][4]; ?>

            <?php  echo '<hr></li>';
            }
          }
        ?>
        </ol>
      </div>
    </div><div class="panel panel-danger">
      <div class="panel-heading" style="height: 40px">
        Service Declined
      </div>
      <div class="panel-body">
        <ol>
        <?php 
          $length = count($_SESSION['service_requests']);
          for($i=0; $i<$length ; $i++) {
            if($_SESSION['service_requests'][$i][8] == 'declined') {
              echo '<li>';
              echo '<h4>'.$_SESSION['service_requests'][$i][3].'</h4>';
              echo '<small>'.$_SESSION['service_requests'][$i][5].'</small><br>';
              echo '<b>From: </b>'.$_SESSION['service_requests'][$i][1].'<br>';
              echo $_SESSION['service_requests'][$i][4].'<hr></li>';
            }
          }
        ?>
        </ol>
      </div>
    </div>
    </div>
  </body>
</html>
