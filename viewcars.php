<?php 
include('config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>

<body>
    <?php 
    $qq="SELECT * FROM `cars` ";
    $ff=mysqli_query($link,$qq);
    ?>
    
        <table border="1px">
            <tr>
                <th>Car ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Price</th>
                <th>category</th>
                <th>Action</th>
            </tr>
    <?php 
        foreach($ff as $cardetails){?>
                <tr>
                    <td><?php echo($cardetails['id']);?></td>
                    <td><?php echo($cardetails['name']);?></td>
                    <td><img src="<?php echo($cardetails['images'])?>" height="300px" width="300px" /></td>
                    <td><?php echo($cardetails['description']);?></td>
                    <td><?php echo($cardetails['price']);?></td>
                    <td><?php echo($cardetails['category']);?></td>
                <td>
                <form method="post" action="viewcars.php?cid=<?php echo($cardetails['id'])?>">
                    <input type="submit" value="Delete" name="Delete">
                </form>
                <a href="updatecars.php?cid=<?php echo($cardetails['id'])?>">Update</a>
            </td>
    <?php }?>
                    <?php 
                    
                    if(isset($_POST['Delete'])){
                        $cid=$_GET['cid'];
                        $de="DELETE FROM `cars` where `id` = '$cid' ";
                        $do=mysqli_query($link,$de);
                        header('location: refreshcars.php');
                        
                    }?>
            </tr>
        </table>
    </body>
</html>
<?php
include('footer.php');
?>