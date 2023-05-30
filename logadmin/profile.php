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
    <title>Your profile</title>
    <link rel="stylesheet" href="css/Profile.css">
</head>
<body>
    <div class="header">
    <div class="main_page">
<a href="config.php" class="main_page_a">Главная страница</a>
</div>
        
        <a href="logout.php"  class="logout">Log out</a>

    </div>
    <form action="profile.php">
        <div class="container">
        <?php 
                $userid = $_SESSION['id'];
                 $sql = "SELECT * FROM `admin` WHERE `id`=$userid";
                 $result2 = mysqli_query($connection,$sql);
                 $user = mysqli_fetch_assoc($result2);
                ?>
            <div class="Photo">
            <h3>Your Photo:</h3>
            <img src="<?php echo $user['Photo']; ?>" alt="" width="300px" height="300px" class="robo" name="img">
            </div>
            <div class="Info">
                <p class="uname">Name: <?php echo $user['name'] ?></p>
                <p class="login">Login: <?php echo $user['login'] ?></p>
                <?php
                    if(isset($_GET['Change']))
                    {
                        $new_url = 'http://logadmin/change.php';
                        header('Location: '.$new_url);
                    }
                ?>
                <button type="submit" name="Change" class="Change">Change sourse</button>
            </div>
        </div>
    </form>
</body>
</html>