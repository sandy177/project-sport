<!DOCTYPE html>
<?php
session_start();
include("functions/function.php");
?>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="stylesheet/w3.css"/>
<link rel="stylesheet" href="stylesheet/style.css"/>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
<body>

<div class="w3-container">
	<div class="w3-left">
	<div>
		<div class="w3-tag w3-xxxlarge w3-red">S</div>
		<div class="w3-tag w3-xxxlarge">P</div>
		<div class="w3-tag w3-xxxlarge w3-yellow">O</div>
		<div class="w3-tag w3-xxxlarge">R</div>
		<div class="w3-tag w3-xxxlarge w3-deep-orange">T</div>
		<div class="w3-tag w3-xxxlarge">E</div>
		<div class="w3-tag w3-xxxlarge w3-cyan">E</div>
	</div>
	</div>
	<?php
	isLogin();
	?>
	
	<div class="w3-dropdown-hover w3-right w3-margin">
	<a class="w3-btn-floating w3-light-grey w3-hover-black"><i class="material-icons w3-xxlarge w3-center">add_shopping_cart</i></a>
	
	
	</div>
</div>

<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
  
    
	
    <div class="w3-container">
	 <ul class="w3-pagination w3-white w3-border-bottom" style="width:100%;">
		<li><a href="#" class="tablink" onclick="openCity(event, 'login')">Login</a></li>
		<li><a href="#" class="tablink" onclick="openCity(event, 'reg')">Register</a></li>
	</ul>
      <div id="login" class="w3-section r">
		
		<form name="loginform" method="post" action="redirect_login.php">

			<p>
			<input class="w3-input" type="email" name="username">
			<label>Email</label></p>

			<p>      
			<input class="w3-input" type="password" name="password">
			<label>Password</label></p>
			
			<button type="submit" class="w3-btn w3-btn-block w3-green w3-section" name="login">Login</button>
		</form>
		
      </div>
	  <div id="reg" class="w3-section r">
		
		<form name="regform" method="post" action="redirect.php">

			<p>
			<input class="w3-input" type="text" name="name" required>
			<label>Name</label></p>
			
			<p>
			<input class="w3-input" type="email" name="username" required>
			<label>Email</label></p>
			
			<p>
			<input class="w3-input" type="number" name="mob" required>
			<label>Mobile Number</label></p>
			
			<p>      
			<input class="w3-input" type="password" name="password" required>
			<label>Password</label></p>
			
			<p>      
			<input class="w3-input" type="password" name="repassword" required>
			<label>Retype Password</label></p>
			
			<button type="submit" class="w3-btn w3-btn-block w3-blue w3-section" name="register">Register</button>
		</form>
		
      </div>
    </div>

    <div class="w3-container w3-border-top w3-padding-hor-16 w3-light-grey">
      <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
    </div>

  </div>
</div>

<?php
getNav();
?>

<div class="ecommerce">
<div class="w3-tag w3-orange w3-xlarge">Deal Of the Day</div><br>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Frolic a Sports Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Frolic a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/jquery.countdown.css" />
	<!--gallery -->
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
	<!-- //gallery -->
<link rel="stylesheet" href="css/owl.carousel.min.css" />
<link rel="stylesheet" href="css/owl.theme.min.css" />
<link rel="stylesheet" href="css/owl.transitions.css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lobster|Lobster+Two" rel="stylesheet">

</head>
<body>
<div class="banner">
<div class="w3_baner">
<div class="content white agile-info">

			<div class="item item2">
				<div class="container">
				<h2>N F L <span class="wed">MUNDIAL</span></h2>
					<div class="carousel-caption">
						<h3>Coming Soon in April</h3>
						
						<div class="agileits-button top_ban_agile">
							<a href="#contact" class="scroll" >CONTACT »</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	</div>
	</div>
	<!--//banner -->

	<!-- about -->
	<div class="aboutus" id="aboutus">
		<div class="container">
		<h3>ABOUT US</h3>
			<div class="banner-btm">
				<div class="col-md-6 col-sm-6 banner-btm-g1">
				<h4 class="title-main">Welcome to Sport </h3>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae nunc auctor, malesuada est eu, pellentesque nisi.
						Nam in enim lacinia, hendrerit neque non

					</p>
					<div class="find-about">
						<a href="#" data-toggle="modal" data-target="#myModal">Read More </a>
  <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
             <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Floric</h4>
        </div>
        <div class="modal-body">
		<img src="images/ab1.jpg"  class="img-responsive" alt="tfg">
          <p class="modal-par">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

					</div>	
				</div>
				<div class="col-md-6 col-sm-6 banner-btm-g2">
					<h4 class="title-main">Welcome to sport </h3>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae nunc auctor, malesuada est eu, pellentesque nisi.
						Nam in enim lacinia, hendrerit neque non

					</p>
					<div class="find-about">
						<a href="#gallery" class="scroll">Portfolio</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="client"><img src="images/ab1.jpg" class="img-responsive" alt=""><div class="w3_abtd"><h5>Lorem ipsum</h5></div></div>
            <div class="client"><img src="images/ab2.jpg" class="img-responsive" alt=""><div class="w3_abtd"><h5>Lorem ipsum</h5></div></div>
            <div class="client"><img src="images/ab3.jpg" class="img-responsive" alt=""><div class="w3_abtd"><h5>Lorem ipsum</h5></div></div>
           
            <div class="clear"></div>
