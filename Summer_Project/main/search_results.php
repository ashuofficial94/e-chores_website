<?php session_start();?>
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
  		<script src="profile.js"></script>
  		<link rel="stylesheet" type="text/css" href="main.css">
  		<link rel="shortcut icon" href="../image/icon.ico">
	</head>
	<body style="font-family: raleway">
		<?php include('../main/navigate.php') ?>
    <?php $_SESSION['url'] = $_SERVER['REQUEST_URI']; ?>
    <div class="container">
      <h3><?php echo $_SESSION['content']; ?></h3>
      <hr>
      <?php if(count($_SESSION['search_results_comp']) > 0) { ?>

      <h4>Companies</h4>
      <table class="table table-hover">
          <thead>
            <tr>
              <th>CompanyID</th>
              <th>Company Name</th>
              <th>Contact No.</th>
              <th>E-mail</th>
            </tr>
          </thead>

      <?php
        $_SESSION['url'] = $_SERVER['REQUEST_URI'];

        if(isset($_SESSION['search_results_comp']))
        {

          $length = count($_SESSION['search_results_comp']);
          for ($i=0; $i < $length; $i++) {
            $compid = $_SESSION['search_results_comp'][$i][0];
            echo "<tr>
              <td>".$_SESSION['search_results_comp'][$i][0]."</td>
              <td>".$_SESSION['search_results_comp'][$i][1]."</td>
              <td>".$_SESSION['search_results_comp'][$i][4]."</td>
              <td>".$_SESSION['search_results_comp'][$i][5]."</td>
              <td><input form='companyinfo0".$i."' name='company' type='hidden' value=".$compid."></td>
              <td><button form='companyinfo0".$i."' type='submit' class='btn btn-primary'>Show Info</button></td>
              <td><form method='POST' action='../company/company_info.php' id='companyinfo0".$i."'></form></td>
              </tr>";
          }
        }   
      ?>
      </table>
      <?php } ?>
      <?php if(count($_SESSION['search_results_emp']) > 0) { ?>

      <h4>Employees</h4>
      <table class="table table-hover">
      <thead>
        <tr>
          <th>EmployeeID</th>
          <th>Name</th>
          <th>Contact No.</th>
          <th>Company</th>
        </tr>
      </thead>
      <?php
        if(isset($_SESSION['search_results_emp']))
        {

          $length = count($_SESSION['search_results_emp']);
          for ($i=0; $i < $length; $i++) {
            $eid = $_SESSION['search_results_emp'][$i][0];
            echo "<tr>
              <td>".$_SESSION['search_results_emp'][$i][0]."</td>
              <td>".$_SESSION['search_results_emp'][$i][1]."</td>
              <td>".$_SESSION['search_results_emp'][$i][7]."</td>
              <td>".$_SESSION['search_results_emp'][$i][9]."</td>
              <td><input form='employeeinfo1".$i."' name='employee' type='hidden' value=".$eid."></td>
              <td><button form='employeeinfo1".$i."' type='submit' class='btn btn-primary'>Show Info</button></td>
              <td><form method='POST' action='employeeinfo.php' id='employeeinfo1".$i."'></form></td>
              </tr>";
          }
        }   
      ?>
      </table>  
      <?php } ?>
    </div>
  </body>
</html>