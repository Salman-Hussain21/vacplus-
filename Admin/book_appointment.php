<?php
    include("connection.php");
    $query = "UPDATE tbl_appointment SET status='Approve' WHERE id=$_GET[id]";
    mysqli_query($connection,$query);
    echo "<script>window.location.href='child_appointments.php'</script>";
?>