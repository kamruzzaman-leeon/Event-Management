<?php

include('connect.php');
session_start();
$customer_id= $_SESSION['customer_id'];
$location=$_POST['program_location'];
$date=$_POST['program_date'];
$time=$_POST['program_time'];
$sql="UPDATE program SET program_location='$location' ,program_date='$date' ,program_time='$time'  where customer_id='$customer_id'";
if ($con->query($sql) === TRUE)  
{
    
} 
else 
{
    echo "Error: " . $sql . "<br>" . $con->error; 
}

header("Location: ./show.php");
mysqli_close($con);

?>