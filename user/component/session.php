<?php
    if (isset($_GET['email'])) {
        $_SESSION['userEmail']  = $_GET['email'];
    } else {
        unset($_SESSION['userEmail']); // Clear the userEmail from the session
    }
?>