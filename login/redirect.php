<?php
session_start();
include('../db/connectionI.php');







$myusername=$_POST['UserName']; 
$mypassword=$_POST['Password']; 


$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

if(isset($_POST['login']))
{


$sql="SELECT * FROM login WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($con,$sql);
$row1=mysqli_fetch_array($result);

$count=mysqli_num_rows($result);


	if($count==1)
	{
		 echo $myusername;
		 if($row1['type']=="admin")
		 {
			$_SESSION['user'] ="admin";
			$_SESSION['type'] =$row1['type'];
			header("location:../dashboard/dashboard.php");
		 }
		 else
		 {
			 
				// $tbl_name=$row1['type'];
			// Register $myusername, $mypassword and redirect to file "login_success.php"
			 $result = mysqli_query($con,"SELECT * FROM farmers WHERE username='$myusername' and password='$mypassword'") or die('Could not connect: ' . mysql_error());
			
			while($row = mysqli_fetch_array($result))
			  {
				  //echo $myusername;
				//$_SESSION['type']="staff";
			 $permission=$row['privilage'];
			
			$_SESSION['user'] =$row['email'];
			
				$_SESSION['type'] =$row1['type'];
				$_SESSION['userid']=$row['id'];
				$_SESSION['krishibvan']=$row['krishibavan'];
				$_SESSION['id']=$row['id'];
				header("location:index.php");
			  }
		
			}
	}
	else
	{
		header("location:index.php?a=error");
	}
}
else
{
header("location:index.php?a=error");
}

?>
 
 



