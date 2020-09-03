<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Startup HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="../assets/css/slicknav.css">
            <link rel="stylesheet" href="../assets/css/flaticon.css">
            <link rel="stylesheet" href="../assets/css/animate.min.css">
            <link rel="stylesheet" href="../assets/css/magnific-popup.css">
            <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="../assets/css/themify-icons.css">
            <link rel="stylesheet" href="../assets/css/slick.css">
            <link rel="stylesheet" href="../assets/css/nice-select.css">
            <link rel="stylesheet" href="../assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header_area header-transparent">
            <div class="main-header">
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                  <a href="index.php"><img src="../images/MIC_LOGO.png" class="img img-fluid" style="width: auto;" alt="Yukti"></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a class="text-dark" href="index.html">Home</a></li>
                                            <li><a class="text-dark" href="about.html">About</a></li>
                                            <li><a class="text-dark" href="services.html">Services</a></li>
                                            <li><a class="text-dark" href="work.html">Works</a></li>
                                            <li><a class="text-dark" href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a class="text-dark" href="blog.html">Blog</a></li>
                                                    <li><a class="text-dark" href="single-blog.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="text-dark" href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a class="text-dark" href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="text-dark" href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            <div class="col-xl-2 col-lg-3 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="#" class="btn header-btn">Contact Now</a>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>
        <!-- slider Area End-->
        <!-- Want To Work Start -->
        <div class="wantToWork-area w-padding" style="padding-bottom: 20px !important;">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="wantToWork-caption">
                            <p>India's Biggest Startup Platform</p>
                            <h2>
                            A bit about You ?
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Want To Work End -->
        <!-- Our Services Start -->
        <div class="our-services container pt-50">
            <div class="row mt-2">
                <div class="col col-lg-3">
                    <h5>Institute Name</h5>
                </div>
                <div class="col">
                    <?php include '../inc/search_institutes.php' ?>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col col-lg-3">
                    <h5>Full Name</h5>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col col-lg-3">
                    <h5>Sector of Incubation</h5>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <h5>Whether incubator would like to partner for extending support to the technologies/ innovations?</h5>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col col-lg-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Yes
                        </label>
                    </div>
                </div>

                <div class="col-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col col-lg-3">
                    <h5>Email</h5>
                </div>
                <div class="col">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col col-lg-3">
                    <h5>Phone No.</h5>
                </div>
                <div class="col">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="+91" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col col-lg-3">
                    <h5>Password</h5>
                </div>
                <div class="col">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>

      
       
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">

            </div>
            <div class="col ml-5 float-right">
                <a href='disclosure/d-form1.php' class="genric-btn primary w-25">
                    Register
                </a>
            </div>
        </div>

        <!-- Testimonial End -->
        <!--All startups Start -->
        <div class="all-starups-area fix" style="padding-top: 20%">
            <!-- left Contents -->
            <div class="starups">
                <div class="starups-details">
                    <span>Features That You Will Get</span>
                    <h3>All startups need to make<br>their business work</h3>
                    <!-- Details -->
                    <div class="starups-list">
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px">
                                <path fill-rule="evenodd"  fill="rgb(4, 219, 236)" d="M15.000,0.000 C23.284,0.000 30.000,6.716 30.000,15.000 C30.000,23.284 23.284,30.000 15.000,30.000 C6.716,30.000 -0.000,23.284 -0.000,15.000 C-0.000,6.716 6.716,0.000 15.000,0.000 Z"/>
                                <text kerning="auto" font-family="themify" fill="rgb(255, 255, 255)" font-size="14px" x="9px" y="22.0320000000002px">&#58956;</text>
                                </svg>
                            </li>
                            <li>
                                <p>Having a home based business is a wonderful asset to your life. The problem still stands,</p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px">
                                <path fill-rule="evenodd"  fill="rgb(4, 219, 236)" d="M15.000,0.000 C23.284,0.000 30.000,6.716 30.000,15.000 C30.000,23.284 23.284,30.000 15.000,30.000 C6.716,30.000 -0.000,23.284 -0.000,15.000 C-0.000,6.716 6.716,0.000 15.000,0.000 Z"/>
                                <text kerning="auto" font-family="themify" fill="rgb(255, 255, 255)" font-size="14px" x="9px" y="22.0320000000002px">&#58956;</text>
                                </svg>
                            </li>
                            <li>
                                <p>Promotional Advertising Specialty You Ve Waited Long Enough</p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px">
                                <path fill-rule="evenodd"  fill="rgb(4, 219, 236)" d="M15.000,0.000 C23.284,0.000 30.000,6.716 30.000,15.000 C30.000,23.284 23.284,30.000 15.000,30.000 C6.716,30.000 -0.000,23.284 -0.000,15.000 C-0.000,6.716 6.716,0.000 15.000,0.000 Z"/>
                                <text kerning="auto" font-family="themify" fill="rgb(255, 255, 255)" font-size="14px" x="9px" y="22.0320000000002px">&#58956;</text>
                                </svg>
                            </li>
                            <li>
                                <p>Direct Mail Advertising How I Made 47 325 In 30 Days  By Mailing 2 200 Letters</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Right Contents  -->
            <div class="starups-img"></div>
        </div>
        <!--All startups End -->
        <!-- Want To Work Start -->
        <div class="wantToWork-area w-padding3">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="wantToWork-caption">
                            <p>Once you’ve settled on a business</p>
                            <h2>High Performance Services For Multiple Industries.</h2>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-5 col-md-4">
                       <div class="wantToWork-btn f-right">
                            <a href="#" class="btn btn-ans">view more</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Want To Work End -->
        <!-- David Droga start -->
        <div class="david-droga-area  pb-160">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <!-- single-david -->
                        <div class="single-david mb-30">
                            <div class="david-img">
                                <img src="assets/img/gallery/david.png" alt="">
                            </div>
                            <div class="david-captoin">
                                <ul class="david-info">
                                    <li>january 28, 2020 </li>
                                    <li> No Comments</li>
                                </ul>
                                <h2><a href="single-blog.html">Addiction When Gambling Becomes Harness The Power.</a></h2>
                                <span>Continue Reading</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <!-- single-david -->
                        <div class="single-david mb-30">
                            <div class="david-img">
                                <img src="assets/img/gallery/david2.png" alt="">
                            </div>
                            <div class="david-captoin">
                                <ul class="david-info">
                                    <li>january 28, 2020</li>
                                    <li>No Comments</li>
                                </ul>
                                <h2><a href="single-blog.html">Addiction When Gambling Becomes Harness The Power.</a></h2>
                                <span>Continue Reading</span>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
        <!-- David Droga End -->
        <!-- Want To Work Start -->
        <div class="wantToWork-area wantToWork-area2 w-padding2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Send us a message if you have an issue with your order.</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <a href="#" class="btn btn-black f-right">contact us now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Want To Work End -->

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
               <div class="footer-top footer-padding">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Services</h4>
                                    <ul>
                                        <li><a href="#">Marketing</a></li>
                                        <li><a href="#"> SEO Service</a></li>
                                        <li><a href="#">Digital market</a></li>
                                        <li><a href="#">Content create</a></li>
                                        <li><a href="#">Find Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Customer Care</h4>
                                    <ul>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">News & Articles</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#"> Terms of Use</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4><span>+564</span> 7885 3222</h4>
                                    <ul>
                                        <li><a href="#">youremail@gmail.com</a></li>
                                    </ul>
                                    <p>123 East 26th Street, Fifth Floor, New York, NY 10011</p>
                                </div>
                                <!-- footer social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="../assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="../assets/js/wow.min.js"></script>
		<script src="../assets/js/animated.headline.js"></script>
        <script src="../assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="../assets/js/jquery.nice-select.min.js"></script>
		<script src="../assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="../assets/js/contact.js"></script>
        <script src="../assets/js/jquery.form.js"></script>
        <script src="../assets/js/jquery.validate.min.js"></script>
        <script src="../assets/js/mail-script.js"></script>
        <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>
        
    </body>
</html>