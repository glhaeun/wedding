<?php
    $db_name = 'mysql:host=localhost:3306;dbname=wedding';
    $username = 'root';
    $password = '';
    $connect = new PDO($db_name, $username, $password);
    session_start();
?>
