<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Internspace</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #750645;
  color: white;
}
</style>
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
                                            <li><a href="index.php">Home</a></li>
                                           
                                            <li><a href="contactus.php">Contact</a></li>
                                           
                                            <li><a href="videos.php">Videos</a></li>
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
                       
    </header>
    <main>

        <!-- slider Area Start-->
      <!--   <div class="slider-area "> -->
            <!-- Mobile Menu -->
            
    <!--     </div>
 -->        <!-- slider Area End-->
        <!-- Our Services Start -->
        
            <div class="container">
                <!-- Section Tittle -->
                
                        
                <!-- More Btn -->
                <!-- Section Button -->
               
        <h1 align="center">Internships</h1>

        <?php
      
      $conn1 = new mysqli("localhost","root","","internspace");
    
    if ($conn1->connect_error)
      die("Connection failed: " . $conn1->connect_error);
    else
    {
       
        $CompanyId = $_POST['CompanyId'];
       

        $query = "select * from internship where CompanyId='".$CompanyId."'";
    
    $data = mysqli_query($conn1, $query);
    
    $rowcount = mysqli_num_rows($data);
    }
    //echo "$rowcount";
    ?>

<table id="customers">
  <tr>
    <th>Post</th>
    <th>Title</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Stipend</th>
    <th>Action</th>
  </tr>
  
   

<?php
for ($i=0; $i < $rowcount ; $i++) 
{ 
	$row = mysqli_fetch_array($data);
	//print_r($row);
?>

<tr>
	<td><?php echo $row['Post'] ?></td>
	<td><?php echo $row['Title'] ?></td>
	<td><?php echo $row['StartDate'] ?></td>
	<td><?php echo $row['EndDate'] ?></td>
	<td>Rs. <?php echo $row['Stipend'] ?></td>
    <td><form action=viewinternships.php method="POST">
        <input type="submit" class="btn head-btn1" value="Delete">
        <input type="hidden" name="CompanyId" value='<?php echo $CompanyId;?>'>
        <input type="hidden" name="InternshipId" value='<?php echo $row["InternshipId"]; ?>'>
        <input type="hidden" name="del" value="1">
    </form>
</td>
	
</tr>
<?php
}

?>

<?php
 if(isset($_POST["del"]))
{
    if ($conn1->connect_error)
  die("Connection failed: " . $conn1->connect_error);
else
{
    
     $CompanyId = $_POST['CompanyId'];
     $InternshipId= $_POST['InternshipId'];


       $sql1="delete from internship where InternshipId='".$InternshipId."'";
	
       $data = mysqli_query($conn1, $sql1);
    
       
    
}
?>


<?php
} 
?>

            
            
           
</table>
       
      
        <!-- Testimonial End -->
         <!-- Support Company Start-->
    
        <!-- Support Company End-->
        <!-- Blog Area Start -->
        <br><br><br><br><br><br><br>
        <!-- Blog Area End -->

    </main>


    
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
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
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