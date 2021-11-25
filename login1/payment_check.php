<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

 <?php
include("../connection.php");
session_start();
error_reporting(0);
$amount=$_REQUEST['amount'];
	if(isset($_POST['proceed']))
	{
	$account_no=$_POST['account_no'];
	$password=$_POST['password'];
	$match1="SELECT * FROM account WHERE accountno='$account_no' AND pin='$password'";
	$qry1 = mysqli_query($con,$match1);
	$num_rows1 = mysqli_num_rows($qry1);
	if($num_rows1>0)
		{
		
		header("location:index.php?st=payment");
		}
	else
		{
			echo'no';
		
		header("location:payment_check.php?amount=$amount");
		}
	}
?>

<?php  
	echo"<style>#nav,#news,#footer{ display:none;
			}
		</style>";?>

<?php include("../common/menu.php");?>

 

<!---->	
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Payment Login</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			
			 <!-- [if IE] 
				< link rel='stylesheet' type='text/css' href='ie.css'/>  
			 [endif] -->  
			  
			 <!-- [if lt IE 7]>  
				< link rel='stylesheet' type='text/css' href='ie6.css'/>  
			 <! [endif] -->  
			 <script>
				(function() {
			
				// Create input element for testing
				var inputs = document.createElement('input');
				
				// Create the supports object
				var supports = {};
				
				supports.autofocus   = 'autofocus' in inputs;
				supports.required    = 'required' in inputs;
				supports.placeholder = 'placeholder' in inputs;
			
				// Fallback for autofocus attribute
				if(!supports.autofocus) {
					
				}
				
				// Fallback for required attribute
				if(!supports.required) {
					
				}
			
				// Fallback for placeholder attribute
				if(!supports.placeholder) {
					
				}
				
				// Change text inside send button on submit
				var send = document.getElementById('register-submit');
				if(send) {
					send.onclick = function () {
						this.innerHTML = '...Sending';
					}
				}
			
			 })();
			 </script>
             <style>
  input[type="password"]{
    padding: 1em 0;
    width: 100%;
    margin: 1.2em 0;
    padding: 1em 1em;
    border: 1px solid #e4e4e4;
    outline: none;
    -webkit-appearance: none;
    background: none;
    font-size: 14px;
    letter-spacing: 0px;
    color: #555;
    background: #f5f5f5; }
</style>
			<div class="col-md-6 w3-edu-online-form w3_mail_grids">
			 <!-- Form -->
            
				<form  method="post">
                <div class="w3_agile_mail_grid">
					<div>
					
							<input placeholder="amount" type="text" tabindex="1" name="amount" id="amount" value="<?php echo $amount; ?>"   readonly="readonly">
						
					</div>
                    <br>
					<div>
					
							<input placeholder="Acoount Number" type="text"  name="account_no" id="account_no">
						
					</div>
                    <div>
						
							<input placeholder="Password" type="password"   name="password" id="last_name">
					
					</div>
                   		<div>
						<input type="submit" value="login " name="proceed">
					</div>		
                                		
					</div>
				</form>
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<?php include("footer.php");?>

<!---->
</body>
</html>