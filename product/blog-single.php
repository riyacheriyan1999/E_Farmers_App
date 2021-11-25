<?php
include("../common/menu.php");
	include("../connection.php");
?>

<!-- Headers-4 block -->
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
<div class="search-results-top">
    <h3 class="heading mb-0"> Blog Single </h3>
</div>
<!-- text -->
<section class="w3l-text-9">
    <div class="text-element-9">
        <div class="wrapper">
            <div class="d-grid grid-text-9">
                <div class="left-text-9">
                    <div class="p-sticky-blog">
                       
 <?php
			$result = mysqli_query($con,"SELECT * FROM news order by id limit 0,3");
 	
		while($row = mysqli_fetch_array($result))
		{
			?>					   <aside>
                          
                            <h6 class="text-left-inner-9"><a href="blog-single.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h6>
                            <span class="sub-inner-text-9"> <?php echo $row['date_tie'];?></span>
                            <hr>
                        </aside>
		<?php
		} 
		?>
                    </div>
                </div>
				
				<?php
				$result = mysqli_query($con,"SELECT * FROM news WHERE id='$_REQUEST[id]'");
 	
		$row = mysqli_fetch_array($result);
				
				?>
                <div class="right-text-9">
                    <p class="text-tag"><?php echo $row['title'];?></p>
                    
                    <img src="<?php echo "../news/uploads/".$row['image']; ?>" class="img-responsive" alt="" />
                    <p class="sub-para"><?php echo $row['description'];?></p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //text -->
<!-- footer-28 block -->

<?php
include("../footer.php");
?>