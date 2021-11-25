<?php
session_start();
include('../db/connectionI.php');
//$db_name="music"; // Database name 
//$tbl_name="faculty"; // Table name 

// Connect to server and select databse.


// username and password sent from form 
$myusername=$_POST['UserName']; 
$mypassword=$_POST['Password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

if(isset($_POST['login']))
{


$sql="SELECT * FROM login WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$row1=mysql_fetch_array($result);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
 echo $myusername;
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
			 
				 $tbl_name=$row1['type'];
			// Register $myusername, $mypassword and redirect to file "login_success.php"
			 $result = mysql_query("SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'") or die('Could not connect: ' . mysql_error());
			
			while($row = mysql_fetch_array($result))
			  {
				  //echo $myusername;
				//$_SESSION['type']="staff";
			 $permission=$row['privilage'];
			
			$_SESSION['user'] =$row['email'];
			
				$_SESSION['type'] =$row1['type'];
				$_SESSION['userid']=$row['id'];
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
 
 



