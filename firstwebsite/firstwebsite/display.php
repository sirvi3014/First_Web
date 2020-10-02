<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/display.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Display Data</title>
</head>
<body>
    <div class="container">
        <h1>The Details Of Candidate For Web Developer Post</h1>
        <div class="tdiv">

            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Degree</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Reference</th>
                    <th>post</th>
                    <th colspan="2">operation</th>
                </tr>
                <?php
                    include 'connection.php';
                    $selectQuery = " select * from jobregistration "; 
                    $query = mysqli_query($con,$selectQuery);
                    while($res = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['name']; ?></td>
                    <td><?php echo $res['degree']; ?></td>
                    <td><?php echo $res['mobile']; ?></td>
                    <td class="email"><span><?php echo $res['email']; ?></span></td>
                    <td><?php echo $res['refer']; ?></td>
                    <td><?php echo $res['jobpost']; ?></td>
                    <td><a href="update.php?id=<?php echo $res['id']; ?>"><i class="fa fa-edit" aria-hidden="true" id="edit"></a></i></td>
                    <td><a href="delete.php?idth=<?php echo $res['id']; ?>"><i class="fa fa-trash" aria-hidden="true" id="trash"></a></i></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>