<?php 
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
</head>

<body>
<?php  
$dd="SELECT * FROm `visitors`";
$xx=mysqli_query($link,$dd);
?>
        <table border="3px">
            <tr>
                <th>user ID</th>
                <th>Name</th>
                <th>role</th>
                <th>Action</th>
            </tr>

<?php 
foreach($xx as $user){?>
                <tr>
                    <td><?php echo($user['id'])?></td>
                    <td><?php echo($user['name'])?></td>
                    <td><?php echo($user['role']) ?></td>
                    <td>
                        <form method="post" action="viewusers.php?uid=<?php echo($user['id'])?>">
                        <input type="submit" value="Delete" name="Delete">
                        </form>
                        <a href="updateusers.php?uid=<?php echo($user['id'])?>">Update</a>
                    </td>
<?php 
if(isset($_POST['Delete'])){
$uid=$_GET['uid'];
$ee="DELETE FROM `visitors` where `id`='$uid'";
$rr=mysqli_query($link,$ee);
header('location: viewusers.php');
}
?>
                </tr>
            <?php }?>
        </table>
    </body>
</html>