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
            <img src="img/website.gif" alt="">
            <h2 class="center">Welcome</h2>
            <p class="center">Please Fill This Form very carefully It Can Change Your Life</p>
            <a href="display.php"><button class="btn center">Check Form</button></a>
        </div>
        <div class="right">
            <h2 class="center">Apply For Web Developer Post</h2>
            <form action="index.php" method="POST">

                <input type="text" placeholder="Enter Your Name *" class="form-field" name="name" required>
                <input type="text" placeholder="Enter Your Qualification *" class="form-field" name="qulification" required>
                <input type="text" placeholder="Enter Your Mobile Number *" class="form-field" name="mobile" required>
                <input type="text" placeholder="Enter Your Email *" class="form-field" name="email" required>
                <input type="text" placeholder="Any Reference *" class="form-field" name="refer" required>
                <input type="text" value="Web Devloper" class="form-field" name="jobpost">
                <button class="btn center" type="submit" name="submit">Register</button>
            </form>

        </div>
    </div>
</body>

</html>

<?php include 'connection.php'; 

    if (isset($_POST['submit'])) {
        $name = htmlspecialchars( $_POST['name']);
        $qulification = htmlspecialchars( $_POST['qulification']);
        $mobile = htmlspecialchars( $_POST['mobile']);
        $email = htmlspecialchars( $_POST['email']);
        $refer = htmlspecialchars( $_POST['refer']);
        $jobpost = htmlspecialchars( $_POST['jobpost']);
        
        $query = " insert into jobregistration(name,degree,mobile,email,refer,jobpost) values('$name','$qulification','$mobile','$email','$refer','$jobpost') ";
        $res = mysqli_query($con,$query);
        if($res){
            ?>
            <script>alert("Your record Added Sucessfully")</script>
            <?php 
        }else{?>
            <script>alert("Your record has been Not Stored ")</script>
        <?php
        }
    } 
?>