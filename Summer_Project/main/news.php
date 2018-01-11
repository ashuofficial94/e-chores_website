<?php include 'news_fetch.php'; ?>

<div style="width: 30%; float: right;" class="container">
			
	<div>
		<h3>News and Announcements<span class="glyphicon glyphicon-bullhorn" style="float:right;"></span></h3>
	</div>
	<hr>
	<div style="overflow-y: scroll;height: 400px;" class="well" id="news">
	<?php 
		$length = count($_SESSION['news']);
		for($i = $length-1; $i>=0 ; $i--) {
			echo '<b>'.$_SESSION['news'][$i][1].'</b><br>';
			echo '<small>'.$_SESSION['news'][$i][2].'</small><br>';
			echo  $_SESSION['news'][$i][3].'<br>';
			echo  '<small><i>'.$_SESSION['news'][$i][4].'</i></small><hr>';
		}
	?>
	</div>
</div>