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
		
		<section class="contact-us section overflow-auto">
			<div class="container">
				<div class="inner">
					<div class="row"> 
                    <center>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h3 class="text-center">Book An Appointment</h3>
								<!-- Form -->
                        
								<form class="form overflow-auto" method="post" onsubmit="return validateForm()">
									<div class="row">
                  <div class="col-lg-12">
											<div class="form-group">
												<input  type="hidden" readonly value="<?php echo $patient['id'];?>" name="p_id">
											</div>
										</div>              
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" value="<?php echo $patient['name'];?>">
											</div>
										</div>
                    <div class="col-lg-6">
    <div class="form-group">
        <select name="hid" id="hospitalSelect" class="form-control text-center overflow-auto">
            <option hidden selected disabled>Hospital</option>
            <?php 
                $query = "SELECT * FROM tbl_hospital WHERE status='activate'";
                $result = mysqli_query($connection,$query);
                foreach($result as $row)
                {
                    echo "<option value='$row[id]'>$row[name]</option>";
                }
            ?>
        </select>
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        <select name="vid" id="vaccineSelect" class="form-control text-center overflow-auto">
            <option hidden selected disabled>Vaccine</option>
            <?php 
                $query = "SELECT * FROM tbl_vaccine WHERE status='available'";
                $result = mysqli_query($connection,$query);
                foreach($result as $row)
                {
                    echo "<option value='$row[id]'>$row[name]</option>";
                }
            ?>
        </select>
    </div>
</div>

<div class="col-lg-12">
    <div class="form-group">
        <input type="date" name="date" id="dateInput">
    </div>
</div>

<div class="col-lg-12">
    <div class="form-group">
        <select name="time" id="timeSelect" class="form-control text-center overflow-auto">
            <option hidden selected disabled>Select Time</option>
            <option>9-11</option>
            <option>11-1</option>
            <option>1-3</option>
            <option>3-5</option>
            <option>5-7</option>
        </select>
    </div>
</div>

<script>
    // JavaScript code for form validation
    function validateForm() {
        var hospital = document.getElementById("hospitalSelect").value;
        var vaccine = document.getElementById("vaccineSelect").value;
        var date = document.getElementById("dateInput").value;
        var time = document.getElementById("timeSelect").value;

        if (hospital == "" || vaccine == "" || date == "" || time == "") {
            alert("Please fill out all fields.");
            return false;
        }
        return true;
    }
</script>


      <button class="btn" type="submit" name="btnbook">Book Appointment</button>
      </div>
      <!-- php code to book appointment -->
        <?php
if(isset($_POST['btnbook']))
{
	
    $p_id = $_POST['p_id'];
    $hid = $_POST['hid'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $vid = $_POST['vid'];
    
    $existing_appointment = mysqli_query($connection,"SELECT * FROM tbl_appointment WHERE h_id='$hid' AND date='$date' AND time='$time' AND p_id='$_SESSION[patient_session]'");

    if(mysqli_num_rows($existing_appointment) > 0)
    {
        echo "<script>alert('Appointment Already Exists');</script>";
    }
    else
    {
        // Insert into tbl_appointment
        $query_appointment = "INSERT INTO tbl_appointment(p_id, h_id, date, time, v_id) VALUES ('$p_id', '$hid', '$date', '$time', '$vid')";
        $result_appointment = mysqli_query($connection, $query_appointment);

        // Insert into tbl_tresult
		if ($result_appointment) {
			// Get the auto-incremented id of the inserted row
			$aid = mysqli_insert_id($connection);
		
			// Insert the tresult details into the tbl_tresult table using the appointment id
			$query_tresult = "INSERT INTO tbl_tresult(p_id, h_id, date, time, v_id, a_id) VALUES ('$p_id', '$hid', '$date', '$time', '$vid', '$aid')";
			$result_tresult = mysqli_query($connection, $query_tresult);
		}

        if ($result_appointment && $result_tresult) {
            echo "<script>alert('Appointment Booked Successfully'); window.location.href='booked_appointment.php';</script>";
        }
        else {
            echo "<script>alert('Error booking appointment');</script>";
        }
    }
}
            
        
        ?>
<!-- php code end -->

</body>
</html>