</div>
        </div>
    
	<!-- //about -->
	

<!-- Services -->
<div class="assistance" id="assistance">

	<div class="container">
	
		<h3>assistance</h3>
		<div class="servicegrids">
			<div class="col-md-3  col-sm-3 serv1">
				<h4>Lets Make It Together</h4>
				<h5>Tickets</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-md-3 col-sm-3  serv2">
				<span class="fa fa-desktop" aria-hidden="true"></span>
				<h5>Refreshments</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-md-3 col-sm-3 serv3">
				<span class="fa fa-clone" aria-hidden="true"></span>
				<h5>Fixtures</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-md-3 col-sm-3 serv4">
				<span class="fa fa-feed" aria-hidden="true"></span>
				<h5>Time</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="clearfix"></div>
		</div>
		
	
	</div>
</div>
<!-- Services -->

<div class="news" id="news">
<div class="container">
<h3>NEWS AND EVENTS</h3>
        <div class="col-md-4  mb-r">

            <div class="card testimonial-card">

                <div class="card-up info-color"></div>
    
                
                <div class="avatar">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                </div>
    
                <div class="card-body">
                  
                    
                  
                   
                    <p class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae nunc auctor, malesuada est eu, pellentesque nisi.
						Nam in enim lacinia, hendrerit neque non</p>
					  
					  <h4 class="mt-1">
                        <strong>Lorem Ipsum</strong>
                    </h4>
                </div>
    
            </div>   
        </div>
        <div class="col-md-4  mb-r">
    

            <div class="card testimonial-card">
    

                <div class="card-up blue-gradient">
                </div>
    

                <div class="avatar1">
                      <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                </div>
    
                <div class="card-body">

                    
               
<p class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae nunc auctor, malesuada est eu, pellentesque nisi.
						Nam in enim lacinia, hendrerit neque non</p>
					    
						 <h4 class="mt-1">
                         <strong>Lorem Ipsum</strong>
                    </h4>
                </div>
    
            </div>

    
        </div>

        <div class="col-md-4  mb-r">

            <div class="card testimonial-card">

                <div class="card-up indigo"></div>

                <div class="avatar2">
                     <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                </div>
    
                <div class="card-body">

                    
                

                    <p class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae nunc auctor, malesuada est eu, pellentesque nisi.
						Nam in enim lacinia, hendrerit neque non</p>
					    
						<h4 class="mt-1">
                         <strong>Lorem Ipsum</strong>
                    </h4>
                </div>
    
            </div>
        </div>
		</div>
		<div class="w3l_rm">
		<a href="#aboutus" class="scroll">Read More</a>
		</div>
