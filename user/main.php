<?php

if (isset($_GET['email'])) {
    $userEmail = $_GET['email'];

    
    echo "User's email: " . $userEmail;
} else {
    echo "No email provided.";
}

    include 'OpeningCard.php';
    include 'bridegroom.php';
    include 'location.php';
    include 'timeline.php';
    include 'rsvp.php';
    //scratch
    include 'gifts.php';
    include 'thankyou.php';
?>
