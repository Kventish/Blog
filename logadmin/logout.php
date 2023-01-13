<?php
    session_start();
    session_unset();
    header('location: logadmin.php')
?>