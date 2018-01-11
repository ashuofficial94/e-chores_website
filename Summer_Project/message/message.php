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
    <div class="container">
    <div style="width: 20%; float:left;">
      <h2>Messages</h2>               
      <ul class="nav nav-pills nav-stacked" role="tablist">
        <li class="active"><a href="../message/message.php">Compose</a></li>
        <li><a href="../message/inbox.php">Inbox</a></li>
        <li><a href="../message/sent_items.php">Sent Items</a></li>      
      </ul>
    </div>
    <div style="width: 75%; float:right;">
      <form action="../message/send_message.php" method="POST">
          <div class="form-group">
            <label>TO </label>
            <select name="recieverid" class="form-control" required>
            <?php 
              $length = count($_SESSION['user_list']);
              for($i=0; $i<$length; $i++) {
                if(strcmp($_SESSION['user_list'][$i][0], $_SESSION['sender'])) {
            ?>
            <option value=<?php echo $_SESSION['user_list'][$i][0]?>><?php echo $_SESSION['user_list'][$i][0]?></option>
            <?php } }?>
            </select>
          </div>

          <div class="form-group">
            <label>FROM</label>
            <input type="text" value='@<?php echo $_SESSION['sender']?>' name="senderid" class="form-control" disabled>
          </div>

          <div class="form-group">
            <label>Subject</label>
            <input type="text" name="subject" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control" rows="5"></textarea>
          </div>

          <button class="btn btn-success" type="submit">Send Message</button>
        </form> 
    </div>
    </div>
  </body>
  </body>
</html>