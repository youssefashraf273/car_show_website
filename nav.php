<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navfooter.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/universal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baumans&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <nav>
            <a class="logo">Logo</a>
            <div class="toggle-btn">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <div class="nav-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php #about">About</a></li>
                    <li><a href="cars.php">Cars</a></li>
                    <li><a href="index.php #contact">Contact</a></li>
    <?php
        if(!empty($_SESSION['ulogin'])){?>
        <li><a  href="profile.php?un=<?php echo($_SESSION['ulogin']);?>">Profile</a></li>
        <li><a  href="userlogout.php">log out</a></li>

        <?php } 
        else{?>
        
        <li><a class="signin" href="signin.php">Sign In</a></li>
        <li><a class="signup" href="signup.php">Sign Up</a></li>
        <?php }?>
                </ul> 
            </div>
        </nav>
        
    </header>    

</body>


</html>
