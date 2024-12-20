<?php
    include("connection.php");
    $query = "UPDATE tbl_tresult SET result='Done' WHERE id=$_GET[id]";
    mysqli_query($connection,$query);
    echo "<script>window.location.href='child_report.php'</script>";
?>