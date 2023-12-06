<?php 
    // include 'component/connect.php';
    // include 'component/session.php';
    include './component/getBrideGroom.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Redressed&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="assets/style/haeun.css">

    <style>
    .font-esthetic {
        font-family: 'Ephesis', cursive !important;
        }

    .font-arabic {
        font-family: 'Enriqueta', serif !important;
    }

    .font-inside {
        font-family: 'Asul';
    }

    .csstitle {
        text-align: center;
        text-shadow: 0px 4px 4px rgba(116, 116, 116, 0.25);
        font-family: Ephesis;
        font-size: min(10vh, 10vw);
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        background: linear-gradient(
            183deg,
            #ffca00 40.65%,
            #f5e08f 50.98%,
            #d7b123 50.99%,
            #d6a357 68.6%
        );
        z-index: 2;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin: min(1vw, 1vh);
    }

    .cssSubtitle {
        color: #b27f32;
        font-size: min(3vh, 3vw);
    }

    </style>
</head>
<body>

    <section id="bridegroom">
       
        
        <!-- <img src="assets/images/haeun/glitterbottom.png" alt="" class="glitterbottom"> -->
        
       <div class="text-center mb-5">
       <div class="golden-blur golden-blur-1"></div>
       <div class="golden-blur golden-blur-4"></div>
       <div class="glitter" data-aos="fade-down-right" data-aos-duration="1000" data-aos-delay="1000">
            <img src="assets/images/haeun/glittertop.png" alt="" class="" >
            <img src="assets/images/haeun/glittertop.png" alt="" class="glitter2">
        </div>
        <h1 class="py-4 px-2 csstitle" data-aos="fade-up-right" data-aos-delay="1000" data-aos-duration="1000">Congratulations Lovebirds</h1>
        <div class="testing">
        <div class="groom" data-aos="fade-right" data-aos-duration="2000">
            <div class="img-crop-bridegroom border-light shadow my-4 mx-auto">
                <img src="../images/<?=$groom['image']?>" alt="" class="">
                <img class="flower flower1" src="assets/images/haeun/flower1.png" data-aos="fade-up" data-aos-duration="2000">
            </div>
       
            <div class="details">
            <div class="name">
            <img class="butterfly" src="assets/images/haeun/butterfly.png"  data-aos="fade-down-right" data-aos-duration="2000">
            <h1 class="font-arabic" style="font-size: 2rem; color: #b27f32;"><?= $groom['groom'] ?></h1>
            </div>
            <h5 class="font-inside mb-0 cssSubtitle">Son of</h5>
            <p class="mb-0 font-inside cssSubtitle" >Mr <?= $groom['dad'] ?> & Mrs <?= $groom['mom'] ?></p>


            </div>
            
            
        </div>

        <!-- <h1 class="font-esthetic my-4" style="font-size: 4rem;">&</h1> -->

        <div class="groom" data-aos="fade-left" data-aos-duration="2000">
            <div class="img-crop-bridegroom border border-3 border-light shadow my-4 mx-auto">
                <img src="../images/<?=$bride['image']?>" alt="" class="w-full h-screen object-cover">
                <img class="flower flower2" src="assets/images/haeun/flower2.png"  data-aos="fade-up" data-aos-duration="2000">
            </div>
            <div class="details">
            <div class="name">
            <img class="butterfly" src="assets/images/haeun/butterfly.png"  data-aos="fade-down-right" data-aos-duration="2000">
            <h1 class="font-arabic" style="font-size: 2rem;"><?= $bride['bride'] ?></h1>
            </div>
            <h5 class="font-inside mb-0 cssSubtitle">Daughter of</h5>
            <p class="mb-0 font-inside cssSubtitle" >Mr <?= $bride['dad'] ?> & Mrs <?= $bride['mom'] ?></p>


            </div>
        </div>
        </div>
       </div> 

       <!-- <div>
       <img src="assets/images/haeun/grass.png" alt="" class="glittertop">
       </div> -->
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <defs>
                <linearGradient id="grad" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#B27F32" />
                    <stop offset="50%" style="stop-color:#FAD983" />
                    <stop offset="100%" style="stop-color:#FAD983" />
                </linearGradient>
            </defs>
            <path fill="url(#grad)" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,106.7C384,117,480,171,576,165.3C672,160,768,96,864,96C960,96,1056,160,1152,154.7C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
            <!-- <image href="assets/images/haeun/2.png" x="0" y="0" height="320" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="1000"/>
            <image href="assets/images/haeun/3.png" x="100" y="0" height="320" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="1000" />
            <image href="assets/images/haeun/3.png" x="300" y="0" height="320" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="1000" />
            <image href="assets/images/haeun/3.png" x="500" y="0" height="320" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="1000" />
            <image href="assets/images/haeun/3.png" x="700" y="0" height="320" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="1000" />
            <image href="assets/images/haeun/3.png" x="900" y="0" height="320" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="1000" />
            <image href="assets/images/haeun/3.png" x="1100" y="0" height="320" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="1000" />
            <image href="assets/images/haeun/1.png" x="1120" y="0" height="320" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="1000" /> -->



        <!-- <div class="divider">
            <img src="assets/images/haeun/grass.png" alt="Flower Image" style="height: 100%; width: 100%;">
            <img src="assets/images/haeun/grass.png" alt="Flower Image" style="height: 100%; width: 100%;">
        </div>  -->
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
</body>
</html>