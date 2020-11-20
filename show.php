<?php
include('connect.php');


session_start();
$username=$_SESSION['email'];
$password=$_SESSION['password'];
$sql="SELECT customer_id,name,address,email,phone,bill FROM customer where email = '$username' and password ='$password'LIMIT 1";
$result=$con->query($sql);
$row=mysqli_fetch_array($result);
$customer_id=$row['customer_id'];
$customer_name=$row['name'];
$customer_address=$row['address'];
$customer_email=$row['email'];
$customer_phone=$row['phone'];
$customer_bill=$row['bill'];
$sql1="SELECT program_location,program_date,program_time,program_type FROM program where customer_id='$customer_id'LIMIT 1"; 
$result1=$con->query($sql1);
$row1=mysqli_fetch_array($result1);
$program_location=$row1['program_location'];
$program_date=$row1['program_date'];
$program_time=$row1['program_time'];
$program_type=$row1['program_type'];



$_SESSION['customer_id']=$customer_id;
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
      
       <div class="banner-text">
        	<div>
        		<h1>Customer's Information</h1>
				<p>Name: <?php echo $customer_name ?></p>
				<p>Address: <?php echo $customer_address ?></p>
				<p>Email: <?php echo $customer_email ?></p>
				<p>Phone: <?php echo $customer_phone ?></p>
				<p>Bill: <?php echo $customer_bill ?></p>
				<p>Program Location: <?php echo $program_location ?></p>
				<p>Program Date: <?php echo $program_date ?></p>
				<p>Program Time: <?php echo $program_time ?></p>
				<p>Program Type: <?php echo $program_type ?></p>
	        	</div>
	        	<div class="row">
	        		<form method="post" action ="update.php" >
					<input class="button" type="submit" value="Make Change">
					</form>
					<hr>
					<form method="post" action="cancelorder.php">
	 			  <input class="button" type="submit" value="Order cancel">
					</form >
					<hr>
				<a href="./index.php" class="button" >Logout</a>
				<hr>
				<a href="index.php" class="button" >Home</a>
				<hr>

		</div>

        </div>
      
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
</body>
</html>