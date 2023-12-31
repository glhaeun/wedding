<?php
    include './component/getLocation.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <style>

        #thankyou {
        background-image: url(./assets/images/ziven/landingBackground.webp);
        background-size: cover;
        background-position: center center;
        overflow: hidden;
        overflow-y: hidden;
        }
        
        .font-esthetic {
            font-family: 'Ephesis', cursive !important;
        }

        .font-arabic {
            font-family: 'Enriqueta', serif !important;
        }

        .my-image {
            width: 200px;
            height: 100px;
            float: center;
        }

        .fadeIn {
            opacity: 0;
            transition: 5s all ease-in-out;
        }

        .fadeIn:hover {
            opacity: 10;
        }

        .fadeOut {
            opacity: 1;
            transition: 5s all ease-in-out;
        }

        .fadeOut:hover {
            opacity: 0;
        }
    </style>
</head>

<body>
    <section id="thankyou">
            <div class="container" >
                <div class="text-center">

                    <p style="font-size: 0.9rem;" class="pt-4 pb-1 px-2 " ata-aos-delay="1000" data-aos="fade-out" data-aos-duration="2000" >
                        <?=$data['thankyou']?>
                    </p>

                    <img src="https://cdn.pixabay.com/photo/2018/02/19/20/16/divider-3166117_640.png" alt="tes"
                        class="my-image"data-aos="fade-in" data-aos-delay="1000" data-aos-duration="2000">
                    <div>
                        <h1 class="font-esthetic csstitle mt-4" data-aos="fade-out" data-aos-delay="1000" data-aos-duration="2000">
                            >Thank You</h1>
                        <hr class="mt-3 mb-3">
                    </div>

                </div>
            </div>
    </section>

</body>

</html>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
