<?php
    include("connection.php");
    $query = "UPDATE tbl_vaccine hospital SET status='N/A' WHERE id=$_GET[id]";
    mysqli_query($connection,$query);
    echo "<script>window.location.href='vaccine.php'</script>";
?>