<?php
include("header.php");
error_reporting(0);
if($_REQUEST['a']=="error")
{
	?>
    <script>alert("USERNAME OR PASSWORD ERROR !!!!!")</script>
    <?php
}
if($_REQUEST['st']=="logout")
{
	session_start();
	session_unset();
}
if($_REQUEST['st']=="payment")
{
	?>
    <script>alert("Payment Sucessfully")</script>
    <?php
}
if($_REQUEST['a']==1)
{
	?>
    <script>alert("Registration Sucessfully")</script>
    <?php
}
if($_REQUEST['a']==2)
{
	?>
    <script>alert("Registration Faild")</script>
    <?php
}
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
<!-- covers -->
<section class="w3l-covers-9-main">
    <div class="covers-9">
        <div class="csslider infinity" id="slider1">
            <input type="radio" name="slides" checked="checked" id="slides_1" />
            <input type="radio" name="slides" id="slides_2" />
            <input type="radio" name="slides" id="slides_3" />
            <input type="radio" name="slides" id="slides_4" />
            <ul class="banner_slide_bg">
                <li>
                    <div class="wrapper">
                        <div class="cover-top-center-9">
                            <div class="w3ls_cover_txt-9">
                                <h6 class="tag-cover-9"><span class="fa fa-apple" aria-hidden="true"></span> 100% Natural</h6>
                                <h3 class="title-cover-9">Farmers Portal</h3>
                                <p class="para-cover-9">The Farmers' Portal of the Department of Agriculture & Cooperation is a platform for farmers to seek any information related to agriculture.</p>
                                    <a href="#" class="actionbg button-cover-9">Read More</a>
                                   <!-- <a href="ecommerce.html" class="actionbg-border button-cover-9">Shop Now</a>-->
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wrapper">
                        <div class="cover-top-center-9">
                            <div class="w3ls_cover_txt-9">
                                <h6 class="tag-cover-9"><span class="fa fa-apple" aria-hidden="true"></span> 100% Natural</h6>
                                <h3 class="title-cover-9">Farmers Portal</h3>
                                <p class="para-cover-9">If you ate today.... Thank a farmer</p>
                                <a href="#" class="actionbg button-cover-9">Read More</a>
                               <!-- <a href="ecommerce.html" class="actionbg-border button-cover-9">Shop Now</a> -->
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wrapper">
                        <div class="cover-top-center-9">
                            <div class="w3ls_cover_txt-9">
                                <h6 class="tag-cover-9"><span class="fa fa-apple" aria-hidden="true"></span> 100% Natural</h6>
                                <h3 class="title-cover-9">Farmers Portals</h3>
                                <p class="para-cover-9">The Farmers' Portal is a platform for farmers to sell their agricultural products.</p>
                                <a href="#" class="actionbg button-cover-9">Read More</a>
                             <!--   <a href="ecommerce.html" class="actionbg-border button-cover-9">Shop Now</a> -->
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="wrapper">
                        <div class="cover-top-center-9">
                            <div class="w3ls_cover_txt-9">
                                <h6 class="tag-cover-9"><span class="fa fa-apple" aria-hidden="true"></span> 100% Natural</h6>
                                <h3 class="title-cover-9">Huge variety of fresh vegetables</h3>
                                <p class="para-cover-9"></p>
                                <a href="#" class="actionbg button-cover-9">Read More</a>
                               <!-- <a href="ecommerce.html" class="actionbg-border button-cover-9">Shop Now</a> -->
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="arrows">
                <label for="slides_1"></label>
                <label for="slides_2"></label>
                <label for="slides_3"></label>
                <label for="slides_4"></label>
            </div>
            <div class="navigation">
                <div>
                    <label for="slides_1"></label>
                    <label for="slides_2"></label>
                    <label for="slides_3"></label>
                    <label for="slides_4"></label>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //covers -->
 <!-- w3l-bottom-menu-7 -->
 <section class="w3l-bottom-menu-7" id="about">
     <div class="bottom-nav-menu">
         <div class="wrapper">
             <div class="hny-nav">
                 <div class="left-grid">
                     <h3>Our FARMERS Products</h3>
                    </div>
                 <div class="right">
                     <p>A farmer is a person engaged in agriculture, raising living organisms for food or raw materials. A good farmer is nothing more nor less than a handy man with a sense of humus.</p>
                   
                        <div class="menu_sur menu-top_sur">
                            <div>
                                <span class="fa fa-yelp" aria-hidden="true"></span>
                                <a href="services.html">Agriculture Products</a>
                            </div>
                            <div>
                                <span class="fa fa-home" aria-hidden="true"></span>
                                <a href="services.html">Agric Form factory</a>
                            </div>
                            <div>
                                <span class="fa fa-leaf" aria-hidden="true"></span>
                                <a href="services.html">100% Natural products</a>
                            </div>
                            <div>
                                <span class="fa fa-gift" aria-hidden="true"></span>
                                <a href="services.html">Modern Technique</a>
                            </div>
                            <div>
                                <span class="fa fa-shopping-basket" aria-hidden="true"></span>
                                <a href="services.html">Fresh Vegetables</a>
                            </div>
                        </div>
                    </div>
             </div>
         </div>
     </div>
 </section>
 <!-- //w3l-bottom-menu-7 -->

