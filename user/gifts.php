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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <style>
        #angpao, #gift {
            display: none; /* Initially hide the angpao element */
        }
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

    </style>
</head>
<body>
    <section id="hadiah">
        <div class="container">
            <div class="text-center mt-5 mb-5">
            <h1 class="font-esthetic mt-0 mb-3 yellow" style="font-size: 3rem;">Hadiah</h1>
                    <p class="mb-1 font-inside" style="font-size: 0.9rem;">
                        Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk kami,
                        dapat melalui :
                    </p>

               <div class="button-container">
            <button data-toggle="angpao" class="btn btn-light btn-sm rounded-3 font-arabic">Send Angpao</button>
            <button data-toggle="gift" class="btn btn-light btn-sm rounded-3 font-arabic">Send Gift</button>
        </div>

        <div class="image-container">
            <img src="user/assets/images/elvina/heartpanjang.png" alt="HeartPanjang">
        </div>
                    <div class="overflow-x-hidden font-inside" id="angpao">
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

                                <!-- Ubah juga data-nomer sesuai dengan no rekening -->
                                <button class="btn btn-light btn-sm rounded-3 font-arabic" data-rek="123456789">Salin No. Rekening</button>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-hidden font-inside" id="gift">
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
                                <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fpng.pngtree.com%2Felement_our%2F20200702%2Fourlarge%2Fpngtree-address-icon-image_2290344.jpg&tbnid=bL5U8oHkBbG9GM&vet=10CBsQMyh0ahcKEwiQhvCY2MKCAxUAAAAAHQAAAAAQHQ..i&imgrefurl=https%3A%2F%2Fid.pngtree.com%2Ffreepng%2Faddress-icon_5462492.html&docid=3a_-kybEb3hrgM&w=640&h=640&q=foto%20alamat&ved=0CBsQMyh0ahcKEwiQhvCY2MKCAxUAAAAAHQAAAAAQHQ" class="img-fluid rounded" width="150" alt="alamat">

                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">Alamat Rumah</p>
                                <p class="card-text" style="font-size: 0.9rem;"> Jalan Padang Bulan No 101, Medan</p></p>
                                <p class="card-text" style="font-size: 0.9rem;"> No Telp: 08123456789</p></p>
                                <!-- Ubah juga data-nomer sesuai dengan no rekening -->
                                <button class="btn btn-light btn-sm rounded-3 font-arabic" data-rek="Jalan Padang Bulan No 101, 08123456789">Salin Alamat</button>
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
</html>
