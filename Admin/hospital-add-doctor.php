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
		<title>Medical Admin Template - Add Doctor</title>


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
										<a href="profile.php"><i class="icon-user1"></i> My Profile</a>

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
						<li class="breadcrumb-item">Doctors</li>
						<li class="breadcrumb-item active">Add Doctor Details</li>
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
						<div class="col-lg-3 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="doctor-profile">
										<div class="doctor-thumb">
											<img src="img/user21.png" alt="UI Kits">
										</div>
										<div class="input-group mb-3">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="changeProfile"
													aria-describedby="changeProfile">
												<label class="custom-file-label" for="changeProfile">Update Image</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Enter Doctor Details</div>
								</div>
								<div class="card-body">
									<div class="row gutters">
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="fullName">Full Name</label>
												<input type="text" class="form-control" id="fullName" placeholder="Srinu">
											</div>
										</div>
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="inputEmail">Email</label>
												<input type="email" class="form-control" id="inputEmail" placeholder="doctor@bm.com">
											</div>
										</div>
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="education">Qualification</label>
												<input type="text" class="form-control" id="education" placeholder="Qualification">
											</div>
										</div>
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="inputSpeciality">Speciality</label>
												<input type="text" class="form-control" id="inputSpeciality" placeholder="Speciality">
											</div>
										</div>
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="addreSs">Full Address</label>
												<textarea class="form-control" id="addreSs" rows="3" placeholder="Current Address"></textarea>
											</div>
										</div>
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="biO">Bio</label>
												<textarea class="form-control" id="biO" rows="3" placeholder="Description"></textarea>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="text-right">
												<button class="btn btn-primary">Create Profile</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Create Account</div>
								</div>
								<div class="card-body">
									<div class="row gutters">
										<div class="col-sm-12">
											<div class="form-group">
												<label for="userName">User Name</label>
												<input type="text" class="form-control" id="userName" placeholder="User Name">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label for="password">Password</label>
												<input type="password" class="form-control" id="password" placeholder="Password">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label for="rePassword">Re-enter Password</label>
												<input type="password" class="form-control" id="rePassword" placeholder="New Password">
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

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

</html>