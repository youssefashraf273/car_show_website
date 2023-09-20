<!DOCTYPE html>
<html lang="en">
<?php 
include('config.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
</head>
<body>
        <table border="1px">
            <tr>
                <th>Message ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            <?php 
            $ss="SELECT * FROM `feedback`";
            $dd=mysqli_query($link,$ss);
            ?>
            <?php foreach($dd as $feeda){?>
            <tr>
                    <td><?php echo($feeda['id'])?></td>
                    <td><?php echo($feeda['name'])?></td>
                    <td><?php echo($feeda['email'])?></td>
                    <td><?php echo($feeda['msg'])?></td>
                    <td><?php echo($feeda['Phone'])?></td>
                    <td>
                        <form method="POST" action="viewmsgs.php?mid=<?php echo($feeda['id'])?>">
                        <input type="submit" name="delete" value="Delete">
                        </form>
                    </td>
            <?php }?>        
            
            <?php
                if(isset($_POST['delete'])){
                    $mid=$_GET['mid'];
                    $del="DELETE FROM `feedback` where `id`='$mid' ";
                    $done=mysqli_query($link,$del);
                    header('location: viewmsgs.php');
                }
                ?>

        </tr>
        </table>
    </body>
</html>