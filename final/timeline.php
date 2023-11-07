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
        .font-esthetic {
            font-family: 'Ephesis', cursive !important;
            color: #000000 !important;
        }

        .font-arabic {
            font-family: 'Enriqueta', serif !important;
            color: #000000 !important;
        }

        .crown {
            width: 325px; 
            height: 65px;
            margin-top: -10px;
            margin-bottom: 50px;
            /* border: 1px solid black; */
        } 

    .timeline {
        margin: 20px;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
    }


.timeline-bullet {
    width: 20px;
    height: 20px;
    background-color: #C79856;
    border-radius: 50%;
    margin-right: 10px;
    flex: 0 0 20px; 
}

.timeline-content {
    width: 400px;
    /* border: 1px solid black; */
}



.timeline-connector {
    position: absolute;
    background-color: #C79856;
    width: 2px;
    left: 2.5%;
    top: 0;
    bottom: 0; /*Adjust connector height*/
    transform: translateX(-50%);
    z-index: -1; /*Put connector behind the bullet*/
}


    </style>
</head>
<body>
    <section id="timeline">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="../user/assets/style/test.css">

    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic&display=swap">
</head>

<section id="timeline">

<div class="container pb-2 pt-4">

    <div class="card-body border rounded-4 shadow p-3">

            <h1 class="font-esthetic text-center py-3" style="font-size: 2rem;">Our Love Story</h1>

            <div class="d-flex justify-content-center">
            <img src="../user/assets/images/jason/12.png" alt="" class="crown img-fluid">
            </div>

        <div class="timeline py-2">
        <div class="row">
            <div class="col-12 col-md-1">
                <div class="timeline-bullet"></div>
            </div>
            <div class="col-12 col-md-10">
                <div class="timeline-content">
                    <h4 >First Meet (2013)</h4>
                    <p >Bulan Agustus 2013, kami pertama kali bertemu pada Ospek Perkuliahan. Pada masa tersebut kami hanyalah teman biasa saja.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-1">
                <div class="timeline-bullet"></div>
            </div>
            <div class="col-12 col-md-10">
                <div class="timeline-content">
                    <h4>Relationship (2018)</h4>
                    <p>Tanggal 25 Februari 2018, kami mengikat janji sebagai sepasang kekasih.</p>
            </div>
            </div>
        </div>
        <div class="row timeline-item">
            <div class="col-12 col-md-1">
                <div class="timeline-bullet"></div>
            </div>
            <div class="col-12 col-md-10">
                <div class="timeline-content">
                <h4>Engagement (2021)</h4>
                <p>Lika-liku hubungan kami lalui bersama hingga kami memutuskan untuk bertunangan pada 25 Februari 2021.</p>
            </div>
            </div>
        </div>
        <div class="row timeline-item">
            <div class="col-12 col-md-1">
                <div class="timeline-bullet"></div>
            </div>
            <div class="col-12 col-md-10">
                <div class="timeline-content">
                <h4>Married (2023)</h4>
                <p>Kami memutuskan untuk mengikat janji suci pernikahan pada 29 Oktober 2023</p>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>
</section>

    <script>
        const timelineItems = document.querySelectorAll('.timeline-item');
        const timelineConnectors = [];

        timelineItems.forEach((item, index) => {
            const connector = document.createElement('div');
            connector.classList.add('timeline-connector');
            item.insertBefore(connector, item.querySelector('.timeline-bullet'));
            timelineConnectors.push(connector);

            if (index === timelineItems.length - 1) {
                connector.style.top = '50%';
                connector.style.bottom = '0';
            }
        });
    </script>
</body>
</html>