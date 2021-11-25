<?php 
error_reporting(0);
session_start();
if(isset($_POST['place']))
{

	include("../connection.php");
	
	
	$date=date('Y-m-d');
//echo $date;

		$match2= "UPDATE sales_master SET status='Completed' WHERE c_id='$_SESSION[id]' and status='cart'"; 
		
	$res=mysqli_query($con," SELECT * FROM sales_master WHERE status='Completed' and c_id='$_SESSION[id]' ORDER BY id DESC  ");
	$row5=mysqli_fetch_array($res);
	/*
	$res5=mysqli_query($con," SELECT * FROM sales_child WHERE  om_id='$row5[id]'  ");	
	
	while($row55=mysqli_fetch_array($res5))
	{
		 mysqli_query($con,"UPDATE product SET sales_qty=sales_qty-$row55[order_qty] WHERE id='$row55[item_id]'");
	}
	*/
	
	  $_SESSION['amt']=$_POST['amt'];
	   if($qry2 = mysqli_query($con,$match2))
	   {
	   
	   
				if($_POST['pay'] == "Pay By Cash")
				{
					
			echo "<script >alert(\"Item Order Places\");
				window.location.replace(\"../login/index.php\");</script>";
				}
				else{
				  echo "<script >alert(\"Item Order Places\");
				window.location.replace(\"first.php\");</script>"; 
//header("location:First.php");				
				} 
				//header("location:");
	   }
	   else
	   {
		   header("location:../login/index.php?st=paymento");
	   }
}
	
?>    