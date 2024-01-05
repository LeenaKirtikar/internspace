<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Internspace </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

   <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/price_rangs.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo1.png" width=199 height=64 alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="Videos">Videos </a></li>
                                                                                       
                                            <li><a href="contactus.php">Contact</a></li>
                                            <li><a href="#">Add an Internship</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                <a href="adm_reg.php" class="btn head-btn1">Register</a>
                                    <a href="adm_login.php" class="btn head-btn2">Logout</a>
                                </div>
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
        <!-- Header End -->
    </header>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Add Internship</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Hero Area End -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Add an Internship</h2>
                    </div>
                    <div class="col-lg-8">
                        <!-- <form class="form-contact contact_form" action="addinternship.php" method="POST" id="contactForm" novalidate="novalidate"> -->
                        <form action="addinternship.php" method="post" class="form-contact contact_form" >
                            <div class="row">
                                <!-- <div class="col-12">
                                    <div class="form-group">
                                    <h6 class="contact-title">Post: </h6>
                                        <input type="text" name="Post" class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter a Post'" placeholder=" Enter a Post">
                                    </div>
                                </div> -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h6 class="contact-title">Post: </h6>
                                        <input type="text" name="post" class="form-control valid" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter a Post'" placeholder="Enter a Post">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h6 class="contact-title">Title: </h6>
                                        <input type="text" name="title" class="form-control valid"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter a Title'" placeholder="Enter a Title">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h6 class="contact-title">Prerequisites: </h6>
                                        <input type="text" name="prereq" class="form-control valid" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Add Prerequisites'" placeholder="Add Prerequisites">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h6 class="contact-title">Stipend: </h6>
                                        <input type="text" name="stipend" class="form-control valid" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Add a Stipend'" placeholder="Add a Stipend">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h6 class="contact-title">Start Date: </h6>
                                        <input type="date" name="sdate" class="form-control valid" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h6 class="contact-title">End Date: </h6>
                                        <input type="date" name="edate" class="form-control valid" >
                                    </div>
                                </div>

                                <div class="col-12">
                                    <h3></h3>
                                    <div class="form-group">

                                        
                                                                    
                                        
                                        <!-- <input class="form-control" name="subject" id="subject" type="select" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select Internship name '" placeholder="Select Internship name"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Add</button>
                                                
                            </div>

                            <?php 
                        

                        $post="";
                        $title="";
                        $prereq="";
                        $stipend="";
                        $sdate="";
                        $edate="";
                        $CompanyId = $_POST['CompanyId'];
                       
                     
    


                        ?>

                            <input type="hidden" name="abc" value=1>
                            <input type="hidden" name="CompanyId" value='<?php echo $CompanyId;?>'>
                        

                        </div>
                      <?php
                      if(!isset($_POST["abc"]))
                      {
                         
                          //echo $CompanyId;
                      }
                      ?>
                        </form>
                        
                        

                        <?php

if(isset($_POST["abc"]))
{

    
	$post=$_POST["post"];
	$title=$_POST["title"];
	$prereq=$_POST["prereq"];
	$stipend=$_POST["stipend"];
	$sdate=$_POST["sdate"];
	$edate=$_POST["edate"];
	$CompanyId = $_POST['CompanyId'];
    
		 $conn1 = new mysqli("localhost","root","","internspace");

if ($conn1->connect_error)
  die("Connection failed: " . $conn1->connect_error);
else
{
   
	$sql1="insert into internship (Post,Title,StartDate,EndDate,Prerequisites,Stipend,CompanyId) values ('".$post."','".$title."','".$sdate."','".$edate."','".$prereq."','".$stipend."','".$CompanyId."')";
	
	$r1=mysqli_query($conn1,$sql1);

 
  

	// if($r1==1)
    // {
    //    echo"<table align=center><tr><td colspan=2 align=center><strong><font text color=#00CC00>Data added successfully</font></strong></table>";
	// }
	// else 
	// {
   	// echo"<table align=center><tr><td ><strong><font text color=red>Data not added</font></strong></table>";
	// }
}

}


?>



                        
                    
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Internspace INC</h3>
                                <p>Mumbai</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>8291867211</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>internspace@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>About Us</h4>
                                 <div class="footer-pera">
                                     <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address : Mumbai </p>
                                    </li>
                                    <li><a href="#">Phone : 911</a></li>
                                    <li><a href="#">Email : internspace@gmail.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="#">Review</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Add Internship</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
               <!--  -->
              
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
    
    </html>