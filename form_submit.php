
<?php     

include('connect.php');


session_start();
$package_var=0;


$event_manager_name=array("A","V","C","D","F","G");
$event_manager=array_rand($event_manager_name);

$package_var=$_SESSION['choice'];
$person_quatity=$_SESSION['person'];
$checkbox_val=$_SESSION['checkboxName'];


if($_SESSION['choice']==4)
{   
       $sql1 = "SELECT price FROM package where choice='$package_var' LIMIT 1";
	
	$result=$con->query($sql1);
	$row=mysqli_fetch_array($result);
	$food_price=$row['price']; 
    
	$sum=0;
	$sum=array_sum($checkbox_val);
    $bill= $sum+($food_price*$person_quatity)+$_SESSION['decor']; 
	
}
else
{
	$sql2 = "SELECT price FROM package where choice='$package_var' LIMIT 1";
	$result=$con->query($sql2);
	$row=mysqli_fetch_array($result);
    $bill=$row['price']; 
	$_SESSION['person']=0;
	$_SESSION['checkboxName']=0;
	$_SESSION['decor']=0;
	
}
    $customer_id=0;
	$customer_name=$_POST['name'];
	$program_type=$_POST['program_type'];
	$program_location=$_POST['program_location'];
	$program_date=$_POST['program_date'];
	$program_time=$_POST['program_time'];
	$total_amount=$bill;
	
	
	$insert_query1="insert into customer(name,address,email,phone,password,bill) values('".$_POST['name']."', '".$_POST['address']."', '".$_POST['email']."', '".$_POST['phone']."','".$_POST['password']."','$bill')"; 
	

    	
 if ($con->query($insert_query1) === TRUE) 
{
   
} 
else 
{
    echo "Error: " . $insert_query1 . "<br>" . $con->error; 
}
$sql3 = "SELECT MAX(customer_id)FROM customer";
	$result1=$con->query($sql3);
	$row1=mysqli_fetch_array($result1);
	$customer_id=$row1['MAX(customer_id)'];
	
    $insert_query2="insert into program(customer_id,program_location,program_date,program_time,program_type) values ('$customer_id','".$_POST['program_location']."' ,'".$_POST['program_date']."', '".$_POST['program_time']."', '".$_POST['program_type']."')";
if ($con->query($insert_query2) === TRUE)  
{
    
} 
else 
{
    echo "Error: " . $insert_query2 . "<br>" . $con->error; 
}


$insert_query3="insert into employee (employee_name,customer_id) values ('$event_manager_name[$event_manager]','$customer_id' )";
if ($con->query($insert_query3) === TRUE)  
{
    
} 
else 
{
    echo "Error: " . $insert_query3 . "<br>" . $con->error; 
}

mysqli_close($con);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Management|form_submit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
<div class=banner-text>
	
	<h1>Billing Details</h1>  
		<h2>Thank You <?php echo $customer_name ?>, Your order has been placed.</h2>
        <p><u><b>Program Details </b></u></p>  
		<p>Type of the program: <?php echo $program_type ?></p>
		<p>Location of the program: <?php echo $program_location ?></p>
		<p>Date of the program: <?php echo $program_date ?></p>
		<p>Program Time: <?php echo $program_time ?></p>   
		<p> Total amount: BDT <?php echo $total_amount ?></p>   
	<p>Our employee <?php echo $event_manager_name[$event_manager] ?> will contact you soon. </p> 
		<br><p>For any queries contact :+8801900000000 or send email <u>eventmanagement@gmail.com<u></p><br/>
			<p class="banner-btn">
					<a href="index.php" class="active">Home</a>
				</p>
</div>	

 
</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>

	