<!-- content-photo-5 -->
<div class="w3l-content-photo-5">
	<div class="content">
		<div class="wrapper">
				<div class="d-grid">
			<div class="content-left">
				<h5>Locally Grown - 100% Natural</h5>
				<h3>The Huge variety of the freshest fruits and vegetables</h3>
				<p>Agriculture is the process of producing food, feed, fiber and many other desired products by the cultivation of certain plants and the raising of domesticated animals (livestock). These operations generally attempt to maximize financial income from grain, produce, or livestock. Adopting a new healthier lifestyle can involve changing diet to include more fresh fruit and vegetables as well as increasing levels of exercise.</p>
				<a href="blog-single.html">Read More </a>
			</div>
			<div class="content-photo">
				<a href="#image"><img src="assets/images/about.jpg" class="img-responsive" alt="content-photo"></a>
			
			</div>
		</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!-- //content-photo-5 -->

<!-- call to action -->
<!--
<section class="w3l-call-to-action_9">
    <div class="call-w3">
        <div class="wrapper">
            <div class="d-grid main-cont-wthree-2">
                <div class="right-call-wthree">
                    <h3 class="ban-text-2">FARMERS market - Fruits, Vegetables & organic foods</h3>
                    <p class="text-para">Curabitur id gravida risus. Fusce eget ex fermentum, ultricies nisi ac sed, lacinia est.
                        Quisque ut lectus consequat, venenatis eros et, commodo risus. Nullam sit amet laoreet elit.
                        Suspendisse non magna a velit imperdiet efficitur. Morbi faucibus egestas velit sed ultricies. Ut
                        sollicitudin sollicitudin urna, vel blandit est viverra in. Aenean a rutrum magna. Donec suscipit
                        vulputate fermentum. Vestibulum ac metus in mi rutrum laoreet.</p>
                    <p class="text-para">In non nisi quis metus tempor efficitur a ut odio. Phasellus posuere tellus in interdum venenatis.
                         Curabitur aliquam quam dictum est vestibulum aliquet, viverra in. Aenean a rutrum magna.</p>
                    <a href="services.html" class="button-effe-2">Know More</a>
                </div>
                <div class="left-contect-calls">
                    <div class="call-grids-w3 d-grid">
                        <div class="grids-1 grids-effect">
                            <h4><a href="#feature" class="title-head">Fruits and Vegetables</a></h4>
                            <p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
                            <a href="#more"><span class="fa fa-check-circle"></span></a>
                        </div>
                        <div class="grids-1 grids-effect-2">
                            <h4><a href="#feature" class="title-head">Organic and Natural</a></h4>
                            <p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
                            <a href="#more"><span class="fa fa-check-circle"></span></a>
                        </div>
                        <div class="grids-1 grids-effect-2">
                            <h4><a href="#feature" class="title-head">Nutrition and Healthy</a></h4>
                            <p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
                            <a href="#more"><span class="fa fa-check-circle"></span></a>
                        </div>
                        <div class="grids-1 grids-effect-2">
                            <h4><a href="#feature" class="title-head">Fresh and Pure quality</a></h4>
                            <p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
                            <a href="#more"><span class="fa fa-check-circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<!-- //call to action -->
