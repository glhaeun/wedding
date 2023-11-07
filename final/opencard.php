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
</head>
<body>
    <div class="loading-page" id="welcome" style="opacity: 1;">
            <div class="d-flex justify-content-center align-items-center" style="height: 100vh !important;">

                <div class="text-center">
                    <h1 class="font-esthetic mb-4" style="font-size: 2.5rem;">The Wedding Of</h1>

                    <div class="img-crop border border-3 border-light shadow mb-4 mx-auto">
                        <img src="./assets/images/bg.jpeg" alt="bg">
                    </div>

                    <h1 class="font-esthetic my-4" style="font-size: 2.5rem;">Alexander</h1>
                    <div id="nama-tamu"></div>

                    <button type="button" class="btn btn-light shadow rounded-4 mt-4" onclick="util.buka()">
                        <i class="fa-solid fa-envelope-open me-2"></i>Buka Undangan
                    </button>
                </div>
            </div>
    </div>
</body>
</html>