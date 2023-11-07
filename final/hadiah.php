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
        #angpao, #gift {
            display: none; /* Initially hide the angpao element */
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
    <section id="hadiah">
        <div class="container">
            <div class="text-center">
            <h1 class="font-esthetic mt-0 mb-3" style="font-size: 3rem;">Hadiah</h1>
                    <p class="mb-1" style="font-size: 0.9rem;">
                        Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk kami,
                        dapat melalui :
                    </p>

                <button data-toggle="angpao" class="btn btn-light btn-sm rounded-3">Send Angpao</button>
                <button data-toggle="gift" class="btn btn-light btn-sm rounded-3">Send Gift</button>


                    <div class="overflow-x-hidden" id="angpao">
                        <div class="row justify-content-center">

                            <div class="col-12 card-body border rounded-4 shadow p-3 m-3" style="max-width: 25rem;">
                                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png" class="img-fluid rounded" width="150" alt="bni">

                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">No. Rekening 123456789</p>
                                <p class="card-text" style="font-size: 0.9rem;">a.n Lorem ipsum dolor</p>

                                <button class="btn btn-light btn-sm rounded-3" data-rek="123456789">Salin No. Rekening</button>
                            </div>

                            <div class="col-12 card-body border rounded-4 shadow p-3 m-3" style="max-width: 25rem;" >
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/2560px-BANK_BRI_logo.svg.png" class="img-fluid rounded" width="150" alt="bri">

                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">No. Rekening 123456789</p>
                                <p class="card-text" style="font-size: 0.9rem;">a.n Lorem ipsum dolor</p>

                                <!-- Ubah juga data-nomer sesuai dengan no rekening -->
                                <button class="btn btn-light btn-sm rounded-3" data-rek="123456789">Salin No. Rekening</button>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-hidden" id="gift">
                        <div class="row justify-content-center">

                            <div class="col-12 card-body border rounded-4 shadow p-3 m-3" style="max-width: 25rem;">

                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">No. Rekening 123456789</p>
                                <p class="card-text" style="font-size: 0.9rem;">a.n Lorem ipsum dolor</p>

                                <button class="btn btn-light btn-sm rounded-3" data-rek="123456789">Salin No. Rekening</button>
                            </div>

                            
                        </div>
                    </div>
            </div>
        </div>
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
</html>


