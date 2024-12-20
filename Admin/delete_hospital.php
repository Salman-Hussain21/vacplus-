<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vaccination_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


    $sql = "DELETE FROM tbl_hospital WHERE id=$_GET[id]";

    if ($conn->query($sql) === TRUE ) {
        echo 
        "<script>
        alert('Hospital Removed Successfully');
        window.location.href='hospital.php'
         </script>";
    } else {
        echo 
        "<script>
        alert('Error');
        window.location.href='hospital.php'
         </script>";
    }

    
    $conn->close();
    ?>


