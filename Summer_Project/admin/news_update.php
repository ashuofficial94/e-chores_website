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
    <?php include '../admin/get_news.php'; ?>
    <div class="container">
      <h3 class="alert alert-warning">News and Announcements</h3><br>
      <center><button data-toggle="collapse" data-target="#add_news" class="btn btn-success">Add News</button></center>

      <div id="add_news" class="collapse">
        <form action="add_news.php" method="POST">
          <div class="form-group">
            <label>Subject</label>
            <input type="text" class="form-control" name="subject">
          </div>

          <div class="form-group">
            <label>Contents</label>
            <textarea class="form-control" name="content" rows="6"></textarea>
          </div>

          <div class="form-group">
            <label>Remarks</label>
            <input type="text" class="form-control" name="remark">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success">Done</button>
          </div>
        </form>
        <hr>
      </div>

      <ul>
        <?php 
          $length = count($_SESSION['news']);
          for($i=$length-1; $i>=0 ; $i--) {
              echo '<li>';
              echo '<h4>'.$_SESSION['news'][$i][1].'</h4>';
              echo '<small>'.$_SESSION['news'][$i][2].'</small><br>';
              echo '<b>Remarks: </b>'.$_SESSION['news'][$i][4].'<br>';
              echo $_SESSION['news'][$i][3]; ?>

          <form method="POST" action="../admin/delete_news.php" >
            <input type="hidden" value=<?php echo $_SESSION['news'][$i][0]?> name="id">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        <?php
              echo '<hr></li>';
          }
        ?>
        </ul>  
    </div>
  </body>
</html>