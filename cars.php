<?php 
include('nav.php');
include('config.php');
if(empty($_SESSION['ulogin'])){
header('location: signin.php');
}
else{?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/navfooter.css">
    <link rel="stylesheet" href="css/trips.css">
    <title>Cars</title>
</head>
<body>
    
    <div class="hh"></div>
    <div class="trips-heading">
        <h1>Wanna a new car? Let's go</h1>
    </div>
    <div class="trips-container">
    <?php 
    $query="SELECT * FROM `cars` ";
    $do=mysqli_query($link,$query);
    $arr=mysqli_fetch_assoc($do);
foreach($do as $car){?>
    <div class="trip-box">
        <div class="trip-dark-layer">
            <h1><?php echo($car['name'])?></h1>
                <div class="options">
                    <a href="cardetails.php?cid=<?php echo($car['id'])?>">Read More</a>
                    </div>
                </div>
                <div>
            <img src="<?php echo($car['images'])?>"> 
        </div>
        </div>
        
    <?php }?>
</body>
</html>
<?php 
include('footer.php');
?>
<?php }
?>
