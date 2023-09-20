<?php
include('config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Car</title>
</head>
<body>
    <form method="post" >
        <?php
        $cid=$_GET['cid'];
        $qq="SELECT * FROM `cars` where `id`= '$cid' ";
        $ss=mysqli_query($link,$qq);
        foreach($ss as $rr){}?>
                <input type="text" name="upname"  value="<?php echo($rr['name'])?>">
                <input type="text" name="upimg"  value="<?php echo($rr['images'])?>">
                <input type="text" name="updesc"  value="<?php echo($rr['description'])?>">
                <input type="text" name="upprice" value="<?php echo($rr['price'])?>">
                <input type="text" name="upcateg" value="<?php echo($rr['category'])?>">
                <input type="submit"  name="update" value="Update">
                </form>

            <?php 
            
            if(isset($_POST['update'])){
                $name=htmlspecialchars($_POST['upname']);
                $description=htmlspecialchars($_POST['updesc']);
                $price=htmlspecialchars($_POST['upprice']);
                $category=htmlspecialchars($_POST['upcateg']);
                $img=htmlspecialchars($_POST['upimg']);
    $ee="UPDATE `cars` SET `name`='$name',`description`='$description',`price`='$price',
    `category`='$category',`images`='$img' where `id`='$cid'";
    $dd=mysqli_query($link,$ee);
    header('location: viewcars.php');
            }?>
    </body>
</html>