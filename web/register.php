<?php
    include("connection.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets2/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets2/img/favicon.png">
  <title>
    Hospital | Register
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets2/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets2/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets2/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets2/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
            MEDIPLUS
          </a>

            <a style="float: right;" class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
              PATIENT REGISTERATION PANEL
            </a>
  </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Register Yourself</h3>
                  <p class="mb-0">Enter your details to register</p>
                </div>
                <div class="card-body">
                  <form role="form" method="POST">

                  <label>Name</label>
                  <div class="mb-3">
                  <input type="text"  class="form-control"  placeholder="John joe" name="name" required>
                  </div>
                  
                    <label>Email</label>
                    
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="abc@gmail.com" aria-label="Email" aria-describedby="email-addon" name="email" required>
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Your Password" aria-label="Password" aria-describedby="password-addon" name="password"  length="8" required >
                    </div>

                    <label>Contact Number</label>
                    
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="+92 123456789" aria-label="Email" aria-describedby="email-addon" name="contact" required>
                    </div>

                    <label>Address</label>
                    
                    <div class="mb-3">
                    <textarea class="form-control" id="addreSs" rows="1" placeholder="Current Address" name="address" required></textarea>
                    </div>

                    <label for="city" style="float: left;">Select Any City</label>
                    <select name="city" class="form-control">
                    <?php 
                    $query = "SELECT * FROM tbl_city";
                    $result = mysqli_query($connection,$query);
                    foreach ($result as $row1) {
                    echo "<option value='".$row1['id']."'";

                    echo ">".$row1['name']."</option>";
                     }
                    ?>
                    </select>

                    <br>

           <label for="gender" style="float: left;">Gender</label>
          <select name="gender" class="form-control ">
            <option hidden>Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select><br>

                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" name="btnregister">Register</button>
                    </div>
                  </form>

<!-- php code to signin -->
<?php
                if(isset($_POST['btnregister']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $contact = $_POST['contact'];
                    $address = $_POST['address'];
                    $city = $_POST['city'];
                    $query = "INSERT INTO tbl_patient(name,email,password,contact,address,cid,gender) VALUES('$name','$email','$password','$contact','$address','$city','$gender')";
                    $result = mysqli_query($connection,$query);
                    if($result)
                    {
                        echo 
                        "<script>
                            alert('Registration Successful');
                            window.location.href='login.php';
                        </script>";
                    }
                }
            ?>

<!-- php code ends -->

                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Already Registered?
                    <a href="login.php" class="text-info text-gradient font-weight-bold">Sign In</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('https://www.legalexaminer.com/wp-content/claris-images-uploads/shutterstock_477151726@large.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
      
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-facebook"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest"></span>
          </a>

        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
         <script>
              document.write(new Date().getFullYear())
            </script> 
            Project By Salman & Wasi
          </p>
        </div>
      </div>
    </div>
  </footer>

 


</body>

</html>