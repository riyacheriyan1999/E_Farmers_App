
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<style>
  input[type="password"]{
    border: 1px solid #e4e4e4;
    outline: none;
    -webkit-appearance: none;
    background: none;
    font-size: 14px;
    letter-spacing: 0px;
    color: #555;
    width: 100%;
    background: #f5f5f5;
    padding: 1em 1em;
} 

select#category1{
    border: 1px solid #e4e4e4;
    outline: none;
    -webkit-appearance: none;
    background: none;
    font-size: 14px;
    letter-spacing: 0px;
    color: #555;
    width: 100%;
    background: #f5f5f5;
    padding: 1em 1em;
}
</style>
<?php
include("header.php");
include("../db/connectionI.php");
?>




	<!-- coureses online -->	
	<!--<div class="w3-edu-main content " id="contact">
		<div class="w3-edu-head">
		<h3>REGISTRATION</h3>
		</div>-->
		<br>
	
			<div class=" col-md-offset-2 col-md-8 w3-edu-online-form w3_mail_grids">
			<h3>CUSTOMER REGISTRATION</h3>
			<form action="insert.php" method="post">
				<div class="w3_agile_mail_grid">
				<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
					<input type="text" placeholder="Full Name" name='name'  required="">
				</div>
					<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
					<input type="text" placeholder="Address" name='address'  required="">
				</div>
					<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
					<input type="text" placeholder="Pin Code" name='pin'  required="">
				</div>
				<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
					
					<select id="category1" required="" name="krishi">
						<option value="">-- SELECT Krishi Bavan -- <option>
		<?php	

	   $sql22 = "select *  from district ";
    $result22 = mysqli_query($con,$sql22) or die("Error in Selecting " . mysqli_error($con));
	    while($row22 =mysqli_fetch_array($result22))
    {
		echo"<h3>$row22[name]<h3>";
		 $sql2 = "select *  from krishibavan where district='$row22[id]' ";
		$result2 = mysqli_query($con,$sql2) or die("Error in Selecting " . mysqli_error($con));
			while($row2 =mysqli_fetch_array($result2))
			{
				
				echo "<option value='$row2[id]'>$row2[name]</option>";
			}
	}
	  
	
	?>
						
					</select>
				</div>
				<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
				<select id="category1" required="" name="type">
						<option value="">-- PHOTO ID TYPE -- <option>
							<option >Adhaar</option>
						<option>Voters ID</option>
						</select>
				</div>
				<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
				<input type="text" placeholder="Photo Id number" name="pidno" required>
				</div>
				<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
					<input type="tel" placeholder="Your Phone Number" name="phone" required>
					</div>
					
					<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
					<input type="email" placeholder="Your Email" name="email" required>
					</div>
					<div class="col-md-12 w3-edu-online-form w3_mail_grids" >
					<h3>Bank Details</h3>
				</div>
					<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
					<input type="text" placeholder="Bank Name" name='bank_name'  required="">
					</div>
					
					<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
					<input type="text" placeholder="Account Name" name='accname'  required="">
					</div>
					<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
					<input type="text" placeholder="Account Number" name='accno'  required="">
					</div>
					<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
					<input type="text" placeholder="IFSC" name='ifsc'  required="">
					</div>
						<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
					<input type="text" placeholder="User Name" name='username'  required="">
					</div>
					<div class="col-md-6 w3-edu-online-form w3_mail_grids" >
					<input type="password" placeholder="User Password" name='password'  required="" >
					</div>
					<input type="submit" value="Register" name="submit" class='form-control'>
				</div>
			</form>

			</div>
			<div class="clearfix"></div>
			
	</div>
	</div>
		<?phpinclude('footer.php');