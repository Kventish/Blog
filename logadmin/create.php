<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style2.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New page</title>
</head>
<form action="create.php" method="POST">
<div class="header">
        <div class="login">
            <a href="index.html" ><img src="img/default-avatar-profile-icon-vector-social-media-user-image-182145777.jpg" alt="" width="30px" height="30px"></a>
        </div>
    </div>
<div class="container">
    <div class="blog1">
        <div class="ram1">
            <input type="text" placeholder="Придумайте заголовок" name="Name" class="lele">
            <textarea placeholder="Введите краткую информацию" name="Kratko"  class="lili" rows="3" ></textarea>
            <textarea placeholder="Введите подробную информацию" name="Vvod"  class="lulu" rows="5" ></textarea>
            <input type="text" name="Ssilka" placeholder="Вставте ссылку на картинку"  class="lolo">
            <?php
            
            $Name = $_POST['Name'];
            $Kratko = $_POST['Kratko'];
            $Vvod = $_POST['Vvod'];
            $Ssilka = $_POST['Ssilka'];
            $r_date = time();
            $r_date = date('Y-m-d H:i:s');
            // die(var_dump($r_date));
                if(isset($_POST['create']))
                {
                    if(empty($_POST['Name']) or empty($_POST['Kratko']) or empty($_POST['Vvod']) or empty($_POST['Ssilka'])){
                        print 'Заполните все поля ввода';
                    }
                    else{
                    $connection = mysqli_connect("localhost", "root", "root", "blog");
                    if( $connection == false)
                    {
                        echo'Не удалось подключиться к бд!<br>';
                        echo mysqli_connect_error();
                    }
                    

                    $sql = mysqli_query($connection,"INSERT INTO publicated (`Header`,`short_information`,`Photo`,`Full_info`,`tima,date`) VALUES ('$Name', 
                    '$Kratko',
                    '$Ssilka',
                    '$Vvod',
                    '$r_date')");
                    $new_url = 'http://logadmin/config.php';
                    header('Location: '.$new_url);
                    exit();
                    // var_dump(mysqli_error($connection));
                    }
                 }
            ?>

            <button type="submit" name="create">Создать</button>
        </div>
    </div>
</div>
</form>