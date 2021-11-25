<?php
	
include("../db/connectionI.php");

if(isset($_POST['submit']))
{

$table=$_POST['type'];
	
	$sql="INSERT INTO $table(name,address,email,phone,location,username,password,status,type) VALUES ('$_POST[name]','$_POST[address]','$_POST[email]','$_POST[phone]','$_POST[location]','$_POST[username]','$_POST[password]','Registred','$_POST[type]')";
	if($result=mysqli_query($con,$sql))
	{
		
		if(mysqli_query($con,"INSERT INTO login(username,password,type) VALUES ('$_POST[username]','$_POST[password]','$_POST[type]')"))
		{
		if($_POST['type']=="supplier")
		{
		//header("location:payment_check.php?amount=200");
		header("location:index.php?a=1");
		}
		else
		{
			header("location:index.php?a=1");
		}
		}
		
	}
	else
	{
		header("location:index.php?a=2");
	}
}


?>