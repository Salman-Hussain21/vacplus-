<?php
    include("connection.php");
    session_start();
    if(!isset($_SESSION['admin_session']))
    {
        echo "<script>window.location.href='login.php'</script>";
    }


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
						<li class="breadcrumb-item active">Add Hospital Details</li>
					</ol>
					<div class="site-award">
						<img src="img/award.svg" alt="Hospital Dashboards"> Best Hospital
					</div>
				</div>
				<!-- Page header end -->

				<!-- Content wrapper start -->
				<div class="content-wrapper">

					<!-- Row start -->
<center>

						<div class="col-lg-6 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Enter Hospital Details</div>
								</div>
								<div class="card-body">
									<div class="row gutters">
										<div class=col-sm-6 col-12">
											<div class="form-group" method="post" enctype="multipart/form-data" autocomplete="off">
                                                <form  method="post" enctype="multipart/form-data" autocomplete="off" class="text-left">
												<label for="fullName" style="float: left;">Hospital Name</label>
												<input type="text" class="form-control" id="fullName" placeholder="ABC Hospital" name="name" required="" class="">
											</div>
										</div>
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="inputEmail" style="float: left;">Email</label>
												<input type="email" class="form-control" id="inputEmail" placeholder="example: hospital@gmail.com" name="email" required="">
											</div>
										</div>
                                        <div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="password" style="float: left;">Password</label>
												<input type="Password" class="form-control" id="password" placeholder="Enter Your Password" name="password" required="" >
											</div>
										</div>
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="education" style="float: left;">Contact Number</label>
												<input type="text" class="form-control" id="education" placeholder="+92 123456789" name="phone" required="" >
											</div>
										</div>
                                        <div class=col-sm-6 col-12">
											<div class="form-group">
                                            <label for="city" style="float: left;">Select Any City</label>
                                            <select name="city" class="form-control">
                                          <?php 
                            $query = "SELECT * FROM tbl_city";
                            $result = mysqli_query($connection,$query);
                            foreach($result as $row)
                            {
                                echo "<option value='$row[id]'>$row[name]</option>";
                            }
                        ?>

                                          </select>
											</div>
										</div>
										<div class=col-sm-6 col-12>
											<div class="form-group">
												<label for="addreSs" style="float: left;">Full Address</label>
												<input type="text" class="form-control" id="addreSs" rows="1" placeholder="Current Address" name="address" required="" >
											</div>
										</div>

                                        <div class=col-sm-6 col-12>
                                        <div class="form-group">
                                            <label for="status" style="float: left;">Account Status</label>
                                            <select name="status" class="form-control">
                                           <option>activate</option>
                                             <option>deactivate</option>

                                          </select>
											</div>

										</div>
										<div class="col-sm-12">
											<div class="text-right">
												<button class="btn btn-primary" name="btnadd">Add Hospital</button>
											</div>
										</div>
                                        </form>
									</div>
								</div>
                                        </div>
						</div>
						</div>
					</div>

                    <?php
                    if(isset($_POST['btnadd']))
                    {
                        $name = $_POST['name'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $address = $_POST['address'];
                        $city = $_POST['city'];
                        $status = $_POST['status'];
                        $query = "INSERT into tbl_hospital (name,contact,cid,email,password,address,status) VALUES('$name','$phone','$city','$email','$password','$address','$status')";
                        $result = mysqli_query($connection,$query);
                        if($result)
                        {
                            echo 
                            "<script>
                                alert('Hospital Added Successfully');
                                window.location.href='hospital.php'
                            </script>";
                        }
                    }
                ?>
					<!-- Row end -->

				</div>
				<!-- Content wrapper end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->
				</center>
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