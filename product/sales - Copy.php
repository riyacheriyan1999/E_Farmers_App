
<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
include("../common/menu.php");
	include("../connection.php");


if(isset($_REQUEST['id']))
				{
				$query1="SELECT * FROM PRODUCT WHERE id='$_REQUEST[id]'";
				$result1= mysqli_query($con,$query1) or die(mysqli_error());
					$row1 = mysqli_fetch_array($result1);
				}


if(isset($_POST['submit']))
{

//error_reporting(0);
session_start();
//$date=date("Y-m-d");

if ($_SESSION['id']=='')
{
echo "<script >alert(\"Please Signin first\");
window.location.replace(\"../login/index.php\");</script>";
	

}

else
{
$query6="SELECT * FROM sales_master WHERE c_id='$_SESSION[id]' and status='cart' ";

//echo $query6;
$result6=mysqli_query($con,$query6);


$row6 = mysqli_fetch_array( $result6);
$count=mysqli_num_rows($result6);
	
	//echo $query6;
	//echo"count".$count;

if($count==1)

{
	$query7="INSERT INTO sales_child(item_id,om_id,order_qty,price) VALUES('$_REQUEST[id]','$row6[id]','$_POST[quantity]','$row1[rate]')";
 mysqli_query($con,$query7);
 

 mysqli_query($con,"UPDATE product SET sales_qty=sales_qty-$_POST[quantity] WHERE id='$_REQUEST[id]'");
 
	header("location:product.php");
}
else
{

$ddate=date('Y-m-d');
	
$query8="INSERT INTO sales_master(c_id,date,status) VALUES('$_SESSION[id]','$ddate','cart')";
//echo $query8;

if($result8=mysqli_query($con,$query8))
{
	$oid=mysqli_insert_id($con);
	$query9="INSERT INTO sales_child(item_id,om_id,order_qty,price) 
VALUES('$_REQUEST[id]','$oid','$_POST[quantity]','$row1[rate]')";
 $result9=mysqli_query($con,$query9);
	
	echo "<script>
	window.location.replace(\"../product/product.php\");</script>";
}
else
{
	echo "Error : ".mysqli_error($con);
}

}


}


}






?>

<!-- news -->
<section class="news" id="news">
		<div class="container">
			<div class="heading">
				<h3>BY NOW</h3>
			</div>
            <?php
			$result = mysqli_query($con,"SELECT * FROM product WHERE id='$_REQUEST[id]'");
 		$row=mysqli_fetch_array($result);
		
		$resultc = mysqli_query($con,"SELECT * FROM category WHERE id='$row[cat_id]'");
 		$rowc=mysqli_fetch_array($resultc);
			?>
			<div class="news-grids">
				<div class="col-md-10 news-grid1">
					
					<h3> <?php echo $row['product_name']; ?></h3>
					
                        <p><?php echo "Category :" . $rowc['name']; ?></p>
                           <p><?php echo "Rate :" . $row['rate']; ?></p>
                        <p><?php echo "User :" . $row['user']; ?></p>
                        	<p><?php echo "Description :" . $row['description']; ?></p>
                        <div class="more">
							<form action="" method="post">
                            <input type="number" name="quantity" value="1" min="1" max="<?php echo $row['sales_qty'];?>" />
                            <input type="submit" name="submit" value="By Now" class="btn btn-primary"/>
                            </form>
						</div>
                        <img src="<?php echo "uploads/".$row['image']; ?>" alt="" />
                        
						<div class="absolute">
							<div class="absolute-left">
								<p class="p1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo $row['date']; ?></p>
							<div class="clearfix"></div>
							</div>
							<div class="absolute-right">
							<p class="left"><i class="fa fa-rupee" aria-hidden="true"></i> <span class="span1"> <?php echo " ".$row['rate']; ?></span></p>	
								
							<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
				</div>
               
				
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