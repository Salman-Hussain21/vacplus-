<?php
    include("connection.php");
    session_start();
    if(!isset($_SESSION['hospital_session']))
    {
        echo "<script>window.location.href='login.php'</script>";
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
		<title>Hospital Admin | Reports</title>


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


			<div class="main-container">


				<!-- Page header start -->
				
				<div class="page-header">
					
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">Childrens Reports</li>
					</ol>
					<div class="site-award">
						<img src="img/award.svg" alt="Hospital Dashboards"> Best Hospital
					</div>
				</div>
				
				<!-- Page header end -->

				<!-- Content wrapper start -->
				<div class="content-wrapper">
					<!-- Row start -->
					<div class="table-container">
								

                    <div class="table-responsive">
					<table id="highlightRowColumn" class="table">
                    <thead>
					<th>Children Name</th>
                            <th>Hospital Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Vaccine</th>
                            <th>Vaccination Status</th>
                            <th>Update Status</th>
                    </thead>
                    <tbody>


					<?php
                            $query =  "SELECT 
						tbl_patient.name as 'pname', 
						tbl_hospital.name as 'hname', 
						tbl_vaccine.name as 'vname', 
						tbl_tresult.* 
					FROM tbl_tresult 
					INNER JOIN tbl_patient ON tbl_tresult.p_id = tbl_patient.id 
					INNER JOIN tbl_hospital ON tbl_tresult.h_id = tbl_hospital.id 
					INNER JOIN tbl_vaccine ON tbl_tresult.v_id = tbl_vaccine.id 
					INNER JOIN tbl_appointment ON tbl_tresult.a_id = tbl_appointment.id 
					WHERE tbl_tresult.h_id = $_SESSION[hospital_session] 
					AND tbl_appointment.status = 'approve'";
                            $result = mysqli_query($connection,$query);
                            foreach($result as $row)
                            {
                                echo 
                                "<tr>
                                    <td>
									$row[pname]</td>
                                    <td>$row[hname]</td>
                                    <td>$row[date]</td>
                                    <td>$row[time]</td>
                                    <td>$row[vname]</td>
                                    <td>$row[result]</td>

									<td>";
									if($row['result']=="Pending")
									{
										echo "<a href='v_done.php?id=$row[id]' class='btn btn-success'>Done</a>"; 
									}
									else
									{
										echo "<a href='v_pending.php?id=$row[id]' class='btn btn-danger'>Pending</a> &nbsp;"; 
									}
								"</td>

								<td>";
								if($row['result']=="")
								{
									echo "<a href='v_done.php?id=$row[id]' class='btn btn-success'>Done</a>"; echo "<br>"; 
								}
							"</td>
                                </tr>";
                            }

                        ?>
                    </tbody>
                </table>
			</div>
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