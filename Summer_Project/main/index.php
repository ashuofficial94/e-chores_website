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
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">

        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="../image/action-2277292__340.jpg" alt="Image" style="width: 100%; height: 600px">
            <div class="carousel-caption">
              <h3>Daily Chores</h3>
              <p>A helping hand.</p>
            </div>      
          </div>

          <div class="item">
            <img src="../image/2.jpg" alt="Image" style="width: 100%; height: 600px">
            <div class="carousel-caption">
              <h3>Efficient Assitant</h3>
              <p>To make your life easier.</p>
            </div>      
          </div>

          <div class="item">
            <img src="../image/3.jpg" alt="Image" style="width: 100%; height: 600px">
            <div class="carousel-caption">
              <h3>Security</h3>
              <p>And Safe.</p>
            </div>      
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>

    <div style="width: 70%; float: left">
      <center>
        <h3>Our Online Partners</h3><hr>
      </center>  
      <div class="row">
        <div class="col-md-6">
          <img src="../image/download (5).jpg" class="img-responsive" style="width:100%; height:400px" alt="Image">
          <p>Company 1</p>
        </div>
        <div class="col-md-6"> 
          <img src="../image/hello.jpg" class="img-responsive" style="width:100%; height:400px" alt="Image">
          <p>Company 2</p>
        </div>
      </div>
    </div>

    <div style="width: 100%;">
        <?php include 'news.php' ?>
    </div>
  </body>
</html>