<?php
	
include("../db/connectionI.php");

if(isset($_POST['submit']))
{


	$sql="INSERT INTO farmers(full_name, address, pincode, krishibavan, photo_id_type, id_number, phone, email, bank_name, account_name, account_number, ifsc, username, password) VALUES
	('$_POST[name]','$_POST[address]','$_POST[pin]','$_POST[krishi]','$_POST[type]','$_POST[pidno]','$_POST[phone]','$_POST[email]','$_POST[bank_name]','$_POST[accname]','$_POST[accno]','$_POST[ifsc]','$_POST[username]','$_POST[password]')";
	echo $sql;
	
	if($result=mysqli_query($con,$sql))
	{
		
		if(mysqli_query($con,"INSERT INTO login(username,password,type) VALUES ('$_POST[username]','$_POST[password]','farmers')"))
		{
		
			header("location:index.php?a=1");
		
		}
		
	}
	else
	{
		header("location:index.php?a=2");
	}
}


?>