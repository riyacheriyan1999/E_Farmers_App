
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
			<form action="caction.php" method="post">
				<div class="w3_agile_mail_grid">
					<input type="text" placeholder="Your Name" name='name'  required="">
					<textarea name="address" placeholder="Your Address" required></textarea>
					<input type="email" placeholder="Your Email" name="email" required>
					<input type="tel" placeholder="Your Phone Number" name="phone" required>
					<select id="category1" required="" name="location">
						<option value="">-- SELECT LOCATION -- <option>
		<?php	

	   $sql2 = "select *  from location ";
    $result2 = mysqli_query($con,$sql2) or die("Error in Selecting " . mysqli_error($con));
	    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<option value='$row2[location_name]'>$row2[location_name]</option>";
	}
	  
	
	?>
						
					</select>
					<select id="category1" required="" name="type">
						<option value="">-- SELECT TYPE -- <option>
							<option value="client">client</option>
						<option value="supplier">Farmer</option>
						</select>
						
					<input type="text" placeholder="User Name" name='username'  required="">
					
					<input type="password" placeholder="User Password" name='password'  required="" >
					<input type="submit" value="Register" name="submit" class='form-control'>
				</div>
			</form>

			</div>
			<div class="clearfix"></div>
			
	</div>
	</div>
			

<!-- footer -->
			<div class="copy-right">
				<p>&copy; 2020 agro management. All rights reserved | Design by <a href="/">Agro MAnagement</a></p>
			</div>
			
<!-- //footer -->
			<!--  countdown-js -->  
	<script type="text/javascript" src=" js/moment.js"></script>
	<script type="text/javascript" src=" js/moment-timezone-with-data.js"></script>
	<script type="text/javascript" src="js/timer.js"></script>
	<!-- //countdown-js -->   
									
	<!--light-box-files -->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<!--//light-box-files -->
		<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
<!-- //js -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<script src="js/particles.js"></script>

<!-- text-effect -->
		<script type="text/javascript" src="js/jquery.transit.js"></script> 
		<script type="text/javascript" src="js/jquery.textFx.js"></script> 
		<script type="text/javascript">
			$(document).ready(function() {
					$('.test').textFx({
						type: 'fadeIn',
						iChar: 100,
						iAnim: 1000
					});
			});
		</script>
<!-- //text-effect -->
<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>