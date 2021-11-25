<?php
include("../common/menu.php");
	include("../connection.php");
?>

<!-- //product-15-main-->
<section class="w3l-products-2">
	<div class="wrapper">
		<div class="product">
			<div class="main">
				<div class="grid grid-column-2">
				  <?php
				  echo"<h2>New  Notification</h2>";
				  $result2 = mysqli_query($con,"SELECT * FROM notification ORDER BY ID DESC limit 0,5   ");
 	
		while($row2 = mysqli_fetch_array($result2))
		{
				  
			$result = mysqli_query($con,"SELECT * FROM product WHERE id='$row2[product]'");
 	
		$row = mysqli_fetch_array($result);
		
			?>
					<div class="column1">
						<a href=""><img src="<?php echo "uploads/".$row['image']; ?>" class="img-responsive" /></a>
						<a href="">
							<p class="heading"><?php echo $row['name']; ?></p>
							<p>Added by <?php echo $row['farmer_id']; ?>
							</p>
						</a>
						
						
						
						<a href="sales.php?id=<?php echo $row['id']; ?>" class="buy">click here</a>
					</div>
					<?php
					
		
		}
		?>
					
				</div>
				
			</div>
		</div>
	</div>
	</div>
</section>
<?php
include("../footer.php");
?>
