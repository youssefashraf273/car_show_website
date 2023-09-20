<?php 
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Users</title>
</head>
<body>
<?php  
$upu=$_GET['uid'];
$tt="SELECT * FROM `visitors` where `id`='$upu'";
$aa=mysqli_query($link,$tt);
foreach($aa as $upuser){?>
            <form method="post">
                <input type="text" name="upname" id="" value="<?php echo($upuser['name'])?>">
                <input type="text" name="upphone" id="" value="<?php echo($upuser['phone'])?>">
                <input type="text" name="urole" id="" value="<?php echo($upuser['role'])?>">
                <input type="submit" value="Update" name="update">
            </form>
    <?php }
?>
<?php 
if(isset($_POST['update'])){
$name=htmlspecialchars($_POST['upname']);
$phone=htmlspecialchars($_POST['upphone']);
$role=htmlspecialchars($_POST['urole']);
$quer="UPDATE `visitors` SET `name`='$name' , `phone`='$phone' , `role`='$role 'where `id` = $upu";
$done=mysqli_query($link,$quer);
header('location: viewusers.php');
}
?>
        </body>
</html>