<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For Web Developer</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <img src="../img/website.gif" alt="">
            <h2 class="center">Welcome</h2>
            <p class="center">Please Fill This Form very carefully It Can Change Your Life</p>
            <button class="btn center">Check Form</button>
        </div>
        <div class="right">
            <h2 class="center">Apply For Web Developer Post</h2>
            <form action="" method="POST">
            
            <!-- PHP UPDATE CODE  -->
            
            <?php include 'connection.php'; 

$idupdate = $_GET['id'];
$selectquery = " select * from jobregistration where id= {$idupdate} ";
$res1 = mysqli_query($con,$selectquery);
$res = mysqli_fetch_array($res1);

if (isset($_POST['submit'])) {
    $ids = $_GET['id'];
    $name = htmlspecialchars( $_POST['name']);
    $qulification = htmlspecialchars( $_POST['qulification']);
    $mobile = htmlspecialchars( $_POST['mobile']);
    $email = htmlspecialchars( $_POST['email']);
    $refer = htmlspecialchars( $_POST['refer']);
    $jobpost = htmlspecialchars( $_POST['jobpost']);
    
    $query = " update jobregistration set id = $ids ,name='$name',degree='$qulification',mobile='$mobile',email='$email',refer='$refer',jobpost='$jobpost' where id = $ids ";
    $resUpdate = mysqli_query($con,$query);
    if($resUpdate){
        ?>
        <script>alert("Your record Updated Sucessfully")</script>
        <?php 
    }else{?>
        <script>alert("Your record has been Not Updated ")</script>
        <?php
    }
} 

?>
                <input type="text" placeholder="Enter Your Name *" class="form-field" name="name" required value="<?php echo $res['name']; ?>">
                <input type="text" placeholder="Enter Your Qualification *" class="form-field" name="qulification" required value="<?php echo $res['degree']; ?>">
                <input type="text" placeholder="Enter Your Mobile Number *" class="form-field" name="mobile" required value="<?php echo $res['mobile']; ?>">
                <input type="text" placeholder="Enter Your Email *" class="form-field" name="email" required value="<?php echo $res['email']; ?>">
                <input type="text" placeholder="Any Reference *" class="form-field" name="refer" required value="<?php echo $res['refer']; ?>">
                <input type="text" class="form-field" name="jobpost" value="<?php echo $res['jobpost']; ?>">
                <button class="btn center" type="submit" name="submit">Update</button>
            </form>

        </div>
    </div>
</body>

</html>
