<?php

if (isset($_GET['email'])) {
    $userEmail = $_GET['email'];

    
    // echo "User's email: " . $userEmail;
} else {
    // echo "No email provided.";
}

    include 'OpeningCard.php';
    include 'bridegroom.php';
    include 'location.php';
    include 'timeline.php';
    include 'rsvp.php';
    include 'scratch.php';
    include 'gifts.php';
    include 'thankyou.php';
?>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

