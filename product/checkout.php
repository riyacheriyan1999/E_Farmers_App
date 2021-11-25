<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
error_reporting(0);
 include '../connection.php';
	  session_start();
?>

<?php
if(isset($_REQUEST['did']))
{
$query6="DELETE FROM sales_child WHERE id='$_REQUEST[did]'";

if(mysqli_query($con,$query6))
{
	
 mysqli_query($con,"UPDATE product SET sales_qty=sales_qty+$_REQUEST[quantity] WHERE id='$_REQUEST[item_id]'");
 
header("location:checkout.php");	
}
else
{
	echo "Error : ".mysqli_error($con);
}
}?>
<!DOCTYPE html>
<html>

<body>
<!-- header -->
<?php include("../common/menu.php");?>




<section class="w3l-products-6-main">
	<div class="product-inner">
		<h3 class="heading">Shopping cart</h3>
		<div class="wrapper">
			<div class="checkout-right">
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Product</th>
								<th>Product Name</th>
								<th>Quantity</th>
								<th>Price</th>
<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							
					 
             <?php
		

$query = "SELECT * FROM sales_master WHERE c_id='$_SESSION[id]' and status='cart'"; 
$result=mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
//echo $row['id'];

      $query2 = "SELECT * FROM sales_child WHERE om_id='$row[id]'";
      $result2=mysqli_query($con,$query2);
   
	       while($row2 = mysqli_fetch_array( $result2 )) {
			  // echo $row2['id'];
				   
			   $query3 = "SELECT * FROM product WHERE id='$row2[item_id]'";
			  // echo $query3;
               $result3=mysqli_query($con,$query3);
	              while($row3 = mysqli_fetch_array($result3)) {
	                  //  echo $row3['name'];

?>	
							<tr class="rem1">
								<td class="invert-image">
									<a href="">
										<img src="..\product\uploads\<?php echo $row3['image']; ?>" alt=" " class="img-responsive">
									</a>
								</td>
								
								<td class="invert product-name"><a href="product.php">
										<?php echo $row3['name']; ?></a>

								</td>
								<td class="invert">
									<?php echo $row2['order_qty']; ?>
								</td>
								<td class="invert price">
								<?php $amount=$row2['price']*$row2['order_qty'];echo $row2['price']." X ".$row2['order_qty']." = ₹ ".$amount;?> </td>
<td class=""><a class="proceed read-more-1 btn" href="checkout.php?did=<?php echo $row2['id'];?>&quantity=<?php echo $row2['order_qty'];?>&item_id=<?php echo $row2['item_id'];?>" class="close1">X Remove</a>
                          </td>
							</tr>
							
	<?php
				  }
}}
				  ?>						
<?php 
				 $query4 = "SELECT * FROM sales_master WHERE c_id='$_SESSION[id]' and status='cart'"; 
$result4=mysqli_query($con,$query4);

while($row4 = mysqli_fetch_array($result4))
{

//echo $row4['id'];

      $query5 = "select SUM(order_qty*price),COUNT(item_id)FROM sales_child WHERE om_id='$row4[id]'";
	 
      $result5=mysqli_query($con,$query5);
	  $row5=mysqli_fetch_array($result5);

}
			  
           ?>
							<tr>
								<td></td>
								<td></td>
								<td class="invert price total-price">
									<h5 class="price"><?php echo ":  ". $row5['COUNT(item_id)']; ?></h5>
								
									<h6 class="totla-pay">Total Payable :</h6>
								</td>
								<td class="invert price total-price">
								
									<h6 class="totla-pay"><?php echo ": ₹ ". $row5['SUM(order_qty*price)']; ?></h6>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>

			<div class="checkout-left">
				<div class="address_form_hny">
					<div class="checkout-right-basket">
						<a href="product.php" class="shop btn">Continue Shopping
						</a>
						<a href="payment_check.php?amount=<?php echo $row5['SUM(order_qty*price)']; ?>" class="proceed read-more-1 btn">Checkout
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</section>






















<?php
include("../footer.php");
?>