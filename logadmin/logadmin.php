<?php 
session_start();
if(isset($_SESSION['id'])){
    header('location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login</title>
</head>
<form action="logadmin.php" method="post">
 <div class="container">
    <label for="login"></label>
    <input type="text" placeholder="Username" name="Uname" value="<?php echo $_POST['Uname'] ?? ""?>">

    <label for="password"></label>
    <input type="password" placeholder="Password" name="psw">
<?php
        $userlogin = $_POST['Uname'] ?? "";
        $password = $_POST['psw'] ?? "";
        $connection = mysqli_connect("localhost", "root", "", "blog");
        if( $connection == false)
        {
            echo'Не удалось подключиться к бд!<br>';
            echo mysqli_connect_error();
        }
    if(isset($_POST['join'])){

        if(empty($_POST['Uname']) && empty($_POST['psw'])){
            print'Введите логин и пароль';
        }
        elseif(empty($_POST['Uname']))
        {
            echo 'Введите логин';
        }
        elseif(empty($_POST['psw'])){
            echo 'Введите пароль';
        }
        else{

 
        $sql = "SELECT * FROM `admin` WHERE `login` = '$userlogin'";
        $result = mysqli_query($connection,$sql);
        if(mysqli_num_rows($result))
        {
            $row = mysqli_fetch_assoc($result);
            $hash=$row['password'];

            if(password_verify($password,$hash)){
                $_SESSION['id']=$row['id'];
                $new_url = 'config.php';
                header('Location: '.$new_url);
                exit();
            }
            else{
                echo 'Неправильный пароль';
            }

        }
        
        else{
            echo 'Неправильный логин';
        }
    
}
    }
?>
    <button type="submit" name="join">Login</button>
    <button type="submit" name="register" >Register</button>
    <?php
        if(isset($_POST['register'])){
            $new_url = 'register.php';
            header('Location: '.$new_url);
        }
    ?>
  </div>
</form>
</body>
</html>