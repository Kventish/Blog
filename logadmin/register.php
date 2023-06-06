<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/Register.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form register</title>
</head>
<form action="register.php" method="post">
 <div class="container">
    <label for="login"></label>
    <input type="text" placeholder="Create Login" name="login">

    <label for="login"></label>
    <input type="text" placeholder="Create Username" name="name">

    <label for="password"></label>
    <input type="password" placeholder="Create Password" name="psw">

    <label for="password1"></label>
    <input type="password" placeholder="Repeat Your Password" name="psw1">

<?php
$login=$_POST['login'] ?? "";
$name=$_POST['name'] ?? "";
$password=$_POST['psw'] ?? "";
if(isset($_POST['regis']))
{
    if(empty($_POST['login']) or empty($_POST['name']) or empty($_POST['psw']) or empty($_POST['psw1']) ){
        print 'Заполните все поля ввода';
    }
    else{
                
    $connection = mysqli_connect("localhost", "root", "", "blog");
    if( $connection == false)
    {
        echo'Не удалось подключиться к бд!<br>';
        echo mysqli_connect_error();
    }
    $sql = "SELECT * FROM admin WHERE `login` = '$login'";
    if($result = mysqli_query($connection,$sql))
    {
        // $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)){
            echo'Данный логин уже существует';
        }
        else{
            if($_POST['psw'] == $_POST['psw1']){
                $passwordhash = password_hash("$password",PASSWORD_DEFAULT);
                $sql = mysqli_query($connection,"INSERT INTO admin (`login`,`password`,`name`) VALUES ('$login', 
                        '$passwordhash',
                        '$name')");
                
                $new_url = 'massege.php';
                header('Location: '.$new_url);
            }
            else{
                print'Пароли не совпадают';
            }
        }
    }
}
        
    }
    ?>

    <button type="submit" name="regis">Register</button>
  </div>
</form>
</body>
</html>