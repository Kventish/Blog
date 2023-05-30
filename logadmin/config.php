<?
$connection = mysqli_connect("localhost", "root", "root", "blog");
if( $connection == false)
{
    echo'Не удалось подключиться к бд!<br>';
    echo mysqli_connect_error();
}
$result = (mysqli_query($connection,"SELECT * FROM `publicated`"));
$r_date = date('H:i:s Y-m-d');
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blog</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <form action="" method="post">
        <div class="header">
            <div class="main_page">
                <a href="config.php" class="main_page_a">Главная страница</a>
                <a href="create.php" class="create_publication">Создать публикацию</a>
            </div>
            <div class="search">
                <form name="search" method="post" action="search.php">
                    <input type="search" name="query" placeholder="Поиск">
                    <button type="submit">Поиск статьи</button> 
                </form>
            </div>
            <div class="login">
                <?php 
                $userid = $_SESSION['id'];
                 $sql = "SELECT * FROM `admin` WHERE `id`=$userid";
                 $result2 = mysqli_query($connection,$sql);
                 $user = mysqli_fetch_assoc($result2);
                ?>

                <a href="logadmin.php" ><span class="profile"><?php echo $user['name']?></span><img class="def_img" src="img/default-avatar-profile-icon-vector-social-media-user-image-182145777.jpg" alt="" width="30px" height="30px"></a>
            </div>
        </div>
    <div class="container">
        <?php
            while($post=mysqli_fetch_assoc($result)){
        ?>
        <div class="blog1">
            <div class="ram1">
                <div class="post1">
               

                    <p><?php echo $post['tima,date'];  ?></p>
                    <a href="post.php?id=<?php echo $post['id']?>" class="fa"><h3> <?php echo $post['Header']; ?></h3></a>
                    <img src="<?php echo $post['Photo']; ?>" alt="" width="500px" height="500px" class="robo" name="img">
                    <h1><?php echo $post['short_information'];?></h1>



                    <a href="post.php?id=<?php echo $post['id']?>" class="ka" name="join">
                        <span>Читать дальше</span>
                    </a>
                    <?php
                    if (isset($_SESSION['toCompare']) && count($_SESSION['toCompare']))
                    {
                        $_SESSION['toCompare'][] = $id;
                        echo"$id";
                    }
                    ?>
                </div>
            </div>
            <?php
        }
        ?>
        </div>
        <script src="" async defer></script>
</form>
</html>