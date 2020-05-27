<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>portfolio</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139874093-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139874093-1');
</script>


    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.php"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="about.php">About</a></li> 
								<li class="nav-item"><a class="nav-link" href="services.php">Portfolio</a></li> 
								<!-- <li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
									</ul>
								</li>  -->
								<!-- <li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
									</ul>
								</li>  -->
								<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h2>Portfolio</h2>
							<div class="page_link">
								<a href="index.php">Home</a>
								<a href="services.php">Portfolio</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
				<div class="container">
					<div class="main_title">
						<h2>Some Projects I have done.</h2>
						<p>I used HTML, CSS, Bootstrap4, MDBootsrap4, PHP, Laravel, Nodejs, JQuery, Javasript, MYSQL, MongoDB For this projects </p>
					</div>
					<div class="feature_inner row">
						<div class="col-lg-4 col-md-6">
							<div class="feature_item">
								<i class="flaticon-city"></i>
								<h4>Fuel Station Management System</h4>
								<p>Complete System for manage Fuel Station.</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="feature_item">
								<i class="flaticon-skyline"></i>
								<h4>Accuair(Air Pollusion Identification System)</h4>
								<p>The system consists of an Arduino device Mobile app and web based system. The Arduino device is used to measure the air pollution level using different type of gas sensors.								</p>							
						 </div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="feature_item">
								<i class="flaticon-sketch"></i>
								<h4>Python Web Server</h4>
								<p>This is simple HTTP server.Which would response with a staticcontent according to the request.Also optimize with inmemory cashing in order to the increase the performances</p>
							</div>
						</div>
					</div>
					<br>
					<br>
					<div class="feature_inner row">
							<div class="col-lg-4 col-md-6">
								<div class="feature_item">
									<i class="flaticon-city"></i>
									<h4>Stack-API</h4>
									<p>	“STACK” is a backend API which is aim to develop for manage users in a school website.								</p>							
								</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="feature_item">
									<i class="flaticon-skyline"></i>
									<h4>Online Cab Boking System</h4>
									<p>Complete System For book Cabs online.</p>							
							 </div>
							</div>
							<!-- <div class="col-lg-4 col-md-6">
								<div class="feature_item">
									<i class="flaticon-sketch"></i>
									<h4>Python Web Server</h4>
									<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
								</div>
							</div> -->
						</div>
				</div>
			</section>
        <!--================End Feature Area =================-->
        
        <!--================Testimonials Area =================-->
       
        <!--================End Testimonials Area =================-->
        
        <!--================Footer Area =================-->
		<footer class="footer_area p_120">
				<div class="container">
					<div class="row footer_inner">
						<div class="col-lg-5 col-sm-6">
							<aside class="f_widget ab_widget">
								<div class="f_title">
									<h3>About Me</h3>
								</div>
								<p>I am an enthusiastic, hard working,honest individual. Also good timekeeper and always willing to learn new things.love to be helpful and polite with others.							</h5>
								</p>
								
							</aside>
						</div>
						<div class="col-lg-5 col-sm-6">
							
						</div>
						<div class="col-lg-2">
							<aside class="f_widget social_widget">
								<div class="f_title">
									<h3>Follow Me</h3>
								</div>
								<ul class="list">
									<li><a href="https://www.facebook.com/kithmi.ranaweera"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/KithmiRanaweera"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://github.com/Kithmi1995"><i class="fa fa-github"></i></a></li>
									<li><a href="https://www.linkedin.com/in/kithmi-ranaweera-27336b137/"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</aside>
						</div>
					</div>
				</div>
			</footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>