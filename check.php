<?php
include('connect.php');
session_start();
$username=$_POST['email'];
$password=$_POST['password'];
$sql1 = "SELECT email,password FROM customer where email='$username' and password='$password' limit 1";
	
	$result=$con->query($sql1);
	$row=mysqli_fetch_array($result);

$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];	
	if($row['email']==$username && $row['password']==$password)
	{
		header("Location: ./show.php");
	}
else
{
	
	header("Location: ./login.php");
	
}


?>