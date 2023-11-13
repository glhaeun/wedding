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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <style>
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
        }

        .font-arabic {
            font-family: 'Enriqueta', serif !important;
            color: #000000 !important;
        }
    </style>
</head>
<body>
    <section id="lokasi">
        <div class="container">
            <div class="text-center">
            <h1 class="font-esthetic py-3" style="font-size: 2rem;">Wedding Information</h1>

                    <div class="overflow-x-hidden">
                        <div class="py-2">
                            <h4 class="font-esthetic" style="font-size: 2rem;">Holy Matrimony</h4>
                            <p>Sunday, 29 October 2023 at 09.00 am</p>
                            <p>Methodist Indonesia Church, Jl. M. T. Haryono No.38, Pusat Ps., Kec. Medan Kota, Kota Medan</p>
                            <a href="https://maps.google.com/?q=Methodist+Indonesia+Church,Jl.+M.+T.+Haryono+No.38,Pusat+Ps.,Kec.+Medan+Kota,Kota+Medan">Get directions using maps</a>
                        </div>

                        <div class="py-2">
                            <h4 class="font-esthetic" style="font-size: 2rem;">Reception</h4>
                            <p>Sunday, 29 October 2023 at 08.00 pm</p>
                            <p>Ballroom, Wisma Benteng restaurant Jl. Kapten Maulana Lubis No.6, Petisah Tengah, Kec. Medan Petisah, Kota Medan</p>
                            <a href="https://maps.google.com/?q=Ballroom,Wisma+Benteng+restaurant,Jl.+Kapten+Maulana+Lubis+No.6,Petisah+Tengah,Kec.+Medan+Petisah,Kota+Medan">Get directions using maps</a>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-4 mb-5" data-waktu="2024-01-01 00:00:00" id="tampilan-waktu">
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="hari">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Hari</small>
                            </div>
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="jam">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Jam</small>
                            </div>
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="menit">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Menit</small>
                            </div>
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="detik">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Detik</small>
                            </div>
                    </div>
            </div>
        </div>
    </section>
</body>

<script>
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