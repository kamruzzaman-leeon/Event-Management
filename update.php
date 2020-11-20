<?php

include('connect.php');
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
  
</head>
<body>

	<div class="container">
		<div class=" banner-text">

		<form method="post" action="updatedorder.php" accept-charset="utf-8">


		<div class="form-group">
            <label>Program location</label>
            <input type="text" class="form-control" name="program_location"  required>
        </div>
		<div class="form-group">
            <label>Program Date</label>
            <input type="date" class="form-control" name="program_date"  required>
          </div>
		<div class="form-group">
            <label>Program Time</label>
            <input type="time" class="form-control" name="program_time"  required>
          </div>


		<button type="submit" class="btn btn-success" value="update">Submit</button>
		</form>

	</div>
</div>	

	
	
	
</body>
</html>