<!-- feature with photo1 -->
<!--
    <section class="w3l-feature-with-photo-1">
        <div class="feature-with-photo">
            <div class="wrapper">
                <div class="feature-with-photo-content">
                    <h3>Welcome to our healthy FARMERS company</h3>
                    <p> Aenean a rutrum magna. Donec suscipit vulputate fermentum. Vestibulum ac metus in mi rutrum laoreet lorem dolor set amet, donec rutrum dolor ipsum sed.</p>
                    <img src="assets/images/all.jpg" alt="" class="img-responsive" />
                </div>
            </div>
        </div>
    </section>
	-->
    <!-- //feature with photo1 -->

   <!-- /form-26-section -->
   <!--
   <section class="w3l-form-26">
         <div class="form-26-main">
			<div class="wrapper">
			<div class="form-inner-cont">
					<div class="forms-26-info">
						 <h2>Subscribe newsletter</h2>
                        <p>In non nisi quis metus tempor efficitur a ut odio. Phasellus posuere tellus in interdum venenatis. Curabitur aliquam quam dictum est vestibulum aliquet.</p>
                    </div>
					<div class="form-right-inf"> 
						
						
							<form action="#" method="post" class="signin-form">	
							 <div class="forms-gds">
								<div  class="form-input">
									<input type="email" name="" placeholder="Enter your email address" required />
								</div>
								<div  class="form-input"><button class="btn">Subscribe</button></div>
							</div>
							</form>
						
                    </div>
                </div>
			</div>
		    </div>
		</section>
		-->
      <!-- //form-26-section -->

<!-- footer-28 block -->
<section class="w3l-footer-28-main">
    <div class="footer-28">
        <div class="wrapper">
            <div class="d-grid grid-col-4 footer-top-28">
                <div class="footer-list-28 mobile-footer-full">
                    <h6 class="footer-title-28">Contact Info</h6>
                    <ul>
                        <li>
                            <p><span class="fa fa-map-marker"></span> Vidya bharati nagar, Mattoor, Kalady, Kerala </p>
                        </li>
                        <li><span class="fa fa-phone"></span> Phone: <a href="tel:+7-800-999-800">+91 9536867412</a>
                        </li>
                        <li><span class="fa fa-mobile"></span> Mobile: <a href="tel:+7-800-999-800"> +91 8123569874
                                </a></li>
                        <li><span class="fa fa-envelope-open-o"></span> Mail: <a href="mailto:vegetables@mail.com"
                                class="mail"> vegetables@mail.com</a></li>
                    </ul>
                </div>
                <div class="footer-list-28 mobile-footer-full">
                    <h6 class="footer-title-28">Latest News</h6>
                    <ul class="posts">
                        <a href="blog-single.html"><img src="assets/images/e1.png" class="img-responsive" alt="" />
                            <p>Vegetables and organic fruits<span>June 10th, 2021</span></p>
                        </a>
                        <a href="blog-single.html"><img src="assets/images/e2.png" class="img-responsive" alt="" />
                            <p>Vegetables and organic fruits<span>May 31st, 2021</span></p>
                        </a>
                        <a href="blog-single.html"><img src="assets/images/e3.png" class="img-responsive" alt="" />
                            <p>Vegetables and organic fruits<span>April 2nd, 2021</span></p>
                        </a>
                    </ul>
                </div>
                <div class="footer-list-28 mobile-footer-half">
                    <h6 class="footer-title-28">Useful Links</h6>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="team.html">Our farmers</a></li>
                        <li><a href="blog.html">Blog posts</a></li>
                        <li><a href="services.html">Our services</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                        <li><a href="gallery.html">Food gallery</a></li>
                    </ul>
                </div>
                <div >
                   <!-- <h6 class="footer-title-28">Quotation</h6>
                    <p>Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Viva mus id.</p> -->
                    <h6 class="footer-title-28 mobile-footer-half">Tags</h6>
                    <a href="#tag" class="tag">Vegetables</a>
                    <a href="#tag" class="tag">Fruits</a>
                    <a href="#tag" class="tag">Organic</a>
                    <a href="#tag" class="tag">Farming</a>
                
				</div>
				
            </div>
        </div>
        <div class="copyright text-center">
            <div class="wrapper">
                
            </div>
        </div>
    </div>
</section>
<!-- //footer-28 block -->

<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- /move top -->


<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>


<!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/30-11-2019/FARMERS-freedom-web-demo_Free/725621093/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 May 2021 21:06:18 GMT -->
</html>

