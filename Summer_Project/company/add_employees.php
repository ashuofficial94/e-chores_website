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
      <link rel="stylesheet" type="text/css" href="../main/main.css">
      <style>
      #border {
          border-radius: 25px;
          border: 2px solid gray;
          padding: 20px;
          width: 400px;
          height: 600px;
      }
      table {
          border-collapse: collapse;
      }

      td {
          padding-top: .5em;
          padding-bottom: .5em;
          width: 300px;
      }
    </style>
	</head>
	<body style="font-family: raleway">
    <?php include '../main/navigate.php'; ?>
    <center>
    <h3>Add New Employee</h3>
      <div style="width: 700px" id="border">
        <form action="../company/save_employee.php" method="POST" enctype="multipart/form-data">
          <table >
            <div class="form-group">
              <tr>
              <td width="200px"><label>Employee ID</label>:</td>
              <td><input type="text" name="eid" class="form-control" placeholder="Employee ID" required></td>
              </tr>
            
            </div>
            <div class="form-group">
              <tr>
              <td width="200px"><label>Employee Name</label>:</td>
              <td><input type="text" name="ename" class="form-control" placeholder="Employee Name" required></td>
              </tr>
            
            </div>
            <div class="form-group">
              <tr>
              <td width="200px"><label>Photo</label>:</td>
              <td><input type="file" id="uploadFile" name="uploadFile" class="form-control" required></td>
              </tr>
            </div>
            <div class="form-group">
              <tr>
              <td width="200px"><label>Address</label>:</td>
              <td><textarea name="address" class="form-control" placeholder="Employee Address" required></textarea></td>
              </tr>

            </div>
            <div class="form-group">
              <tr>
              <td width="200px"><label>Date of Birth</label>:</td>
              <td><input type="date" name="dob" class="form-control" required></td>
              </tr>
            </div>
            <div class="form-group">
              <tr>
              <td width="200px"><label>Job ID</label>:</td>
              <td><select name="jobid" class="form-control" required>
                <option value="OfficeBoy">Office Boy</option>
                <option value="Guard">Guard</option>
                <option value="Caretaker">Caretaker</option>
              </select></td>
              </tr>
            </div>
            <div class="form-group">
              <tr>
              <td width="200px"><label>Experience</label>:</td>
              <td><input type="text" name="experience" class="form-control" required></td>
              </tr>
            </div>
            <div class="form-group">
              <tr>
                <td width="200px"><label>Gender</label></td>
                <td width="20px"><input type="radio" name="gender" value="male" required> Male
                <input type="radio" name="gender" value="female" required> Female</td>
              </tr>
            </div>
            <div class="form-group">
              <tr>
              <td width="200px"><label>Contact No.</label>:</td>
              <td><input type="text" name="contactno" class="form-control" required></td>
              </tr>
            </div>
          </table>
          <hr>
          <button type="submit" class="btn btn-success" style="float: right;">Add Employee</button>
        </form>
      </div>
    </center>
  </body>
</html>