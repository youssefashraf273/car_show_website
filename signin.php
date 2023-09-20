<?php 
include('config.php');
session_start();
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
    <link rel="stylesheet" href="css/navfooter.css">
    <title>Sign In</title>
</head>

<body>
<?php 
                $passerr='';
                $emailerr='';

                        if(isset($_POST['btn'])){
                            header('location: signup.php');
                        } 
                        else{
                            
                        if(isset($_POST['submit'])){
                            $email=htmlspecialchars($_POST['em']);
                            $pass=htmlspecialchars($_POST['password']);
                            
                            $hat="SELECT `id` ,`email` , `pass` ,`role` FROM `visitors` where `email`='$email' ";
                            $done=mysqli_query($link,$hat);
                            $row=mysqli_num_rows($done);
                            $qq=mysqli_fetch_assoc($done);
                            
                        if($row==1){
                                if(password_verify($pass,$qq['pass'])){
                                        if($qq['role'] == 'admin'){
                                            $_SESSION['adlog']=true;
                                            header('location: adminpanel.php');
                                            }
                                        else{
                                            $_SESSION['ulogin']=$email;
                                            header('location: cars.php');
                                            }
                                        }  
                                else{
                                    $passerr='wrong password';
                                    }
                                    }
                        else{
                        $emailerr='user not found, sign up first ??';
                            }
                    }
            }?>

    <section class="sign-container">
        <img src="imgss/car4.jpg" alt="">
        <div class="sign-layer">
            <div class="signbox">
                <h2>Login</h2>
                <form method="post">

                    <div class="inputbox">
                    <?php if(!empty($emailerr)){echo($emailerr);} ?>
                        <input type="email" name="em" >
                        <label for="em">Email</label>
                    </div>
                    <div class="inputbox">
                        <?php if(!empty($passerr)){echo($passerr);} ?>
                        <input type="password" name="password">
                        <label for="password">Password</label>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="Login">
                        </div>
                    <div>
                        <input type="submit" name="btn" value="Sign up first ?">
                    </div>
                        
                    
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
