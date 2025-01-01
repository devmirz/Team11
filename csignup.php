<!DOCTYPE html>
<html lang="en">
 <?php include 'connection.php';
?> 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Project X</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/signup.css">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Project X</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="team.html">Team</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <!-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->

      <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="container position-relative">

          <div class="carousel-item active">
            <div class="carousel-container">
              <h2>Welcome to Project X</h2>
              <p></p>
              <a href="#about" class="btn-get-started">Read More</a>
            </div>
          </div><!-- End Carousel Item -->

        </div>

      </div>

    </section>
    
    <!-- /Hero Section -->

    <section>
        <div class="container">
            <h2>Club Sign Up</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Club Name</label>
                    <input type="text" id="clubname" name="clubname" required placeholder="Enter club name">
                </div>
                <div class="form-group">
                  <label for="name">Manager Name</label>
                  <input type="text" id="managername" name="managername" required placeholder="Enter Manager Name">
              </div>

              <div class="mt-3 form-group">
                            <div class="form-group">
                                <label for="image">Upload Manager Photo</label>
                                <input 
                                    type="file" 
                                    name="image" 
                                    class="form-control-file" 
                                    id="exampleFormControlFile1"
                                    accept=".png, .jpeg"
                                    multiple
                                    required
                                    >
                            </div>
                        </div>
                <div class="form-group">
                    <label for="loc">Location</label>   
                    <input type="text" id="location" name="location" required placeholder="Enter your Location">
                    
                </div>

                <div class="form-group">
                  <label for="loc">Contact Number</label>   
                  <input type="text" id="contactnumber" name="contactnumber" required placeholder="Enter your Contact Number">
                  
              </div>

              <div class="mt-3 form-group">
                            <div class="form-group">
                                <label for="image">Upload Your Logo </label>
                                <input 
                                    type="file" 
                                    name="image1" 
                                    class="form-control-file" 
                                    id="exampleFormControlFile1"
                                    accept=".png, .jpeg"
                                    multiple
                                    required
                                    >
                            </div>
                        </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" required placeholder="Enter your email">
              </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Create a password">
                </div>
                <div class="form-group">
                    <input type="submit" value="Sign Up">
                </div>
            </form>
            <a href="login.html">Already have an account? Log in</a>
        </div>

    </section>
    


    
  </main>

  <footer id="footer" class="footer dark-background">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Project X</span>
          </a>
          <div class="footer-contact pt-3">
            <p>SASC</p>
            <p>Riyadh , Saudi Arabia</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+966 563630419</span></p>
            <p><strong>Email:</strong> <span>projectx@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <!-- <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div> -->

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p></p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Project X</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a>MSM</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

<?php
include 'connection.php';
$email=$_POST['email'];
$password=$_POST['password'];
$clubname=$_POST['clubname'];
$managername=$_POST['managername'];
$location=$_POST['location'];
$contactnumber=$_POST['contactnumber'];

$sql1="insert into login(email,password,usertype) values ('$email','$password','Clubs')" ;
$result1=mysqli_query($con,$sql1);

$sql="insert into csignup(email,clubname,managername,location,contactnumber) values ('$email','$clubname','$managername','$location',$contactnumber)" ;
$result=mysqli_query($con,$sql);

if($result==TRUE)
{
   echo "inserted";
        //echo("<script>window.location = 'clubdash.php';</script>");
}

    //echo"<h1><center>Login successful</center></h1>";
else{
    //echo"<h1>Login Failed. invalid email or password.</h1>";
}
//Manager Profile Picture

$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];  
$folder = "ManagerPhoto/".$filename;
if (move_uploaded_file($tempname, $folder)) {

  $msg = "Image uploaded successfully";

}else{

  $msg = "Failed to upload image";

}

$q=mysqli_query($con,"update csignup set managerpic = '$filename' where email='$email'");
echo "<script>location.href = 'club-dash.php';</script>";

//Club Logo Picture

$filename1 = $_FILES["image1"]["name"];
$tempname1 = $_FILES["image1"]["tmp_name"];  
$folder1 = "ClubPic/".$filename1;
if (move_uploaded_file($tempname1, $folder1)) {

  $msg = "Image uploaded successfully";

}else{

  $msg = "Failed to upload image";

}
$q1=mysqli_query($con,"update csignup set clubpic ='$filename1' where email='$email'");
echo "<script>location.href = 'clubcard.php';</script>";
?>

</html>