<?php
$connection = mysqli_connect("localhost", "root", "root", "blog");
if( $connection == false)
{
    echo'Не удалось подключиться к бд!<br>';
    echo mysqli_connect_error();
}
    session_start();
    session_unset();
    header('location: logadmin.php')
?>