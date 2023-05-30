<?php 
$connection = mysqli_connect("localhost", "root", "root", "blog");
if( $connection == false)
{
    echo'Не удалось подключиться к бд!<br>';
    echo mysqli_connect_error();
}
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile</title>
    <link rel="stylesheet" href="css/Change.css">
</head>
<body>
<div class="header">
        <a href="/config.php" class="back">Mane Page</a>
    </div>
    <form action="change.php" method="post">
        <div class="container">
            
        <?php 
                $userid = $_SESSION['id'];
                 $sql = "SELECT * FROM `admin` WHERE `id`=$userid";
                 $result3 = mysqli_query($connection,$sql);
                 $user = mysqli_fetch_assoc($result3);
                ?>
            <h3>Your Photo:</h3>
                <img src="<?php echo $user['Photo']; ?>" alt="" width="300px" height="300px" class="robo" name="img">
                <input type="text" placeholder="Вставьте ссылку на фотографию" name="photo" class="photo">
                <input type="text" placeholder="Name: <?php echo $user['name'] ?>" name="name" class="name">
                <input type="text" placeholder="Login: <?php echo $user['login']?>" name="login" class="login">
                <?php
                    if(isset($_POST['Change']))
                    {
                        $photo = $_POST['photo'] ?? "";
                        $name = $_POST['name'] ?? "";
                        $login = $_POST['login'] ?? "";
                        $connection = mysqli_connect("localhost", "root", "root", "blog");
                        if( $connection == false)
                        {
                            echo'Не удалось подключиться к бд!<br>';
                            echo mysqli_connect_error();
                        }

                        $sql1 = mysqli_query($connection,"UPDATE `admin` SET Photo = '$photo', name = '$name',login = '$login' WHERE id = '$userid'");
                            
                        $new_url = 'http://logadmin/profile.php';
                        header('Location: '.$new_url);
                    }
                    
                ?>
                <button type="submit" name="Change" class="Change">Change sourse</button>
            </div>
    </form>
</body>
</html>