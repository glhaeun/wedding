<?php
    include 'connect.php';
    if (isset($_GET['email'])) {
        $_SESSION['userEmail']  = $_GET['email'];
        $user = $_GET['email'];
        $database = $connect->prepare("SELECT id FROM user WHERE email = '$user'");
        $database -> execute();

        if ($database->rowCount() > 0) {
            $data = $database->fetch(PDO::FETCH_ASSOC);
            $_SESSION['userId']= $data['id'];
        } 

    } else {
        unset($_SESSION['userEmail']); // Clear the userEmail from the session
    }
?>