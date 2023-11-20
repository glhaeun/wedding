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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Redressed&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <style>
        .line {
            width: 300px; 
            height: auto;
            margin-top: -40px;
            margin-bottom: 0px;
            /* border: 1px solid black; */
        }

        .img-crop {
            width: 14rem;
            height: 14rem;
            position: relative;
            overflow: none;
            border-radius: 50%;
        }

        .img-crop>img {
            display: inline;
            margin: 0 auto;
            height: auto;
            width: 100%;
        }
        .font-esthetic {
            font-family: 'Ephesis', cursive !important;
            color: #000000 !important;
            font-size: 3.8rem;
        }

        .font-arabic {
            font-family: 'Enriqueta', serif !important;
            color: #000000 !important;
        }

        .font-inside {
        font-family: 'Asul';
        }
    </style>
</head>
<body>
    <section id="lokasi">
        <div class="container mt-5" data-aos="flip-left" data-aos-duration="2000">
            <div class="text-center ">
            <h1 class="font-esthetic py-3" >Wedding Information</h1>

            <div class="d-flex justify-content-center mb-3">
                <img src="../user/assets/images/darren/Asset 1@4xa.png" alt="" class="line img-fluid">
            </div>

                    <div class="overflow-x-hidden mt-5">
                        <div class="py-2 mb-4">
                            <h4 class="font-arabic" style="font-size: 2rem;">Holy Matrimony</h4>
                            <p class="font-inside"><?= isset($data['holymatrimony_formatedDate']) ? $data['holymatrimony_formatedDate'] : '[Tanggal Holy Matrimony]'; ?></p>
                            <p class="font-inside"><?= isset($data['holymatrimony_address']) ? $data['holymatrimony_address'] : '[Alamat Holy Matrimony]'; ?></p>
                            <a class="font-inside" href="<?= isset($data['holymatrimony_map']) ? $data['holymatrimony_map'] : '#'; ?>">
    <img src="../user/assets/images/darren/image-url11.png">
</a>


                        </div>

                        <div class="py-2 mb-4">
                            <h4 class="font-arabic" style="font-size: 2rem;">Reception</h4>
                            <p class="font-inside"><?= isset($data['reception_formatedDate']) ? $data['reception_formatedDate'] : '[Tanggal Reception]'; ?></p>
                            <p class="font-inside"><?= isset($data['reception_address']) ? $data['reception_address'] : '[Alamat Reception]'; ?></p>
                            <a class="font-inside" href="<?= isset($data['reception_map']) ? $data['reception_map'] : '#'; ?>">    <img src="../user/assets/images/darren/image-url11.png">
</a>
                        </div>
                    </div>

                    <!-- <h1 class="font-esthetic py-3 font-arabic" style="font-size: 2rem;">Countdown for event: </h1> -->
                    <div class="border rounded-pill shadow py-2 px-4 mx-2 mb-4">

                        <div class="row justify-content-center mt-4 mb-5" data-waktu="<?= $data['date'] ?>" id="tampilan-waktu">
                                <div class="col-3 p-1">
                                    <h2 class="d-inline m-0 p-0 font-inside" id="hari">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Hari</small>
                                </div>
                                <div class="col-3 p-1">
                                    <h2 class="d-inline m-0 p-0 font-inside" id="jam">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Jam</small>
                                </div>
                                <div class="col-3 p-1">
                                    <h2 class="d-inline m-0 p-0 font-inside" id="menit">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Menit</small>
                                </div>
                                <div class="col-3 p-1">
                                    <h2 class="d-inline m-0 p-0 font-inside" id="detik">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Detik</small>
                                </div>
                        </div>
                    </div>
            </div>
        </div>
        <?php include 'divider.php' ?>
    </section>
</body>

<script>
    AOS.init();

    const eventDate = new Date(document.querySelector('#tampilan-waktu').getAttribute('data-waktu')).getTime();

    setInterval(updateCountdown, 1000);

    function updateCountdown() {
            const now = new Date();
            const timeDifference = eventDate - now;

            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            document.querySelector('#hari').textContent = days;
            document.querySelector('#jam').textContent = hours;
            document.querySelector('#menit').textContent = minutes;
            document.querySelector('#detik').textContent = seconds;
        }

</script>
</html>