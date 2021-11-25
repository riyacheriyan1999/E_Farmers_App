
<!DOCTYPE html>
<html lang="en">
<?php
include("../common/menu.php");
	include("../connection.php");
?>

<!-- news -->
<section class="news" id="news">
		<div class="container">
			<div class="heading">
				<h3>E-Products</h3>
			</div>
            <?php
			$result = mysqli_query($con,"SELECT * FROM product WHERE status='stock'");
 	
		while($row = mysqli_fetch_array($result))
		{
			?>
			<div class="news-grids">
				<div class="col-md-4 news-grid1">
					<img src="<?php echo "../product/".$row['image']; ?>" alt="" />
						<div class="absolute">
							<div class="absolute-left">
								<p class="p1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo $row['date']; ?></p>
							<div class="clearfix"></div>
							</div>
							<div class="absolute-right">
							<p class="left"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="span1"> <?php echo "Rate".$row['rate']; ?></span></p>	
								
							<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					<h3> <?php echo $row['product_name']; ?></h3>
						<p><?php echo $row['description']; ?></p>
						<div class="more">
							<a href="#" data-toggle="modal" data-target="#myModal" >SALE</a>
						</div>
				</div>
                <?php
		}
				?>
				
				<div class="clearfix"></div>
			</div>
		</div>
</section>
<!-- news -->
<!-- /footer-top -->							

<!-- footer -->
			<div class="copy-right">
				<p>&copy; 2020 Agro  management. All rights reserved | Design by <a href="/">Agro  MAnagement</a></p>
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