</div>
<!-- Gallery-->

	<div class="section-w3ls agileits-gallery" id="gallery">
	<div class="container">
		<h3 class="title-agile about text-center">GALLERY</h3>
		<div class="gallery-w3layouts">
			<div class="col-sm-3 w3_tab_img_left">
				<div class="demo">
					<a class="cm-overlay" href="images/g1.jpg">
						<figure class="imghvr-shutter-in-out-diag-2">
							<img src="images/g1.jpg" alt=" " class="img-responsive" />
						</figure>
					</a>
				</div>
				<div class="agile-gallery-info">
					<h5>Frolic</h5>
					
				</div>
			</div>
			<div class="col-sm-3 w3_tab_img_left">
				<div class="demo">
					<a class="cm-overlay" href="images/g2.jpg">
						<figure class="imghvr-shutter-in-out-diag-2">
							<img src="images/g2.jpg" alt=" " class="img-responsive" />
						</figure>
					</a>
				</div>
				<div class="agile-gallery-info">
					<h5>Frolic</h5>
					
				</div>
			</div>
			<div class="col-sm-3 w3_tab_img_left">
				<div class="demo">
					<a class="cm-overlay" href="images/g3.jpg">
						<figure class="imghvr-shutter-in-out-diag-2">
							<img src="images/g3.jpg" alt=" " class="img-responsive" />
						</figure>
					</a>
				</div>
				<div class="agile-gallery-info">
					<h5>Frolic</h5>
					
				</div>
			</div>
			<div class="col-sm-3 w3_tab_img_left">
				<div class="demo">
					<a class="cm-overlay" href="images/g4.jpg">
						<figure class="imghvr-shutter-in-out-diag-2">
							<img src="images/g4.jpg" alt=" " class="img-responsive" />
						</figure>
					</a>
				</div>
				<div class="agile-gallery-info">
					<h5>Frolic</h5>
					
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-3 w3_tab_img_left">
				<div class="demo">
					<a class="cm-overlay" href="images/g5.jpg">
						<figure class="imghvr-shutter-in-out-diag-2">
							<img src="images/g5.jpg" alt=" " class="img-responsive" />
						</figure>
					</a>
				</div>
				<div class="agile-gallery-info">
					<h5>Frolic</h5>
					
				</div>
			</div>
			<div class="col-sm-3 w3_tab_img_left">
				<div class="demo">
					<a class="cm-overlay" href="images/g8.jpg">
						<figure class="imghvr-shutter-in-out-diag-2">
							<img src="images/g8.jpg" alt=" " class="img-responsive" />
						</figure>
					</a>
				</div>
				<div class="agile-gallery-info">
					<h5>Frolic</h5>
					
				</div>
			</div>
			<div class="col-sm-3 w3_tab_img_left">
				<div class="demo">
					<a class="cm-overlay" href="images/g7.jpg">
						<figure class="imghvr-shutter-in-out-diag-2">
							<img src="images/g7.jpg" alt=" " class="img-responsive" />
						</figure>
					</a>
				</div>
				<div class="agile-gallery-info">
					<h5>Frolic</h5>
					
				</div>
			</div>
			<div class="col-sm-3 w3_tab_img_left">
				<div class="demo">
					<a class="cm-overlay" href="images/g6.jpg">
						<figure class="imghvr-shutter-in-out-diag-2">
							<img src="images/g6.jpg" alt=" " class="img-responsive" />
						</figure>
					</a>
				</div>
				<div class="agile-gallery-info">
					<h5>Frolic</h5>
					
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
	</div>

<!-- /Gallery
<!-- Testimonials-->
<div class="testimonials" id="testimonials">
<div class="container">
	<h3>TESTIMONIALS</h3>
        
            <div id="testimonial-slider" class="owl-carousel">
			
                <div class="testimonial">
				
                    <div class="pic">
                        <img src="images/t1.jpg" class="img-responsive" alt="">
                    </div>
                    
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim diam, tempus vel ultricies viverra, luctus in elit. 
                    </p>
					
					<h4 class="change">Amy</h4>
					
                </div>
				
 
                <div class="testimonial">
                    <div class="pic">
                        <img src="images/t2.jpg" class="img-responsive" alt="">
                    </div>
                   
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim diam, tempus vel ultricies viverra, luctus in elit.
                    </p>
					
					 <h4 class="change">John</h4>
                </div>
				
                <div class="testimonial">
                    <div class="pic">
                        <img src="images/t3.jpg" class="img-responsive" alt="">
                    </div>
                   
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim diam, tempus vel ultricies viverra, luctus in elit. 
                    </p>
					
					<h4 class="change">Smith</h4>
                </div>
				
                <div class="testimonial">
                    <div class="pic">
                        <img src="images/t2.jpg" class="img-responsive" alt="">
                    </div>
                    
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim diam, tempus vel ultricies viverra, luctus in elit.
                    </p>
				
					<h4 class="change">Stuart</h4>
                </div>
				
                <div class="testimonial">
                    <div class="pic">
                        <img src="images/t1.jpg" class="img-responsive" alt="">
                    </div>
                    
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim diam, tempus vel ultricies viverra, luctus in elit. 
                    </p>
					
					<h4 class="change">Broad</h4>
                </div>
				
                <div class="testimonial">
                    <div class="pic">
                        <img src="images/t3.jpg" class="img-responsive" alt="">
                    </div>
                    
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim diam, tempus vel ultricies viverra, luctus in elit. 
                    </p>
				
					<h4 class="change">Steve</h4>
                </div>
            </div>
     </div>
