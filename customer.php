<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Event Management|Customer</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 	 <link rel="stylesheet" href="css/style.css">
	
</head>
<body>

		<div class="container">

			<div class="banner-text">
        <p style="font-size: 4vh">Customer information's</p>
        <form action="form_submit.php" method="post"style="font-size: 2vh">
				 <div class="form row"> 
          <div class="form-group col-md-6">
            <label>Customer Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="" required>
          </div>
          <div class="form-group col-md-6">
            <label">Mobile no</label>
            <input type="tel" class="form-control" name="phone" pattern="[0-9]{11}"placeholder="01XXXXXXXXX"value="" required>
          </div>
         </div>
         <div class="form row"> 
          <div class="form-group col-md-12">
            <label>Address</label>
            <input type="text" class="form-control" name="address" placeholder="customer address" value=""required>
          </div>
         </div>
         <div class="form row"> 
          <div class="form-group col-md-6">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Customer email" value="" required>
          </div>
          <div class="form-group col-md-6">
            <label>Password</label>
            <input type="password" class="form-control" name="password" minlength="6" value="" placeholder="6 digit password" required>
          </div>
         </div>
          <p style="font-size: 4vh">Program information's</p>
          <div class="form row"> 
          <div class="form-group col-md-6">
            <label>Program location</label>
            <input type="text" class="form-control" name="program_location" placeholder="location" required>
          </div>
          <div class="form-group col-md-6">
            <label>program type</label>
             <select name="program_type" class="form-control">
                  <option selected>Choose...</option>
                  <option value="Birthday">Birthday</option>
                  <option value="Wedding">Wedding</option>
                  <option value="Conference">Conference</option>
                </select>
          </div>
         </div>
         <div class="form row"> 
          <div class="form-group col-md-6">
            <label>Program Date</label>
            <input type="date" class="form-control" name="program_date" value="" required>
          </div>
          <div class="form-group col-md-6">
            <label>Program Time</label>
            <input type="time" class="form-control" name="program_time" value="" required>
          </div>
         </div>
         <button type="submit" class="btn btn-success"value="submit">Submit</button>
          </form>
			</div>
		</div>
    

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
</body>
</html>
<?php
session_start();
$_SESSION['choice']=$_POST['choice'];

if(isset($_POST['checkboxName']))
{ 
    $_SESSION['checkboxName'] = $_POST['checkboxName'];
}
else
{
   $_SESSION["checkboxName"]=0;
}


$_SESSION['person']=$_POST['person'];
$_SESSION['decor']=$_POST['decor'];


?>