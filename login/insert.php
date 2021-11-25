<?php
	
include("../db/connectionI.php");

if(isset($_POST['submit']))
{
$target_path="uploads/";
$target_path=$target_path.basename($_FILES['file']['name']);
//copy file to above location
move_uploaded_file($_FILES['file']['tmp_name'],$target_path);

	$sql="INSERT INTO farmers(full_name, address, pincode, krishibavan, photo_id_type, id_number, phone, email, bank_name, account_name, account_number, ifsc, username, password,certificate,type) VALUES
	('$_POST[name]','$_POST[address]','$_POST[pin]','$_POST[krishi]','$_POST[type]','$_POST[pidno]','$_POST[phone]','$_POST[email]','$_POST[bank_name]','$_POST[accname]','$_POST[accno]','$_POST[ifsc]','$_POST[username]','$_POST[password]','$target_path','$_POST[utype]')";
	
	
	if($result=mysqli_query($con,$sql))
	{
		
		if(mysqli_query($con,"INSERT INTO login(username,password,type) VALUES ('$_POST[username]','$_POST[password]','$_POST[utype]')"))
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