</div>
<!-- /Testimonials-->
<!-- Contact-->
<div class="contact" id="contact">
<div class="agileits-w3layouts-map wow zoomIn animated" data-wow-delay=".5s">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe>
	</div>
	</div>
	<div class="container">
	<div class="w3_cnc">
	<div class="w3_ctc">
	
	
		<div class="contact-agileits-title"> 
			<h3>Any Queries Please Contact Us</h3> 
		
		
		       <!--get in touch start here-->
			   
			<div class="get-touch" id="contact1">
					<div class="get-touch-main">
						<div class="get-touch-bottom">
							<form action="#" method="post">
							<input type="text" placeholder="First Name" name="Name" required="">
							<input type="text" class="no-mar" placeholder="Last Name" name="Email" required="">
							<input type="email" placeholder="Email" name="email" required="">
							<input type="text" class="no-mar" placeholder="Phone Number" name="phone" required="">
							<textarea placeholder="Message" name="Message" required="" ></textarea>
							<input type="submit" value="SUBMIT">
							</form>
							
						</div>
					</div>
			</div>
			</div>
		
				
				

<!-- /Conatct-->
<div class="w3l_footer">
		
			<div class="w3ls_footer_grids">
				
				<div class="w3ls_footer_grid">
					<div class="col-md-4 col-sm-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Location</h4>
							<p> 1234k Avenue, 4th block,<span>Newyork city</span></p>
						</div>
						
					</div>
					<div class="col-md-4 col-sm-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Email</h4>
							<a href="mailto:info@example.com">info@example.com</a>
						</div>
						
					</div>
					<div class="col-md-4 col-sm-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Call Us</h4>
							<p>+1234 567 567</p>
						</div>
						
					</div>
				
				</div>
			</div>
		</div>
</div>
	</div>
	</div>
		<div class="wthree_footer">
			<p>© 2018 Frolic. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
		</div>
	


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script  src="js/SmoothScroll.min.js"></script>	




<!-- Testimonials Script-->

 <script type="text/javascript">
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:false,
        navigationText:["",""],
        slideSpeed:1000,
        singleItem:false,
        transitionStyle:"fade",
        autoPlay:true
    });
});
</script>
<!--/Testimonials Script-->
	<!-- //gallery -->
	<script src="js/jquery.tools.min.js"></script>
	<script src="js/jquery.mobile.custom.min.js"></script>
	<script src="js/jquery.cm-overlay.js"></script>

	<script>
		$(document).ready(function () {
			$('.cm-overlay').cmOverlay();
		});
	</script>
	<!-- //gallery -->

<!-- start-smoth-scrolling -->
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
	<!-- //here ends scrolling icon -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
<!--//start-smoth-scrolling -->


</body>
</html>
</div>
 	
<!-- Footer -->
<footer class="w3-container w3-padding-hor-64 w3-grey w3-center w3-margin-top w3-opacity"> 

<p style="font-weight:normal">Copyright &copy; 
<div>
		<div class="w3-tag w3-large w3-red">S</div>
		<div class="w3-tag w3-large">P</div>
		<div class="w3-tag w3-large w3-yellow">O</div>
		<div class="w3-tag w3-large">R</div>
		<div class="w3-tag w3-large w3-deep-orange">T</div>
		<div class="w3-tag w3-large">E</div>
		<div class="w3-tag w3-large w3-cyan">E</div>
</div>
</p>

 <div class="w3-xlarge w3-padding-hor-32">
   <a href="#" class="w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-facebook-official"></i></a>
   <a href="#" class="w3-hover-text-red w3-show-inline-block"><i class="fa fa-pinterest-p"></i></a>
   <a href="#" class="w3-hover-text-light-blue w3-show-inline-block"><i class="fa fa-twitter"></i></a>
   <a href="#" class="w3-hover-text-grey w3-show-inline-block"><i class="fa fa-flickr"></i></a>
   <a href="#" class="w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-linkedin"></i></a>
 </div>
 
  <p style="font-weight:normal">Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">Sandy</a></p>
</footer>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

document.getElementsByClassName("tablink")[0].click();

function openCity(evt, type) {
  var i, x, tablinks;
  x = document.getElementsByClassName("r");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(type).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}

</script>

</body>
</html>
