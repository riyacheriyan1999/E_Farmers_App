<?php
include("../common/menu.php");
	include("../connection.php");
?>

<!-- //product-15-main-->
<section class="w3l-products-2">
	<div class="wrapper">
		<div class="product">
		<div class="w3l-products-2">
		
				<div class="contacts12-main">
				<form action="" method="post" class="signin-form">
					<div class="input-grids">
					<input type='text' name='name' placeholder='Product Name' class='contact-input'  >

						
						<select id="category1"  name="krishi" class="contact-input">
						<option value="">-- SELECT Krishi Bavan -- <option>
		<?php	

	   $sql22 = "select *  from krishibavan ";
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
					
						<button type="submit" class="signinbutton btn" name="submit">Search</button>
					</div>
				
				</form>
				<br><br>
		</div>
		
			<div class="main">
				<div class="grid grid-column-2">
				
				
				  <?php
				   if($_POST['name']!="" &&  $_POST['krishi']!="")
				  {
					  $sql="SELECT * FROM product WHERE name LIKE '%$_POST[name]' AND krishibhavan='$_POST[krishi]' AND status='stock' and sales_qty!=0";
					  
				  }
				   elseif($_POST['name']!="") 
				  {
					  $sql="SELECT * FROM product WHERE name LIKE '%$_POST[name]' AND status='stock' and sales_qty!=0";
					 
				  }
				  elseif($_POST['krishi']!="")
				  {
					  $sql="SELECT * FROM product WHERE  krishibhavan='$_POST[krishi]' AND status='stock' and sales_qty!=0";
				  }
				  else
				  {
					 
			$sql="SELECT * FROM product WHERE status='stock' and sales_qty!=0";
				  }
				  //echo $sql;
 	
	$result = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($result))
		{
			?>
					<div class="column1">
						<a href=""><img src="<?php echo "uploads/".$row['image']; ?>" class="img-responsive" /></a>
						<a href="#price2">
							<p class="product-para"><?php echo "RS ".$row['rate']; ?></p>
						</a>
						
						<a href="">
							<p class="heading"><?php echo $row['name']; ?></p>
						</a>
						<a href="checkout.php" class="add-cart"><span class="fa fa-shopping-basket"></span></a>
						<a href="sales.php?id=<?php echo $row['id']; ?>" class="buy">Buy Now</a>
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
