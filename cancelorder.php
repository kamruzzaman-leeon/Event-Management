<?php
include('connect.php');
session_start();
$customer_id= $_SESSION['customer_id'];
 $sql2= "DELETE FROM program where customer_id='$customer_id'";	
 if ($con->query($sql2) === TRUE) 
{
   
} 
else 
{
    echo "Error: " . $sql2 . "<br>" . $con->error; 
}
$sql3= "DELETE FROM employee where customer_id='$customer_id'";	
 if ($con->query($sql3) === TRUE) 
{
   
} 
else 
{
    echo "Error: " . $sql3 . "<br>" . $con->error; 
}
$sql1= "DELETE FROM customer where customer_id='$customer_id'";

   	
 if ($con->query($sql1) === TRUE) 
{
   
} 
else 
{
    echo "Error: " . $sql1 . "<br>" . $con->error; 
}
 
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">

<body>

		<div class="container">
			<div class="banner-text"></div>
			<p>Your order has been cancelled.</p>
			<a href="./index.php" class="button" >Home</a>
		</div>
		</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>