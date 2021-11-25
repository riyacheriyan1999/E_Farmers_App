
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
 
 //echo "UPDATE product SET sales_qty=sales_qty-$_POST[quantity] WHERE id='$_REQUEST[id]'";
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

 mysqli_query($con,"UPDATE product SET sales_qty=sales_qty-$_POST[quantity] WHERE id='$_REQUEST[id]'");	
	echo "<script>
	window.location.replace(\"../product/product.php\");</script>";
	header("location:product.php");
}
else
{
	echo "Error : ".mysqli_error($con);
}

}


}


}


?>
 <?php
			$result = mysqli_query($con,"SELECT * FROM product WHERE id='$_REQUEST[id]'");
 		$row=mysqli_fetch_array($result);
		
		$resultc = mysqli_query($con,"SELECT * FROM category WHERE id='$row[cat_id]'");
 		$rowc=mysqli_fetch_array($resultc);
			?>
<section class="w3l-ecommerce-single">
    <div class="ecommerce-page">
        <div class="wrapper">
            <div class="ecommerce-cart-two">
                <div class="cart-image">
                    <a href="" class="column-img" id="zoomIn">
                        <figure>
                            <img src="<?php echo "uploads/".$row['image']; ?>" alt="product" class="img-responsive" />
                        </figure>
                    </a>

                </div>
                <div class="cart-details">
                    <h4> <?php echo $row['product_name']; ?></h4>
                    <div class="ratings">
                        <ul class="star">
                            <li><a href="#star"><span class="fa fa-star" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#star"><span class="fa fa-star" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#star"><span class="fa fa-star-half-o" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#star"><span class="fa fa-star-o" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#star"><span class="fa fa-star-o" aria-hidden="true"></span></a>
                            </li>
                        </ul>
                    </div>
                    <ul>
                        <li><h6><?php echo "Rate :" . $row['rate']; ?></h6></li>
                        <li><?php echo "Category :" . $rowc['name']; ?></li>
                        <li><p><?php echo "User :" . $row['user']; ?></p></li>
                    </ul>
                    <p class="single"><?php echo $row['description']; ?></p>
                    <div class="sec-grid-1">
                        <label>Quantity:</label>
                        <div class="disply-cont">
                         <form action="" method="post">
                            <input type="number" name="quantity" value="1" min="1" max="<?php echo $row['sales_qty'];?>" />
                            <input type="submit" name="submit" value="Buy Now" class="buy"/>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("../footer.php");
?>