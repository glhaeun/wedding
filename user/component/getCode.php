<?php 
    if(isset($_GET['email'])) {
        $email = $_GET['email'];
    }
    $code_database = $connect->prepare("SELECT * FROM user where email='$email'");
    $code_database -> execute();

    if ($code_database->rowCount() > 0) {
        $code = $code_database->fetch(PDO::FETCH_ASSOC);
    } 
?>