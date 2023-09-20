<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>
</head>
<body>

<?php 
$ee=$_GET['un'];
$qq="SELECT * FROM `visitors` where `email` = '$ee' ";
$done=mysqli_query($link,$qq);

foreach($done as $usp){?>
<form method="POST">
<input type="text" name="id" value="<?php echo ($usp['id']);?>">
<input type="text" name="name" value="<?php echo ($usp['name']);?>">
<input type="password" name="pass" value="<?php echo ($usp['pass']);?>">
<input type="email" name="email" value="<?php echo ($usp['email']);?>">
<input type="text" name="ph" value="<?php echo ($usp['phone']);?>">
<input type="submit" name="update" value="update">
</form>
<?php }?>

<?php 
if(isset($_POST['update'])){
$name=htmlspecialchars($_POST['name']);
$email=htmlspecialchars($_POST['email']);
$phone=htmlspecialchars($_POST['ph']);

$pass=htmlspecialchars($_POST['pass']);
$hashedpass=password_hash($pass,PASSWORD_BCRYPT);

$up="UPDATE `visitors` SET `name`='$name',`email`='$email',`pass`='$hashedpass',`phone`='$phone' where `email`='$ee'";
$did=mysqli_query($link,$up);
header('location: index.php');
}
?>
</body>

</html>