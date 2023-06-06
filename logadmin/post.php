<?php
$connection = mysqli_connect("localhost", "root", "", "blog");
if( $connection == false)
{
    echo'Не удалось подключиться к бд!<br>';
    echo mysqli_connect_error();
}
$id = intval($_GET['id']);
$result = (mysqli_query($connection,"SELECT * FROM `publicated` WHERE id=$id"));
$result3 = (mysqli_query($connection, "SELECT `c`.*, `a`.`name` FROM `comments` `c` left join `admin` `a` on `a`.`id` = `c`.`name_id` where `c`.page_id = $id"));
$comment = (mysqli_fetch_all($result3, MYSQLI_ASSOC));
if(mysqli_num_rows($result)<1){
    header('location:config.php');
    exit;

}
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style3.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Form</title>
    <form action="post.php" method="post">
    <div class="header">
    <div class="main_page">
<a href="config.php" class="main_page_a">Главная страница</a>
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
        <?php  $post=mysqli_fetch_assoc($result)?>
        <div class="blog1">
            <div class="ram1">
                <h3> <?php echo $post['Header']?> </h3>
                <img src="<?php echo $post['Photo']; ?>" alt="" width="500px" height="500px" class="robo" name="img">
                <p><?php echo $post['Full_info']?></p>
                <br>
                <br>
                <p>
                    <label>Комментарий:</label>
                    <br />
                    <input type="hidden" value="<?php echo $post['id']?>" name="post_id">
                    <input type="hidden" value="<?php echo $user['id']?>" name="name_id">
                    <textarea name="text_comment" cols="30" rows="5"></textarea>
                </p>
                <p>
                    <?php
                    if(isset($_POST['submit'])){
                        $post_id = $_POST['post_id'];
                        $name_id = $_POST['name_id'];
                        $text_comment = $_POST["text_comment"];
                        $sql = mysqli_query($connection, "INSERT INTO `comments` (`page_id`, `name_id`,`text_comment` ) VALUES ('$post_id', '$name_id', '$text_comment')");// Добавляем комментарий в таблицу
                        header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
                    }
                    ?>
                    <br>
                    <input type="submit" value="Отправить" name="submit" />
                </p>
                
                <div>
                    <br>
                    <h1>Комментарии</h1>
                    <br>
                    <?php
                    foreach($comment as $com):
                    ?>
                    <h2><?php echo $com['name']  ?? ""?></h2>
                    <p><?php echo $com['text_comment']  ?? ""?></p>
                    <br>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</form>
</html>