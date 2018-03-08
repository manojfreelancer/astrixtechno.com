<?php 

if(isset($_POST['contact-submit']))
{
	
	
	$to="ukrishna@astrixtechno.com";
	
	$subject=$_POST['contactsubject'];
	
	$name=$_POST['contactname'];
	
	$email=$_POST['contactemail'];
	
	$message=$_POST['contactmessage'];
	
	
	
	
	
	
	
	if(!empty($message))
	{
		$_POST=array();
		
	}

}
?>



<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    

<head>
        <meta charset="utf-8">
        <title>Astrix Techno Solutions</title>
        <meta name="description" content="Multipurpose, premium, bootstrap based bussiness, corporate, portfolio, blog, onepage, creative, magazine, personal, landing, coming soon html5 css3 template">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
		 <link rel="stylesheet" href="css/custom1.css">
        <link rel="stylesheet" id="color-scheme" href="css/colors/green.css">
        
        <!-- Favicon and Apple Icons -->
        <link rel="icon" type="image/png" href="images/icons/favicon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="images/icons/faviconx57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/icons/faviconx72.png">
        
        <!-- Modernizr -->
        <script src="js/modernizr.js"></script>

        <!--- jQuery -->
        <script src="js/jquery.min.js"></script>

       
	    
    </head>
    <body>
    
    
    <div id="wrapper">
        <header id="header" role="banner">
            <div class="collapse navbar-white special-for-mobile" id="header-search-form">
                <div class="container">
                    <form class="navbar-form animated fadeInDown"  role="search">
                        <input type="search" id="s" name="s" class="form-control" placeholder="Search in here...">
                        <button type="submit" class="btn-circle" title="Search"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- End .container -->
            </div><!-- End #header-search-form -->
            <nav class="navbar navbar-white navbar-transparent animated-dropdown ttb-dropdown" role="navigation">
                
                <div class="">
				
                    <div class="">
					 <a href= "index.html"><img src="D:\Boss\images\icons\astrix2.png" align="left" href="index.html"  width="210" height="150"  >
                           </a>

                        
                    </div><!-- End .container -->
                </div><!-- End .navbar-top -->
                
                <div class="navbar-inner sticky-menu">
                    <div class="container">
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle btn-circle pull-right collapsed" data-toggle="collapse" data-target="#main-navbar-container">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                            </button>

                           

                            <button type="button" class="navbar-btn btn-icon btn-circle pull-right last visible-sm visible-xs" data-toggle="collapse" data-target="#header-search-form"><i class="fa fa-search"></i></button>

                            

                            
                        </div><!-- End .navbar-header -->

                        <div class="collapse navbar-collapse" id="main-navbar-container">
                            <ul class="nav navbar-nav">
                                <li class="dropdown megamenu-container">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home</a>
                                   
                                </li>
                                <li class="dropdown megamenu-container">
                                    <a href="services.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services<span class="angle"></span></a>
                                    <div class="dropdown-menu megamenu" role="menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-3">
												<ul>            
                                                    
                                                    <li><a href="Application.html">Application Development</a></li>
                                                    <li><a href="Cms.html">CMS Solutions</a></li>
                                                    <li><a href="E-commerce.html">E-Commerce Solutions</a></li>
												</ul>
												</div><!-- End .col-sm-3 -->
												<div class="col-sm-3">
												<ul>            
                                                    <li><a href="itconsultant.html">IT Consulting</a></li>
                                                    <li><a href="mobileapplication.html">Mobile Application Development</a></li>
                                                    <li><a href="QatestingSERVICES.html">QA Testing Services</a></li>
                                                </ul><!-- End .megamenu -->
												</div><!-- End .col-sm-3 -->
									        </div><!-- End .row -->
                                        </div><!-- End .container -->
                                    </div><!-- End .megamenu -->
                                </li>
												

								
                                <li class="dropdown megamenu-container">
                                    <a href="industries.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Industries<span class="angle"></span></a>
                                    <div class="dropdown-menu megamenu" role="menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-3">
													<ul>            
                                                    
                                                        <li><a href="banking.html">Banking & Financial Services</a></li>
                                                        <li><a href="consumer.html">Consumer Packaged Goods</a></li>
                                                        <li><a href="education.html">Education</a></li>
													</ul>
												</div><!-- End .col-sm-3 -->
												<div class="col-sm-3">
													<ul>            
                                                        <li><a href="health.html">Healthcare</a></li>
                                                        <li><a href="information.html">Information Services</a></li>
                                                        <li><a href="insurance.html">Insurance</a></li>
													</ul>
												</div><!-- End .col-sm-3 -->
												<div class="col-sm-3">
													<ul>   
														<li><a href="retail.html">Retail</a></li>
														<li><a href="travel.html">Travel & Hospitality</a></li>
														<li><a href="transportation.html">Transportation & Logistics</a></li>
                                                    </ul>
												</div><!-- End .col-sm-3 -->   
											</div><!-- End .row -->
                                        </div><!-- End .container -->
                                    </div><!-- End .megamenu -->
                                </li>
                                        
                                   
                                
                                <li class="dropdown megamenu-container">
                                    <a href="aboutus5.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us<span class="angle"></span></a>
                                    <div class="dropdown-menu megamenu" role="menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-3">
													<ul>  
                                                        <li><a href="board-of-directors.html">Board of Directors</a></li>
                                                        <li><a href="mgteam2.html">Management Team</a></li>
                                                        <li><a href="Career.html">Careers</a></li>
								 					</ul>
												</div><!-- End .col-sm-3 -->
												<div class="col-sm-3">
													<ul>  
                                                        <li><a href="Casestudies.html">Case Studies</a></li>
                                                        <li><a href="Quality.html">Quality Management</a></li>
                                                        <li><a href="Vision.html">Vision</a></li>
                                                    </ul>
												</div><!-- End .col-sm-3 -->   
											</div><!-- End .row -->
                                        </div><!-- End .container -->
                                    </div><!-- End .megamenu -->
                                               
                                </li>
                               
                                <li class="visible-lg"><a href="contact.html">contact us</a></li>
                                <li class="visible-lg"><a href="login.html">Employee Login</a></li>
                            </ul>
                            
                            <button type="button" class="navbar-btn btn-icon btn-circle navbar-right last  hidden-sm hidden-xs" data-toggle="collapse" data-target="#header-search-form"><i class="fa fa-search"></i></button>
                            
                            
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                </div><!-- End .navbar-inner -->
            </nav>
        </header><!-- End #header -->
    
        <div id="content" role="main">
            <div class="page-header parallax darkbg largest larger-desc bg1" data-bgattach="images/backgrounds/bg1.jpg" data-0="background-position:50% -120px;" data-500="background-position:50% -100%">
                   <div class="container" >
                    <div class="row">
                        
                            <h1 class="title-underblock custom text-uppercase text-center mb50">CONTACT US</h1>
                            
                        
                        
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-header -->

			
			<div class="row">
									<div class="col-md-3"></div>
			<div class="col-md-6 col-sm-12">
			<center><h1 class="middle">Please fill and submit the below form<h1></center>

			</div>
									<div class="col-md-3"></div>
			</div>
			
			
    
        <div id="content" role="main">
            

            <div id="contact-section" class="contact-bg">
                <div class="container">
                    <div class="row">


                        <div class="mb10 visible-xs"></div><!-- space -->
						
						<div class="col-md-3"></div>

                        <div class="col-md-6 col-sm-12 contact-inner">
                           <center><h2 class="title-underblock white mb30 text-white getin">Get In Touch</h2></center>
                            <form action="contact.php" method="post" id="contact-form">
                                <div class="form-group">
                                    <label for="contactname" class="input-desc text-white">Name</label>
                                    <input type="text" class="form-control input-border-bottom white" id="contactname" name="contactname" placeholder="Your Name" required>
                                </div><!-- End .from-group -->
                                <div class="form-group">
                                    <label for="contactemail" class="input-desc text-white">Email</label>
                                    <input type="email" class="form-control input-border-bottom white" id="contactemail" name="contactemail" placeholder="Your Email" required>
                                </div><!-- End .from-group -->
                                <div class="form-group">
                                    <label for="contactsubject" class="input-desc text-white">Subject</label>
                                    <input type="text" class="form-control input-border-bottom white" id="contactsubject" name="contactsubject" placeholder="Subject">
                                </div><!-- End .from-group -->
                                <div class="form-group">
                                    <label for="contactmessage" class="input-desc text-white">Message</label>
                                    <textarea class="form-control input-border-bottom white" rows="6" id="contactmessage" name="contactmessage" placeholder="Your Message" required></textarea>
                                </div><!-- End .from-group -->

                                <div class="mb10"></div><!-- space -->

                                <div class="form-group">
                                    <input type="submit" class="btn btn-default btn-block no-radius" data-loading-text="Sending..." value="Send Message">
                                </div><!-- End .from-group -->
                            </form>
                        </div><!-- End .col-sm-6 -->

						<div class="col-md-3"></div>
						
						
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End #contact-bg -->
			
			            
			<div id="content" role="main">
			<div class="row">
			<div class="container-flude">
			                        <div class="col-md-12 col-sm-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15226.59159320695!2d78.4279512!3d17.4286772!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf1227a7110dbbdee!2sGlobal+Astrix+Techno+Solutions!5e0!3m2!1sen!2sin!4v1499150429403" width="100%" height="500" frameborder="0" style="border-radius:7px;" allowfullscreen></iframe><!-- End #map -->
                        </div><!-- End .col-sm-6 -->
			</div>
			
			</div>
			
			
			</div>
			
			
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">

                        <h3 class="mb20">INDIA</h3>
                        <ul class="contact-list">
                            <li><strong>Office:</strong> 8-2-293/k/38,<br> kamalapuricolony,<br> sagar society,banjara hills,<br>hyderabad</li>
                            <li><strong>Email:</strong> <a href="mailto:puffde@gmail.com">hr@astrix.com</a></li>
                            
                            <li><strong>Phone:</strong> +91 040 48535532</li>
                        </ul>

                    </div><!-- End .col-sm-4 -->

                    <div class="mb10 visible-xs"></div><!-- space -->
                    
                    <div class="col-sm-4">

                        <h3 class="mb20">Us</h3>
                        <ul class="contact-list">
                            <li><strong>Office:</strong> 1974 HADDAM PI, <br>hoffman Estates,li<br>chicago zip 60169 <br>united states</li>
                            
                            </ul>

                    </div><!-- End .col-sm-4 -->
					  
                    <div class="col-sm-4">

                        <h3 class="mb20">UK</h3>
                        <ul class="contact-list">
                            <li><strong>Office:</strong> Kemp house, <br> 152-160,city road<br> central londan<br>EC1V2XN</li>
                            
                            <li><strong>Phone:</strong> +1 (312) 709 51 33</li>
                        </ul>

                    </div><!-- End .col-sm-4 -->


                    <div class="mb10 visible-xs"></div><!-- space -->

                    <div class="col-sm-4">

                        <h3 class="md-margin">Social Media</h3>
                        <p>You can find us on social media, get it touch and send messages via social medias...</p>
                        <hr class="mb25">
                        <div class="social-icons">
                            <a href="#" class="social-icon icon-facebook add-tooltip first" data-placement="top" title="Like us on Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="social-icon icon-twitter add-tooltip" data-placement="top" title="Find us at Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon icon-google-plus add-tooltip" data-placement="top" title="Find us at Google+">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#" class="social-icon icon-skype add-tooltip" data-placement="top" title="Contact us via Skype">
                                <i class="fa fa-skype"></i>
                            </a>
                            <a href="#" class="social-icon icon-linkedin add-tooltip" data-placement="top" title="Find us at Linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div><!-- End .social-icons -->
                    </div><!-- End .col-sm-4 -->
                    
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb5 visible-xs"></div><!-- space -->

        </div><!-- End #content -->

        
        <footer id="footer" class="footer-inverse" role="contentinfo">
            <div id="footer-inner" class="no-padding-bt-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 main-widget">
                            <div class="widget">
                                <div class="corporate-widget">
                                    <span class="footer-logo">About US</span><!-- End .footer-logo -->
                                    <p>Our Customers like working with us because we deliver value to their initiatives. We execute this by applying a time-based formula of combining strong technology expertise.</p>

                                    
                                    
                                    <span class="social-icons-label">Find Us at:</span>
                                    <div class="social-icons">
                                        <a href="https://www.facebook.com/astrixtechnosolutions" class="social-icon icon-facebook" title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="https://twitter.com/GlobalastrixT" class="social-icon icon-twitter" title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="https://plus.google.com/u/0/b/114083310989805495847/114083310989805495847" class="social-icon icon-google-plus" title="Google Plus">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        
                                        </a>
                                        <a href="https://www.linkedin.com/in/global-astrix-techno-solutions-974b18136" class="social-icon icon-linkedin" title="Linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div><!-- End .social-icons -->

                                </div><!-- End corporate-widget -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-md-3 -->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h4>INDUSTRIES</h4>
                                <ul class="links">
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Banking & Financial Services</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Consumer Packaged Goods</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Education</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Healthcare</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Information Services</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Insurance</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Retail</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Travel & Hospitality</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Transportation & Logistics</a></li>
                                    
                                </ul>
                            </div><!-- End .widget -->

                        </div><!-- End .col-md-3 -->

                        <div class="clearfix visible-sm"></div><!-- End .clearfix -->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h4>Services</h4>
								<ul class="links">
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Application Development</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>CMS Solution</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>E-Commerce Solutions</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>IT Consulting</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Mobile Application Development</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>QA Testing Services</a></li>
                                                                        
                                </ul>
                                
                            </div><!-- End .tagcloud -->
                        </div><!-- End .col-md-3 -->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h4>Company Overview</h4>
                                <ul class="links">
									<li><a href="#"><i class="fa fa-angle-right"></i>Company History</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Locations</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Case Studies</a></li>
								</ul>
                            </div><!-- End .widget -->
								
                        </div><!-- End .col-md-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End #footer-inner -->
            <div id="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-push-6">
                            <ul class="footer-menu">
                                <li><a href="aboutus.html">About Us</a></li>
                                <li><a href="#">Search</a></li>
                                <li><a href="faqs.html">Faqs</a></li>
                                <li><a href="knowledge.html">Knowledge</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </div><!-- End .col-md-6 -->
                        <div class="col-md-6 col-md-pull-6">
                            <p class="copyright">© 2013-2017 GlobalAstrix Techno Solutions Pvt Limited. All Rights Reserved <a href="#"></a></p>
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End #footer-bottom -->
        </footer><!-- End #footer -->


    </div><!-- End #wrapper -->
    <a href="#top" id="scroll-top" title="Back to Top"><i class="fa fa-angle-up"></i></a>
	<!-- END -->

    <!-- Smoothscroll -->
    <script src="js/smoothscroll.js"></script>

    <!-- Google map javascript api v3 -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.hoverIntent.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/waypoints-sticky.min.js"></script>
    <script src="js/jquery.debouncedresize.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jflickrfeed.min.js"></script>
    <script src="js/twitter/jquery.tweet.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/main.js"></script>

    <script>
        /* Map */
        (function () {
            "use strict";
            
            if (document.getElementById("map")) {
                var locations = [
                    ['<div class="map-info-box"><ul class="contact-info-list"><li><span><i class="fa fa-home fa-fw"></i></span> Mimar Sinan Mh., Konak/İzmir, Türkiye</li><li><span><i class="fa fa-phone fa-fw"></i></span> +90 0 (232) 324 11 83</li></ul></div>', 38.396652, 27.090560, 9]
                ];

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: new google.maps.LatLng(38.395592, 27.102122),
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    styles: [{"featureType":"all","elementType":"all","stylers":[{"saturation":-100},{"gamma":0.5}]}]
                });

                var infowindow = new google.maps.InfoWindow();


                var marker, i;

                for (i = 0; i < locations.length; i++) {  
                  marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: 'images/pin.png',
                  });

                  google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                      infowindow.setContent(locations[i][0]);
                      infowindow.open(map, marker);
                    }
                  })(marker, i));
                }
            }

        }());
    </script>
	
    </body>

<!-- Mirrored from eonythemes.com/themes/wb/boss/main/contact9.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2015 07:25:57 GMT -->
</html>