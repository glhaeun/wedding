<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift</title>

    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Redressed&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    /*<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">*/
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <style>
        #angpao,
        #gift {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            pointer-events: none;
        }

        #angpao.active,
        #gift.active {
            opacity: 1;
            pointer-events: auto;
        }
       /* #angpao, #gift {
            display: none; /* Initially hide the angpao element 
        }*/
        .font-esthetic {
    font-family: 'Ephesis', cursive !important;
    /* color: #ffd700 !important; Change to gold/yellow color */
}

.font-arabic {
    font-family: 'Enriqueta', serif !important;
    /*  Change to gold/yellow color */
}

.yellow {
    color: #ffd700 !important;
}

.btn-light {
    background-color: #ffd700 !important; /* Change button background color to gold/yellow */
    color: #000000 !important; /* Set text color for buttons */
}

.btn-light:hover {
    background-color: #ffcc00 !important; /* Change button background color on hover to a slightly different shade of gold/yellow */
}

        
.font-inside {
        font-family: 'Asul';
        }
/*.my-image {
      width: 10px;
      height: 5px;
      position: absolute;
      top: 60px;
      left: 50px;
}*/

    </style>
</head>
<body>
    <section id="hadiah">
        <div class="container">
            <div class="text-center mt-5 mb-5">
            <h1 class="font-esthetic mt-0 mb-3 yellow" style="font-size: 3rem;">Hadiah</h1>
            <img src = "https://cdn.pixabay.com/photo/2022/10/27/22/50/divider-7551966_640.png" alt ="tes" class= "my-image">
                    <p class="mb-1 font-inside" style="font-size: 0.9rem;">
                        Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk kami,
                        dapat melalui :
                    </p>

               <div class="button-container">
            <button data-toggle="angpao" class="btn btn-light btn-sm rounded-3 font-arabic">Send Angpao</button>
            <button data-toggle="gift" class="btn btn-light btn-sm rounded-3 font-arabic">Send Gift</button>
        </div>

        <div class="image-container">
             <img src="assets/images/elvina/heartpanjang.png" alt="HeartPanjang"> -->
            
        <!--</div>
                    <div class="overflow-x-hidden font-inside" id="angpao" data-aos="fade-up">
                        <div class="row justify-content-center">

                            <div class="col-12 card-body border rounded-4 shadow p-3 m-3" style="max-width: 25rem;">
                                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png" class="img-fluid rounded" width="150" alt="bni">

                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">No. Rekening 123456789</p>
                                <p class="card-text" style="font-size: 0.9rem;">a.n Lorem ipsum dolor</p>

                                <button class="btn btn-light btn-sm rounded-3 font-arabic" data-rek="123456789">Salin No. Rekening</button>
                              
                            </div>

                            <div class="col-12 card-body border rounded-4 shadow p-3 m-3" style="max-width: 25rem;" >
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/2560px-BANK_BRI_logo.svg.png" class="img-fluid rounded" width="150" alt="bri">

                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">No. Rekening 123456789</p>
                                <p class="card-text" style="font-size: 0.9rem;">a.n Lorem ipsum dolor</p>

                                 Ubah juga data-nomer sesuai dengan no rekening -->
                               <!-- <button class="btn btn-light btn-sm rounded-3 font-arabic" data-rek="123456789">Salin No. Rekening</button>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-hidden font-inside" id="gift" data-aos="fade-up">
                        <div class="row justify-content-center">

                            <div class="col-12 card-body border rounded-4 shadow p-3 m-3" style="max-width: 25rem;">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJjAh42YvBECBVsT_HRjTsRWwuxdZlLG7bug&usqp=CAU" alt="Hadiah" class="img-fluid rounded" width="150">
                            <ol>
                                <li class="card-text mt-3 mb-0" style="font-size: 0.9rem;">Hair Dryer</li>
                                <li class="card-text mt-3 mb-0" style="font-size: 0.9rem;">Microwave</li>
                                <li class="card-text mt-3 mb-0" style="font-size: 0.9rem;">Air Purifier</li>
                                <li class="card-text mt-3 mb-0" style="font-size: 0.9rem;">Vacuum Cleaner</li>
                            </ol>
                            </div>
                            <div class="col-12 card-body border rounded-4 shadow p-3 m-3" style="max-width: 25rem;" >
                              <img src="https://cdn.pixabay.com/photo/2016/01/10/22/23/location-1132647_640.png" alt="alamat" class="img-fluid rounded" width="50">
                                 <img src="assets/images/elvina/location.png" class="img-fluid rounded" width="150" alt="alamat"> -->
                                <!--<img src = "https://cdn.pixabay.com/photo/2022/10/27/22/50/divider-7551966_640.png" alt ="tes" class= "my-image">-->
                               <!-- <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">Alamat Rumah</p>
                                <p class="card-text" style="font-size: 0.9rem;"> Jalan Padang Bulan No 101, Medan</p></p>
                                <p class="card-text" style="font-size: 0.9rem;"> No Telp: 08123456789</p></p>
                                 Ubah juga data-nomer sesuai dengan alamat rumah -->
                               <!-- <button class="btn btn-light btn-sm rounded-3 font-arabic" data-rek="Jalan Padang Bulan No 101, 08123456789">Salin Alamat</button>
                            </div>


                            
                        </div>
                    </div>
            </div>
        </div>
        <?php include 'divider.php' ?>
    </section>

