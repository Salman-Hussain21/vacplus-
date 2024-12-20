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
                    "<li class='nav-item'>
                      <a class='nav-link' href='profile.php'>$_SESSION[patient_name]</a>
                    </li>
                    <li class='nav-item'>
                      <a class='nav-link' href='logout.php'><i class='fa fa-sign-out' style='font-size: 22px;'></i></a>
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
 <br><br>
        <center>

                      
		<h3 class="text-center">Vaccination Reports</h3><br>
       <table class="table table-hover">
        <thead>
            <tr>
            <th>Children Name</th>
                            <th>Hospital Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Vaccine</th>
                            <th>Vaccination Status</th>
                            <th>Report</th>
                            <tr>
                    </thead>
        <tbody>
        <?php

        
                            $query = "SELECT tbl_patient.name as 'pname', tbl_hospital.name as 'hname', tbl_vaccine.name as 'vname', tbl_tresult.* FROM tbl_tresult INNER JOIN tbl_patient ON tbl_tresult.p_id = tbl_patient.id INNER JOIN tbl_hospital ON tbl_tresult.h_id=tbl_hospital.id INNER JOIN tbl_vaccine ON tbl_tresult.v_id=tbl_vaccine.id WHERE tbl_tresult.p_id=$_SESSION[patient_session]";
                            $result = mysqli_query($connection,$query);
                            foreach($result as $row)
                            {
                                echo 
                                "<tr>
                                    <td>$row[pname]</td>
                                    <td>$row[hname]</td>
                                    <td>$row[date]</td>
                                    <td>$row[time]</td>
                                    <td>$row[vname]</td>
                                    <td>$row[result]</td>";

    if($row['result'] == 'Done') {
        echo "<td><a href='view_report.php?id=$row[id] ' class='btn btn-primary'>Download Report</a></td>";
    } else {
        echo "<td>No Report Found</td>"; // Empty cell if result is not "Done"
    }}

                                    "</td>
                                </tr>";

                        ?>
        </tbody>
       </table>

    </center>