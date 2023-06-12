<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/Register.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for register</title>
</head>
<form action="massege.php" method="post">
 <div class="container">

        <p>Спасибо за регистрацию на нашем проекте, ваш аккаунт успешно создан. Нажмите на кнопку чтоб перейти к форме авторизации</p>
    <button type="submit" name="Back">Back</button>
    <?php
        if(isset($_POST['Back'])){
            $new_url = 'logadmin.php';
            header('Location: '.$new_url);
        }
    ?>
  </div>
</form>
</body>
</html>
