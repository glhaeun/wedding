<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="assets/style/timeline.css">
</head>
<body>
    <div id="timeline">
    <h3>Our Love Story</h3>
    
    <img src="assets/images/jason/12.png" alt="" class="crown">

    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-bullet"></div>
            <div class="timeline-content">
                <h4 class=".timeline-h4">First Meet (2013)</h4>
                <p class=".timeline-p">Bulan Agustus 2013, kami pertama kali bertemu pada Ospek Perkuliahan. Pada masa tersebut kami hanyalah teman biasa saja.</p>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-bullet"></div>
            <div class="timeline-content">
                <h4 class=".timeline-h4">Relationship (2018)</h4>
                <p class=".timeline-p">Tanggal 25 Februari 2018, kami mengikat janji sebagai sepasang kekasih.</p>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-bullet"></div>
            <div class="timeline-content">
                <h4 class=".timeline-h4">Engagement (2021)</h4>
                <p class=".timeline-p">Lika-liku hubungan kami lalui bersama hingga kami memutuskan untuk bertunangan pada 25 Februari 2021.</p>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-bullet"></div>
            <div class="timeline-content">
                <h4 class=".timeline-h4">Married (2023)</h4>
                <p class=".timeline-p">Kami memutuskan untuk mengikat janji suci pernikahan pada 29 Oktober 2023</p>
            </div>
        </div>
    </div>
    </div>
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