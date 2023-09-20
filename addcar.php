<?php
include('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Car</title>
</head>
<body>
    <div class="container">
    
    <?php
        $namer='';
                    if(isset($_POST['submit'])){
                        $name=htmlspecialchars($_POST['cname']);
                        $description=htmlspecialchars($_POST['cdescription']);
                        $price=htmlspecialchars($_POST['cprice']);
                        $category=htmlspecialchars($_POST['ccategory']);
                        $ph=$_FILES['photo'];

$hat="SELECT `name` from `cars` where `name` = '$name' " ;                  
$dd=mysqli_query($link,$hat);                   
$gg=mysqli_num_rows($dd);                    
$arr=mysqli_fetch_assoc($dd);

if($gg==0){

    for($i=0; $i<count($ph['name']); $i++){
        $path='imgss/'.$ph['name'][$i];
        $tmp=$ph['tmp_name'][$i];
        $take="INSERT INTO `cars` (`name`,`description`,`price`,`category`,`images`) values
        ('$name','$description','$price','$category','$path')";
        $done=mysqli_query($link,$take);
        move_uploaded_file($tmp,$path);
        }
        echo('new car is inserted successfully');
}
else
{
$namer='this name of that car is already inserted before , please try another name';
}
}

if(isset($_POST['btn'])){
$id=htmlspecialchars($_POST['id']);
$img=$_FILES['img'];

for($i=0 ; $i<count($img['name']) ; $i++){
$folder='imgss/'.$img['name'][$i];
$tmpname=$img['tmp_name'][$i];

$qq="INSERT INTO `carlink` (`id`,`images`) VALUES ('$id','$folder')";
$dd=mysqli_query($link,$qq);
move_uploaded_file($tmpname,$folder);
header('location: cars.php');
}
}
?>

        <form method="POST" enctype="multipart/form-data">
            <?php ?>
                    <?php if(!empty($namer)){echo($namer); } ?>
                    <input type="text" placeholder="car Name" name="cname" value="<?php if (!empty($name)){echo($name);}?>" required>
                    <input type="text" placeholder="car Description" name="cdescription" value="<?php if (!empty($description)){echo($description);}?>" required >
                    <input type="text" placeholder="car Price" name="cprice" value="<?php if (!empty($price)){echo($price);}?>" required>
                    <input type="text" placeholder="car category" name="ccategory" value="<?php if(!empty($category)){echo($category);}?>" required>
                    <input type="file" name="photo[]"  multiple>
                    <input type="submit" name="submit" value="Add car" >
            </form>
<div>
        <form method="POSt" enctype="multipart/form-data">
            <input type="text" placeholder="id" name="id">
            <input type="file" name="img[]" multiple>
            <input type="submit" name="btn" value="Add multiple images" >
        </form>
</div>
        </div>
    </body>
</html>

