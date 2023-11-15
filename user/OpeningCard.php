

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/images/ziven/favicon.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="description" content="Wedding Invitation">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/general.css">
    <link rel="stylesheet" href="assets/style/ziven.css">
    <link rel="stylesheet" href="assets/style/landing.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Redressed&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&family=Cormorant+Infant:wght@300&family=Fasthand&family=Redressed&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta&display=swap" rel="stylesheet">
    <title>Alexander & Olivia Wedding Invitation</title>
</head>
<body>
    <div class="container-inv">
        <div class="flower-inv flower-1"></div>
        <div class="flower-inv flower-2"></div>
        <div class="golden-blur golden-blur-1"></div>
        <div class="golden-blur golden-blur-2"></div>
        <div class="golden-blur golden-blur-3"></div>
        <div class="golden-blur golden-blur-4"></div>
        <div class="leave-1 leave-a"></div>
        <div class="leave-2 leave-a"></div>
        <div class="leave-3 leave-a"></div>
        <div class="leave-4 leave-a"></div>
        <div class="sparkle-inv"  data-aos="fade-up" data-aos-delay="100"></div>
        <div id="frame-1" data-aos="fade-up" data-aos-delay="100" class="frame-inv frame-1"></div>
        <div id="frame-2" data-aos="fade-up" data-aos-delay="100" class="frame-inv frame-2"></div>
        <div class="middle-circle-inv" data-aos="fade-up" data-aos-delay="100">
            <h2 class="invitation-title inv-title-1">Celebrating Love’s</h2>
            <h2 class="invitation-title">Journey</h2>
            <?php
                if (isset($_SESSION['userEmail'])) {
                    $email = $_SESSION['userEmail'];
                    $query = "SELECT name from user where email = '$email'";
                    $show_user = $connect->prepare($query);
                    $show_user -> execute();

                    if($show_user -> rowCount()>0) {
                        while($fetch_user = $show_user->fetch(PDO::FETCH_ASSOC)){
                            ?>
                        <h3 class="dear-title">Dear, <?=$fetch_user['name'] ?></h3>
                            <?php
                        }
                    }
                } else {
                    ?>
                    <h3 class="dear-title">Dear, Guest</h3>
                    <?php
                }
            ?>
            
        </div>

        <h1 class="tap-to-open">Tap to open</h1>

    </div>

    <div class="spinning-cd" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000" onclick="playInvitationSong()">
        
    </div>
    <!-- <div class="landing-inv"></div> -->
    <div class="landing-inv">
        <div class="golden-blur golden-blur-2"></div>
        <div class="golden-blur golden-blur-3"></div>
        <img class="landing-flower" alt="Flower for wedding" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300" src="assets/images/ziven/flowerLanding.webp">
        <div class="flex-inv" >
            <div class="flex-inv-container" >
                <img class="element-landing-1" alt="Element for wedding" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300"src="assets/images/ziven/element1.webp">
                <!-- <p class="together-landing">Together with their families</p> -->
                <div class="bride-groom-landing" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000">
                    <img alt="bride groom"  src="assets/images/ziven/bridegroom.webp">
                </div>
            </div>
            <div class="flex-inv-container">
                <p class="title-landing"  data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000"> Alexander & Olivia</p>
                <p class="text-landing" data-aos="fade-up" data-aos-delay="150" data-aos-duration="2000"> invite you to celebrate their wedding</p>
                <div class="date-landing" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">
                    <p class="side-date-landing">Oct</p>
                    <img alt="separator" class="separator-date-landing-1" src="assets/images/ziven/line.png">
                    <p class="main-date-landing">29</p>
                    <img alt="separator" class="separator-date-landing-1" src="assets/images/ziven/line.png">
                    <p class="side-date-landing">2023</p>
                </div>
                <p class="together-landing" data-aos="fade-up" data-aos-delay="250" data-aos-duration="2000">08:00 pm</p>
                <p class="together-landing" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000">at Wisma benteng restaurant</p>
            </div>
        </div>
       
        <div class="flower-inv flower-3" data-aos="fade-left" data-aos-delay="400" data-aos-duration="2000"></div>
        
    </div>
    
    <!-- <div class="landing-inv"></div> -->
    <audio id="invitationAudio" src="assets/sound/invitation.mp3"></audio>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="assets/js/invitation.js">
        
    </script>
</body>
</html>