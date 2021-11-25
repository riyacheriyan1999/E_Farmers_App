<?php
include("../common/menu.php");
	include("../connection.php");
?>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script>
    $('#drop').change(function () {
        if ($('#drop').is(":checked")) {
            $('body').css('overflow', 'hidden');
        } else {
            $('body').css('overflow', 'auto');
        }
    });
</script>
<section class="w3l-services-6">
	<!-- /grids -->
	<div class="services-layout">
		<h3 class="heading">Our Latest Blog</h3>
		<div class="wrapper">
			<div class="grid grid-column-2">
			 <?php
			$result = mysqli_query($con,"SELECT * FROM news order by id");
 	
		while($row = mysqli_fetch_array($result))
		{
			?>
				<div class="column column-img" id="zoomIn">
					<div class="services-gd">
						<div class="serve-info">
							<h3 class="date"><?php echo $row['date_time']; ?></h3>
							<h3> <a href="blog-single.php?id=<?php echo $row['id'];?>" class="vv-link"><?php echo $row['title']; ?></a>
							</h3>
							<a href="blog-single.php?id=<?php echo $row['id'];?>">
								<figure>
									<img class="img-responsive" src="<?php echo "../news/uploads/".$row['image']; ?>" alt="blog-image">
								</figure>
							</a>
							
						</div>
					</div>
				</div>
				<?php
		}
		?>
				
			</div>
			
		</div>
	</div>
	<!-- //grids -->
</section>


<?php
include("../footer.php");
?>