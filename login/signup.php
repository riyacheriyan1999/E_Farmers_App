<?php
include("header.php");
include("../db/connectionI.php");
?>
<style>
select{
	-webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, grey);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: auto;
    background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
    -webkit-rtl-ordering: logical;
    cursor: text;
    margin: 0em;
    font: 400 13.3333px Arial;
    padding: 1px 2px;
    border-width: 2px;
    border-style: inset;
    
    border-image: initial;
}
select option { color: black; }
</style>

<section class="w3l-forms-main-61">
		<div class="form-inner">
			<div class="wrapper">
				<div class="d-grid top-form">
					<div class="logo">
					<a class="brand-logo" href="index.php"><span><span class="fa fa-viadeo" aria-hidden="true"></span> E-Farm-One step Platform for Farmers</span></a>
					
					</div>
				</div>
				<div class="form-61 form-register">
					<h4 class="form-head">Sign up</h4>
				
					<form action="insert.php" method="post" enctype="multipart/form-data"> 
						<div class="">
							<p class="text-head">Full Name</p>
							<input type="text" name="name" class="input"  pattern="[a-zA-Z]+[ ][a-zA-Z]+" title="Enter valid Name" required />
						</div>
						<div class="">
							<p class="text-head">Address</p>
							<input type="text" name="address" class="input" required />
						</div>
						<div class="">
							<p class="text-head">Pin Code</p>
							<input type="text" name="pin" class="input"  pattern="[0-9]{6}" title="Enter valid Pin Number" required />
						</div>
						<div class="">
						<p class="text-head">Krishi Bavan </p>
						<select id="category1" required="" name="krishi" class="input">
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
						
						<div class="">
						<p class="text-head">Photo ID Type</p>
						<select id="category1" required name="type" class="input">
						<option value="">-- PHOTO ID TYPE -- <option>
							<option >Adhaar</option>
						<option>Voters ID</option>
						</select>
						</div>
						
						<div class="">
							<p class="text-head">Photo Id Number</p>
							<input type="text" name="pidno" pattern="[2-9][0-9]{11}" class="input" title="Enter valid Id No" required />
						</div>
						<div class="">
							<p class="text-head">Phone Number</p>
							<input type="text" name="phone" pattern="[6789][0-9]{9}" class="input" title="Enter valid Phone No"  required />
						</div>
						<div class="">
							<p class="text-head">Email address</p>
							<input type="email" name="email" class="input" required />
						</div>
						<div class="">
							<p class="text-head">ID Proof</p>
							<input type="file" name="file" class="input" required />
						</div>
						
					<div class="">
						<p class="text-head">User Type </p>
						<select id="category1" required="" name="utype" class="input">
						<option value="">-- USER TYPE -- <option>
							<option >farmers</option>
						<option>client</option>
						
						</select>
				</div>
						<div class="">
							<p class="text-head">Bank Name</p>
							<input type="text" name="bank_name" class="input" required />
						</div>
						<div class="">
							<p class="text-head">Account Name</p>
							<input type="text" name="accname" class="input" required />
						</div>
						<div class="">
							<p class="text-head">Account Number</p>
							<input type="text" name="accno" class="input" required />
						</div>
						<div class="">
							<p class="text-head">IFSC Code</p>
							<input type="text" name="ifsc" class="input" required />
						</div>
						<div class="">
							<p class="text-head">User Name</p>
							<input type="text" name="username" class="input" required />
						</div>
						
						
						<div class="">
							<p class="text-head">Create password</p>
							<input type="password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="input"  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required />
						</div>
						<label class="remember">
							<input type="checkbox">
							<span class="checkmark"></span>I have read & agree to the <a href="#">terms of use</a>
						</label>
						<button type="submit" class="signinbutton btn" name="submit">Sign up</button>
					</form>
				</div>
				<div class="go-to-home text-center">
					<p>Already have an account? <a class="btn" href="login.php"> Sign in </a></p>
				</div>
			</div>
			
		</div>
	</section>



	</body>


</html>