<?php
include("connection.php");
session_start();
if(!isset($_SESSION['patient_session'])) {
  header('Location: login.php');
  exit;
}

$patient_id = $_SESSION['patient_session'];
$fetch_patient_query = "SELECT * FROM tbl_patient WHERE id = $patient_id";
$result = mysqli_query($connection, $fetch_patient_query);

if (!$result) {
  // Handle query error
  echo "Error: " . mysqli_error($connection);
} else {
  // Check if patient exists
  if (mysqli_num_rows($result) > 0) {
    $patient = mysqli_fetch_assoc($result);
  } else {
    // Redirect to login page if patient not found
    header('Location: login.php');
    exit;
  }
}
?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>VS | HOME</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		

		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->

			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.php"><img src="img/logo.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li><a href="index.php">Home</a></li>
											<li><a href="blog-single.php" >Blogs</a>
											</li>
											<li><a href="contact.php">Contact Us</a></li>
											<li><a href="booked_appointment.php">My Appointments </a></li>

											<li class="nav-item">
              <?php
                  if(isset($_SESSION['patient_session']))
                  {
                    echo 
                    "<li class='nav-item active'>
                      <a class='nav-link' href='profile.php'>$_SESSION[patient_name]</a>
                    </li>
                    <li class='nav-item '>
                      <a class='nav-link ' href='logout.php'><i class='fa fa-sign-out' style='font-size: 22px;'></i></a>
                    </li>";
                  }
                  else
                  {
                    echo 
                    '<li class="nav-item">
                      <a class="nav-link" href="login.php"><i class="fa fa-user" style="font-size: 22px;"></i></a>
                    </li>';
                  }
              ?>
              
              </li>
										</ul>
									</nav>
								</div>
							</div>

<!-- navbar end -->
							
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
	
				
		<!-- Start Contact Us -->
		<section class="contact-us section overflow-auto">
			<div class="container">
				<div class="inner">
					<div class="row"> 
                    <center>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h3 class="text-center">Update Profile</h3>
								<!-- Form -->
                        
								<form class="form overflow-auto" method="post" action="">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<input placeholder="Enter Your Name" name="name" value="<?php echo $patient['name']?>" required="required" type="text">

											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input placeholder="Enter Your Email" name="email" value="<?php echo $patient['email']?>" required="required" type="email">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input placeholder="Enter Your Password" name="password" value="<?php echo $patient['password']?>" required="required" type="password">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input placeholder="Enter Your Contact" name="phone" value="<?php echo $patient['contact']?>" required="required" type="text">
											</div>
										</div>
			<div class="col-lg-3" >
		  <select name="city" class="form-control">
            <option hidden>Select Any City</option>
            <?php 
                $query = "SELECT * FROM tbl_city";
                $result = mysqli_query($connection,$query);
                foreach ($result as $row1) {
                    echo "<option value='".$row1['id']."'";
                    if ($patient['cid'] == $row1['id']) {
                        echo " selected";
                    }
                    echo ">".$row1['name']."</option>";
                }
            ?>
          </select><br><br>
		  </div>

		  <div class="col-lg-3">
          <select name="gender" class="form-control text-center overflow-auto">
            <option hidden>Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select><br>
          </div>

		  <div class="col-lg-12">
			<div class="form-group">
			<input placeholder="Enter Your Address" name="address" value="<?php echo $patient['address']?>" required="required" type="text">
		</div>
			</div>







										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit" name="btnupdate">Update Profile</button>
                                                <br><br>
											</div>
										</div>
									</div>
								</form>
<!-- php code to update data -->

<?php
          if(isset($_POST['btnupdate']))
          {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $city = $_POST['city'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $query = "UPDATE tbl_patient SET name='$name',contact='$phone',email='$email',password='$password',cid='$city',gender='$gender',address='$address' WHERE id=$_SESSION[patient_session]";
            $result = mysqli_query($connection,$query);
            if($result)
            {
              echo 
              "<script>
                  alert('Profile Updated, Login again to see changes');
                  window.location.href='profile.php';
              </script>";
            }
          }
        ?>

<!-- php code to update data end -->
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
 </center>
						<!--/End single-info -->

		</section>
		<!--/ End Contact Us -->
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut labore dolore magna.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>	
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Google Map API Key JS -->
		<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
		<!-- Gmaps JS -->
		<script src="js/gmaps.min.js"></script>
		<!-- Map Active JS -->
		<script src="js/map-active.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
    </body>
</html>