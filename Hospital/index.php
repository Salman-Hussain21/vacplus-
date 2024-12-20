<?php
include("connection.php");
session_start();

if(!isset($_SESSION['hospital_session'])) {
    header('Location: login.php');
    exit;
}
?>

<!doctype html>
<html lang="en">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap Dashboards">
		<meta name="author" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="img/favicon.svg" />

		<!-- Title -->
		<title>Dashboard</title>


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

		<!-- Loading starts -->
		<div id="loading-wrapper">
			<div class="spinner-border" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Loading ends -->

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
                                <i class="icon-user nav-icon"></i>
								Childrens
							</a>
							
							<ul class="dropdown-menu" aria-labelledby="doctoRs">


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
							<a class="dropdown-item" href="vaccine.php">Update Vaccines</a>
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
						<li class="breadcrumb-item active">Hospital Dashboard</li>
					</ol>
					<div class="site-award">
						<img src="img/award.svg" alt="Hospital Dashboards"> Best Hospital
					</div>
				</div>
				<!-- Page header end -->

				<!-- Content wrapper start -->
				<div class="content-wrapper">

					<!-- Row start -->
	
					<div class="row gutters">
					
					</div>
					<!-- Row end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-lg-6 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Patients</div>
								</div>
								<div class="card-body">
									<div id="hospital-line-column-graph"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Treatment Type</div>
								</div>
								<div class="card-body">
									<div id="hospital-line-area-graph"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Patients by Age</div>
								</div>
								<div class="card-body">
									<div id="hospital-patients-by-age"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-lg-4 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Top Doctors</div>
								</div>
								<div class="card-body">
									<div class="top-doctors-container">
										<div class="top-doctor">
											<img src="img/user2.png" class="avatar" alt="Best Admin Dashboard">
											<div class="doctor-details">
												<h6>Dr. Clive Williams</h6>
												<div class="doctor-score">
													<div class="progress">
														<div class="progress-bar bg-blue" role="progressbar" style="width: 87%" aria-valuenow="87"
															aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="points">
														<div class="left">Rank #1</div>
														<div class="right">9,800 Ratings</div>
													</div>
												</div>
											</div>
										</div>
										<div class="top-doctor">
											<img src="img/user3.png" class="avatar" alt="Best Admin Dashboard">
											<div class="doctor-details">
												<h6>Dr. Levsmia</h6>
												<div class="doctor-score">
													<div class="progress">
														<div class="progress-bar bg-blue" role="progressbar" style="width: 65%" aria-valuenow="65"
															aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="points">
														<div class="left">Rank #2</div>
														<div class="right">7,500 Ratings</div>
													</div>
												</div>
											</div>
										</div>
										<div class="top-doctor">
											<img src="img/user14.png" class="avatar" alt="Best Admin Dashboard">
											<div class="doctor-details">
												<h6>Dr. Emma George</h6>
												<div class="doctor-score">
													<div class="progress">
														<div class="progress-bar bg-pink" role="progressbar" style="width: 42%" aria-valuenow="42"
															aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="points">
														<div class="left">Rank #3</div>
														<div class="right">4,200 Ratings</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Messages</div>
								</div>
								<div class="card-body">
									<ul class="custom-messages">
										<li class="clearfix">
											<div class="customer">TB</div>
											<div class="delivery-details">
												<span class="badge">Appointment</span>
												<h5>Tom Bartholet</h5>
												<p>Your appointment with Dr. Kelly is confirmed at 04:30 PM and your reference ID is
													<b>TK556753</b>.
												</p>
											</div>
										</li>
										<li class="clearfix">
											<div class="customer secondary">DC</div>
											<div class="delivery-details">
												<span class="badge">Cancelled</span>
												<h5>Dale Colorado</h5>
												<p>We are pleased to inform that the following ticket no.<b>TK217887</b> have been cancelled.
												</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Overall Ratings</div>
								</div>
								<div class="card-body">
									<div class="hospital-ratings">
										<div class="total-ratings">
											<h2>4.5</h2>
											<div class="rating-stars">
												<div id="rate1"></div>
											</div>
										</div>
										<div class="ratings-list-container">
											<div class="ratings-list">
												<div class="rating-level">5.0</div>
												<div class="rating-stars">
													<div class="rateA"></div>
												</div>
												<div class="total">
													8,500 <span class="percentage">65%</span>
												</div>
											</div>
											<div class="ratings-list">
												<div class="rating-level">4.0</div>
												<div class="rating-stars">
													<div class="rateB"></div>
												</div>
												<div class="total">
													3,500 <span class="percentage">20%</span>
												</div>
											</div>
											<div class="ratings-list">
												<div class="rating-level">3.0</div>
												<div class="rating-stars">
													<div class="rateC"></div>
												</div>
												<div class="total">
													1,400 <span class="percentage">15%</span>
												</div>
											</div>
											<div class="ratings-list">
												<div class="rating-level">2.0</div>
												<div class="rating-stars">
													<div class="rateD"></div>
												</div>
												<div class="total">
													300 <span class="percentage">05%</span>
												</div>
											</div>
											<div class="ratings-list">
												<div class="rating-level">1.0</div>
												<div class="rating-stars">
													<div class="rateE"></div>
												</div>
												<div class="total">
													75 <span class="percentage">03%</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

				</div>
				<!-- Content wrapper end -->


			</div>
			<!-- *************
				************ Main container end *************
			************* -->

			<footer class="main-footer">© Bootstrap Gallery 2023</footer>

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

		<!-- Apex Charts -->
		<script src="vendor/apex/apexcharts.min.js"></script>
		<script src="vendor/apex/examples/mixed/hospital-line-column-graph.js"></script>
		<script src="vendor/apex/examples/mixed/hospital-line-area-graph.js"></script>
		<script src="vendor/apex/examples/bar/hospital-patients-by-age.js"></script>

		<!-- Rating JS -->
		<script src="vendor/rating/raty.js"></script>
		<script src="vendor/rating/raty-custom.js"></script>

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

</html>