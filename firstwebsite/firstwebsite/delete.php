<?php 

    include "connection.php";
    $idd = $_GET['idth'];
    $deletequery = " delete from jobregistration where id =$idd ";
    mysqli_query($con,$deletequery);
    header('location:display.php');
?>