</body>

<script>
        var buttons = document.querySelectorAll("button[data-toggle]");

        buttons.forEach(function(button) {
            button.addEventListener("click", function() {
                var targetId = button.getAttribute("data-toggle");
                var targetElement = document.getElementById(targetId);

                if (targetElement.style.display === "none") {
                    targetElement.style.display = "block";
                } else {
                    targetElement.style.display = "none";
                }

                // Close the other element
                var otherId = (targetId === "angpao") ? "gift" : "angpao";
                var otherElement = document.getElementById(otherId);
                otherElement.style.display = "none";
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>-->
<!--<script src="https://unpkg.com/aos@next/dist/aos.js">
    AOS.init();
</script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    
    

<!--</html>-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift</title>

    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Redressed&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <style>
        #hadiah {
        background-image: url(./assets/images/ziven/landingBackground.webp);
        background-size: cover;
        background-position: center center;
        overflow: hidden;
        overflow-y: hidden;
        }

        #angpao,
        #gift {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            pointer-events: none;
            display:none;
        }

        #angpao.active,
        #gift.active {
            opacity: 1;
            pointer-events: auto;
            display:block;
        }

        .font-esthetic {
            font-family: 'Ephesis', cursive !important;
        }

        .font-arabic {
            font-family: 'Enriqueta', serif !important;
        }

        .yellow {
            color: #ffd700 !important;
        }

        .btn-light {
            background-color: #ffd700 !important;
            color: #000000 !important;
        }

        .btn-light:hover {
            background-color: #ffcc00 !important;
        }

        .font-inside {
            font-family: 'Asul';
        }

        .my-image {
            width: 100px;
            height: 50px;
            position: static;
            top: 40px;
            left: 500px;
        }
    </style>
</head>

<body>
    <section id="hadiah">
        <div class="container">
            <div class="text-center mt-5 mb-5">
                <h1 class="font-esthetic mt-0 mb-3 csstitle" style="font-size: 3rem;"data-aos="fade-out" data-aos-duration="2000">Hadiah</h1>
                <img src="https://cdn.pixabay.com/photo/2022/10/27/22/50/divider-7551966_640.png" alt="tes" class="my-image"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="2000">
                <p class="mb-1 font-inside" style="font-size: 0.9rem;"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">
                    Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk kami,
                    dapat melalui :
                </p>

                <div class="button-container"data-aos="fade-in" data-aos-delay="1000" data-aos-duration="2000">
                    <button data-toggle="angpao" class="btn btn-light btn-sm rounded-3 font-arabic"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">Send Angpao</button>
                    <button data-toggle="gift" class="btn btn-light btn-sm rounded-3 font-arabic"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">Send Gift</button>
                </div>

                <div class="image-container">
                    <!-- <img src="assets/images/elvina/heartpanjang.png" alt="HeartPanjang"> -->

                </div>
                <div class="overflow-x-hidden font-inside" id="angpao"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">
                    <div class="row justify-content-center" data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">
                        <div class="col-12 card-body border rounded-4 shadow p-3 m-3" style="max-width: 25rem;"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">
                            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png" class="img-fluid rounded" width="150" alt="bni"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="2000">
                            <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">No. Rekening 123456789</p>
                            <p class="card-text" style="font-size: 0.9rem;"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">a.n Lorem ipsum dolor</p>
                            <button class="btn btn-light btn-sm rounded-3 font-arabic" data-rek="123456789">Salin No. Rekening</button>
                        </div>
                        <div class="col-12 card-body border rounded-4 shadow p-3 m-3" style="max-width: 25rem;"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/2560px-BANK_BRI_logo.svg.png" class="img-fluid rounded" width="150" alt="bri"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="2000">
                            <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">No. Rekening 123456789</p>
                            <p class="card-text" style="font-size: 0.9rem;"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">a.n Lorem ipsum dolor</p>
                            <button class="btn btn-light btn-sm rounded-3 font-arabic" data-rek="123456789">Salin No. Rekening</button>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-hidden font-inside" id="gift"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">
                    <div class="row justify-content-center"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="2000">
                        <div class="col-12 card-body border rounded-4 shadow p-3 m-3"style="max-width: 25rem;"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJjAh42YvBECBVsT_HRjTsRWwuxdZlLG7bug&usqp=CAU" alt="Hadiah" class="img-fluid rounded" width="150"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="2000">
                            <ol>
                                <li class="card-text mt-3 mb-0" style="font-size: 0.9rem;"data-aos="fade-in" data-aos-delay="1000" data-aos-duration="3000">Hair Dryer</li>
                                <li class="card-text mt-3 mb-0" style="font-size: 0.9rem;"data-aos="fade-in" data-aos-delay="1000" data-aos-duration="3000">Microwave</li>
                                <li class="card-text mt-3 mb-0" style="font-size: 0.9rem;"data-aos="fade-in" data-aos-delay="1000" data-aos-duration="3000">Air Purifier</li>
                                <li class="card-text mt-3 mb-0" style="font-size: 0.9rem;"data-aos="fade-in" data-aos-delay="1000" data-aos-duration="3000">Vacuum Cleaner</li>
                            </ol>
                        </div>
                        <div class="col-12 card-body border rounded-4 shadow p-3 m-3"style="max-width: 25rem;"data-aos="fade-out" data-aos-delay="1000" data-aos-duration="3000">
                            <img src="https://cdn.pixabay.com/photo/2016/01/10/22/23/location-1132647_640.png" alt="alamat" class="img-fluid rounded" width="50"data-aos="fade-in" data-aos-delay="1000" data-aos-duration="3000">
                            <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;"data-aos="fade-in" data-aos-delay="1000" data-aos-duration="2000">Alamat Rumah</p>
                            <p class="card-text" style="font-size: 0.9rem;"data-aos="fade-in" data-aos-delay="1000" data-aos-duration="2000"> Jalan Padang Bulan No 101, Medan</p>
                            <p class="card-text" style="font-size: 0.9rem;"data-aos="fade-in" data-aos-delay="1000" data-aos-duration="2000"> No Telp: 08123456789</p>
                            <button class="btn btn-light btn-sm rounded-3 font-arabic" data-rek="Jalan Padang Bulan No 101, 08123456789">Salin Alamat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<script>
    var buttons = document.querySelectorAll("button[data-toggle]");

    buttons.forEach(function (button) {
        button.addEventListener("click", function () {
            var targetId = button.getAttribute("data-toggle");
            var targetElement = document.getElementById(targetId);

            if (!targetElement.classList.contains("active")) {
                // Add active class for fade-in effect
                targetElement.classList.add("active");
            } else {
                // Remove active class for fade-out effect
                targetElement.classList.remove("active");
            }

            // Close the other element
            var otherId = (targetId === "angpao") ? "gift" : "angpao";
            var otherElement = document.getElementById(otherId);

            // Remove active class from the other element
            otherElement.classList.remove("active");
        });
    });
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>


</html>
