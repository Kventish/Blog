<?
$connection = mysqli_connect("localhost", "root", "root", "blog");
if( $connection == false)
{
    echo'Не удалось подключиться к бд!<br>';
    echo mysqli_connect_error();
}
$id = intval($_GET['id']);
$result = (mysqli_query($connection,"SELECT * FROM `publicated` WHERE id=$id"));
if(mysqli_num_rows($result)<1){
    header('location:config.php');
    exit;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style3.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Form</title>
    <form action="post.php">
    <div class="header">
        <div class="login">
            <a href="index.html" ><img src="img/default-avatar-profile-icon-vector-social-media-user-image-182145777.jpg" alt="" width="30px" height="30px"></a>
        </div>
    </div>
    <div class="container">
        <?php  $post=mysqli_fetch_assoc($result)?>
        <div class="blog1">
            <div class="ram1">
                <h3> <?php echo $post['Header']?> </h3>
                <img src="<?php echo $post['Photo']; ?>" alt="" width="500px" height="500px" class="robo" name="img">
                <p><?php echo $post['Full_info']?></p>
            </div>
        </div>
        <?php ?>
    </div>
</form>
</html>