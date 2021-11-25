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
	
?>

<?php  
	echo"<style>#nav,#news,#footer{ display:none;
			}
			select option { color: black; }
		</style>";?>

<?php include("../common/menu.php");?>

 

<section class="w3l-forms-main-61">
		<div class="form-inner">
			<div class="wrapper">
				<div class="d-grid top-form">
					<div class="logo">
						<a class="brand-logo" href="index-2.html"><span><span class="fa fa-viadeo" aria-hidden="true"></span> E-Farm-One step Platform for Farmers</span></a>
						
					</div>
				</div>
				<div class="form-61">
					<h4 class="form-head">Payment Check</h4>
				
					<form action="check_action.php" method="post">
						<div class="">
							<p class="text-head">Amount</p>
							<input type="text" name="amt" class="input" value="<?php echo $amount; ?>"   readonly="readonly" required/>
						</div>
						<div class="">
									
					<div class="">
						<p class="text-head">Payment Type </p>
						<select id="category1" required="" name="pay" class="input">
						<option value="">-- PAYMENT TYPE -- <option>
							<option >Pay By Cash</option>
						<option>Pay By Card</option>
						
						</select>
				</div>
						</div>
						
						<button type="submit" class="signinbutton btn" name="place">Sign in</button>
						
					</form>
				</div>
	
				
			</div>
			
		</div>
	</section>

<?php include("../footer.php");?>

<!---->
</body>
</html>