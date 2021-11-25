<head>
<title>Agro</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Merit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->

<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Montserrat+Alternates:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Libre+Franklin:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
	
	<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			</script>
	<!-- //start-smoth-scrolling -->
		<!-- here stars scrolling icon -->
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
</head>
<body>
<div class="w3-banner-edu">
	
   <div class="agileits_w3layouts_banner_nav">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<h1><a class="navbar-brand" href="index.php"><span>Agro Management </span></a></h1>

				</div>
				 <ul class="agile_forms">
					<li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a> </li>
					
				</ul>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="../login/index.php" class="hvr-underline-from-center">Home</a></li>
						  
                           
                            <?php 
							error_reporting(0);
							session_start();
							
							
							if($_SESSION['type']=="client")
							{
							?>
                             <li><a href="../product/product.php"  class=" hvr-underline-from-center">Product</a></li>
                              <li><a href="../client/update.php?id=<?php echo $_SESSION['userid'];?>" class=" hvr-underline-from-center">Profile</a></li>
                              	
							<li><a href="../feedback/form.php" class="  hvr-underline-from-center">Feedback</a></li>
							<li><a href="../login/index.php?st=logout" class="  hvr-underline-from-center">Logout</a></li>
						
                            <?php
							}
							elseif($_SESSION['type']=="supplier")
							{
								?>
                                 <li><a href="../product/form.php"  class=" hvr-underline-from-center">Product Add</a></li>
                                  <li><a href="../farmer/update.php?id=<?php echo $_SESSION['userid'];?>" class=" hvr-underline-from-center">Profile</a></li>
                                  	
							<li><a href="../feedback/form.php" class="  hvr-underline-from-center">Feedback</a></li>
							<li><a href="../login/index.php?st=logout" class="  hvr-underline-from-center">Logout</a></li>
						 <li><a href="../product/blog.php"  class=" hvr-underline-from-center">Blog</a></li>
                                <?php
							}
						
						
                              
							else
							{
							?>
                             <li><a href="../login/creg.php"  class=" hvr-underline-from-center">Registration</a></li>
                             <?php
							}
							?>
                            </ul>
                          
					</nav>

				</div>
			</nav>	
			
	<div class="clearfix"> </div> 
</div> 
<!-- Modal1 -->
												<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Sign In</h3>	
																			<div class="login-form">
																				<form action="redirect.php" method="post">
																					<input type="text" name="UserName" placeholder="User Name" required>
																					<input type="password" name="Password" placeholder="Password" required>
																					<div class="tp">
																						<input type="submit" name="login" value="Sign In">
																					</div>
																				</form>
																			</div>
																			<div class="login-social-grids">
																				<ul>
																					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
																					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
																					<li><a href="#"><i class="fa fa-rss"></i></a></li>
																				</ul>
																			</div>
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal1 -->	
														