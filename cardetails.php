<?php 
include('config.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Car details</title>
    </head>
    <body>

    <?php 
    
    $cid=$_GET['cid'];
    $qr = "SELECT * FROM `cars` where `id`='$cid'";
    $dd=mysqli_query($link,$qr);
    
    foreach($dd as $cardetails){?>
        <div>

        <h1><?php echo($cardetails['name']);?></h1>
        <h1><?php echo($cardetails['price']);?></h1>
        <h2><?php echo($cardetails['category']);?></h2>
        <p><?php echo($cardetails['description']);?></p>
        <div>
            <img src="<?php echo($cardetails['images'])?>">
        </div>
        
    </div>
    <?php }
?>
<?php 
$ee="SELECT * FROM `carlink` where `id`='$cid'";
$do=mysqli_query($link,$ee);
foreach($do as $carim){?>
<div>
    <img src="<?php echo($carim['images'])?>" >
</div>
<?php }?>

        <section class="all-page">
            <div class="trip-container">
                <div class="top">
                    <img src="" alt="">
                    <div class="trip-desc">
                        <h1></h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
    </html>
    <?php 
    include('footer.php');
    ?>