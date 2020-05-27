<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// if(isset($_SESSION['message'])){
//     echo "<script>alert('".$_SESSION['message']."');</script>";
//     unset($_SESSION['message']);
// }
// else{
//     echo "<script>alert('error!');</script>";
// }

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Contact</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>

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
						<a class="navbar-brand logo_h" href="index.html"></a>
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
							<h2>Contact Me</h2>
							<div class="page_link">
								<a href="index.php">Home</a>
								<a href="contact.php">Contact Me</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
           <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Matara, sri Lanaka</h6>
                            </div>
                            <br>
                            <br>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6>kithmiranaweera@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <!-- <form class="row contact_form" action="mail.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </form> -->
                    <form class="row contact_form" id="" action="mail.php" method="post" >
					<div class="col-md-6">
                        <div class="form-group">
							<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control" required="" type="text">
						</div>
                        <div class="form-group">

							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="form-control" required="" type="email">
                        </div>
                        <div class="form-group">

							<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="form-control" required="" type="text">
						</div>
                    </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                	<textarea class="form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                </div>
                        </div>
                        <div class="col-md-12 text-right">
                        <input type="submit" value="Send Message" class="btn submit_btn">

                            <!-- <button class="btn submit_btn" data-toggle="modal" data-target="#myModal">Send Message</button> -->
						</div>
					</form>
                    </div>
                </div>
            </div>
            </div>
        </section>
        
			<!-- end contact Area -->	
        <!--================Contact Area =================-->


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
        
        <!--================Contact Success and Error message Area =================-->
        <!-- <div id="myModel" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Modals error -->

        <!-- <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div> -->
        <!--================End Contact Success and Error message Area =================-->
        
        
        
        
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
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <!-- <script src="js/contact.js"></script> -->
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
       
        

<?php
if (isset($_SESSION['message'])){
    ?>
    <script>
        $(document).ready(function () {
            console.log("<?php echo $_SESSION['message']; ?>");
            toastr["success"]("<?php echo $_SESSION['message']; ?>");
        });
    </script>
<?php
    unset($_SESSION['message']);
}
else{
    ?>
    <!-- <script>
        $(document).ready(function () {
            console.log("no msg");
            toastr["success"]("No message");
        });
    </script> -->

    <?php
}
?>

    </body>
</html>