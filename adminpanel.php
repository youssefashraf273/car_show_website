<?php
session_start();
include('config.php'); 

if(!empty($_SESSION['adlog'])){?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h2><header>This is admin panel</header></h2>
        <div class="page-container">
            <div class="add">
                <a href="addcar.php">Add New car</a>
            </div>
            <div class="view">
                <a href="viewmsgs.php">View Messages</a>
                <a href="viewusers.php">View users</a>
                <a href="viewcars.php">View cars</a>
            </div>
        </div>
    </body>
</html>
<?php }
else{ ?>
<h2> please login as admin first </h2>
<?php }?>
