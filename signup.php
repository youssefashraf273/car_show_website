
<?php 
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/sign.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baumans&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>

<body>

    <section class="sign-container">
        <img src="imgss/car4.jpg" alt="">
        <div class="sign-layer">
            <div class="signbox">
                <h2>Sign Up</h2>
                <form action="signup.php" method="post">
<?php 
$wrcpass='' ; $wremail='' ;

if(isset($_POST['submit'])){
$name=htmlspecialchars($_POST['username']);
$pass=htmlspecialchars($_POST['password']);
$cpass=htmlspecialchars($_POST['confirm']);
$email=htmlspecialchars($_POST['email']);
$phone=htmlspecialchars($_POST['mobile']);


        if($pass==$cpass){
            $qq="SELECT `email` FROM `visitors` where `email`= '$email' ";
            $done=mysqli_query($link,$qq);
            $row=mysqli_num_rows($done);
                if($row==0){
                    
                    $hashedpass=password_hash($pass,PASSWORD_BCRYPT);
                    $quer="INSERT INTO `visitors` (`name`,`pass`,`phone`,`email`,`role`) VALUES ('$name','$hashedpass','$phone','$email','user') ";
                    $did=mysqli_query($link,$quer);
                    
                    header('location: index.php');
                }
                else{
                    $wremail='sorry this email is inserted before, please use another one';
                    }
                        }
        else{
            $wrcpass='password and its confirmation is incorrect';
        }
}
?>
                    <div class="inputbox">
                        <input type="text" name="username" required value="">
                        <label for="username">Username</label>
                    
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <?php if(!empty($wrcpass)){echo($wrcpass);}?>
                    <div class="inputbox">
                        <input type="password" name="confirm" required>
                        <label for="confirm">Confirm Password</label>

                    </div>
                    <?php if(!empty($wremail)){echo($wremail);}?>
                    <div class="inputbox">
                        <input type="email" name="email" required value="">
                        <label for="email">Email</label>

                    </div>
                    <div class="inputbox">
                        <input type="number" name="mobile" required value="">
                        <label for="mobile">Mobile Number</label>

                    </div>
                    <input type="submit" name="submit" value="Sign Up">
                </form>
            </div>
        </div>

    </section>

</body>

</html>