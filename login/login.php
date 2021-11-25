<?php
include("header.php");
?>

<section class="w3l-forms-main-61" style="background-image: url('img3.jpg'); " >
		<div class="form-inner">
			<div class="wrapper">
				<div class="d-grid top-form">
					<div class="logo">
						<a class="brand-logo" href="index-2.html"><span><span class="fa fa-viadeo" aria-hidden="true"></span> E-Farm-One step Platform for Farmers</span></a>
						
					</div>
				</div>
				<div class="form-61">
					<h4 class="form-head">Sign in</h4>
				
					<form action="redirect.php" method="post">
						<div class="">
							<p class="text-head">Username</p>
							<input type="text" name="UserName" class="input" required/>
						</div>
						<div class="">
							<p class="text-head">Password</p>
							<input type="Password" name="Password" class="input" required/>
						</div>
						
						<button type="submit" class="signinbutton btn" name="login">Sign in</button>
						
					</form>
				</div>
	
				<div class="go-to-home text-center">
					<p>Want to Create account? <a class="btn" href="signup.php"> Sign up </a></p>
				</div>
			</div>
			
		</div>
	</section>



	</body>


</html>