<?php 

    $username = "root";
    $password = "";
    $server = "localhost";
    $database = "firstwebproject";

    $con = mysqli_connect($server,$username,$password,$database);
    if($con){
     ?>
    <script>alert("Connection Establish");</script>
    <?php }

    else{
        ?>
    <script>alert("Connection Loss");</script>
    <?php }
?>


