<?php
    include("connection.php");
    session_start();
    if(!isset($_SESSION['admin_session']))
    {
        echo "<script>window.location.href='login.php'</script>";
    }

    $query = "SELECT * FROM tbl_admin WHERE id=$_SESSION[admin_session]";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap Dashboards">
		<meta name="author" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="img/favicon.svg" />

		<!-- Title -->
		<title>Medical Admin Template - Contact Form</title>


		<!-- *************
			************ Common Css Files *************
			************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">

		<!-- Main css -->
		<link rel="stylesheet" href="css/main.min.css">


		<!-- *************
			************ Vendor Css Files *************
		************ -->


	</head>

	<body>

		<!-- Header start -->
		<header class="header">
			<div class="container-fluid">

				<!-- Row start -->
				<div class="row gutters">
					<div class="col-sm-4 col-4">
						<a href="index.php" class="logo">Mediplus</a>
					</div>
					<div class="col-sm-8 col-8">

						<!-- Header actions start -->
						<ul class="header-actions">

							<li class="dropdown d-none d-sm-block">

								<div class="dropdown-menu lrg" aria-labelledby="notifications">


							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name" value="<?php echo $row['name'];?>"></span>
									<span class="avatar">S<span class="status busy"></span></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
	
										</div>
										<a href="profile.php"><i class="icon-user1"></i> Update Profile</a>

										<a href="login.php"><i class="icon-log-out1"></i> Sign Out</a>
									</div>
								</div>
							</li>
						</ul>
						<!-- Header actions end -->

					</div>
				</div>
				<!-- Row end -->

			</div>
		</header>
		<!-- Header end -->

		<!-- *************
			************ Header section end *************
		************* -->


		<div class="container-fluid">


		<div class="container-fluid">


<!-- navigation start -->

			<nav class="navbar navbar-expand-lg custom-navbar">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#royalHospitalsNavbar"
					aria-controls="royalHospitalsNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</button>
				<div class="collapse navbar-collapse" id="royalHospitalsNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php">
								<i class="icon-devices_other nav-icon"  aria-hidden="true"></i>
								Dashboard
							</a>
						</li>
						

                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="doctoRs" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-local_hospital nav-icon"  aria-hidden="true"></i>
								Hospital
							</a>
							
							<ul class="dropdown-menu" aria-labelledby="doctoRs">

							<li>
							<a class="dropdown-item" href="Hospital_list.php">Hospital List</a>
						    </li>

							<li>
							<a class="dropdown-item" href="Hospital.php">Manage Hospital</a>
							</li>

							</ul>
						</li>


						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="doctoRs" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
                                <i class="icon-user nav-icon"></i>
								Childrens
							</a>
							
							<ul class="dropdown-menu" aria-labelledby="doctoRs">

							<li>
							<a class="dropdown-item" href="childrens.php">Childrens List</a>
						    </li>

							<li>
							<a class="dropdown-item" href="child_appointments.php">Childrens Appointments</a>
							</li>

                            <li>
							<a class="dropdown-item" href="child_report.php">Childrens Reports</a>
							</li>

							</ul>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="doctoRs" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
                                <i class="icon-add_circle nav-icon"  aria-hidden="true"></i>
								Vaccines
							</a>
							
							<ul class="dropdown-menu" aria-labelledby="doctoRs">

							<li>
							<a class="dropdown-item" href="vaccine.php">Vaccines List</a>
						    </li>

							</ul>
						</li>

				</div>
			</nav>

<!-- navigation end -->


			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">


				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						
						<li class="breadcrumb-item active">Update Your Profile</li>
					</ol>
					<div class="site-award">
						<img src="img/award.svg" alt="Hospital Dashboards"> Best Hospital
					</div>
				</div>
				<!-- Page header end -->

				<!-- Content wrapper start -->
				<div class="content-wrapper">

<br><br>
					<div class="row gutters justify-content-center">
						<div class="col-lg-4 col-md-5 col-sm-6 col-12">
							<form  method="post" enctype="multipart/form-data" autocomplete="off" class="text-left">
								<div class="card m-0">
									<div class="card-header">
										<div class="card-title">Update Profile</div>
									</div>
									<div class="card-body">
										<div class="form-group">
										<label for="name" style="float: left;">Emter Your Name</label>
											<input type="text" class="form-control" id="name" name="name"  placeholder="Name" required="">
										</div>

										<div class="form-group">
										<label for="username" style="float: left;">Enter Your Username</label>
											<input type="text" class="form-control" id="username" name="username" placeholder="UserName" required="">
										</div>

										<div class="form-group">
										<label for="email" style="float: left;">Enter Your Email</label>
											<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
										</div>
										<div class="form-group">
										<label for="password" style="float: left;">Enter your Password</label>
											<input type="password" class="form-control" id="password" name="password" placeholder="Your Password"
												required="">
										</div>


										<button type="submit" id="submit" name="submit" class="btn btn-primary float-right">Apply Changes</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				<!-- Content wrapper end -->
				<?php
                        if(isset($_POST['submit']))
                        {
                            $name = $_POST['name'];
							$username = $_POST['username'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $query = "UPDATE tbl_admin SET name='$name',username='$username',email='$email',password='$password' WHERE id=$_SESSION[admin_session]";
                            $result = mysqli_query($connection,$query);
                            if($result)
                            {
                                echo 
                                "<script>
                                    alert('Profile Updated Successful');
                                    window.location.href='profile.php';
                                </script>";
                            }
                        }
                    ?>


			</div>
			<!-- *************
				************ Main container end *************
			************* -->


			<footer class="main-footer"></footer>


		</div>

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

</html>