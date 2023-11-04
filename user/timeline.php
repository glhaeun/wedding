<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="assets/style/timeline.css">
</head>
<body>
    <h3>Our Love Story</h3>
    <img src="assets/images/jason/12.png" alt="" class="crown">

    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-bullet"></div>
            <div class="timeline-content">
                <h4>First Meet (2013)</h4>
                <p>Bulan Agustus 2013, kami pertama kali bertemu pada Ospek Perkuliahan. Pada masa tersebut kami hanyalah teman biasa saja.</p>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-bullet"></div>
            <div class="timeline-content">
                <h4>Relationship (2018)</h4>
                <p>Tanggal 25 Februari 2018, kami mengikat janji sebagai sepasang kekasih.</p>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-bullet"></div>
            <div class="timeline-content">
                <h4>Engagement (2021)</h4>
                <p>Lika-liku hubungan kami lalui bersama hingga kami memutuskan untuk bertunangan pada 25 Februari 2021.</p>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-bullet"></div>
            <div class="timeline-content">
                <h4>Married (2023)</h4>
                <p>Kami memutuskan untuk mengikat janji suci pernikahan pada 29 Oktober 2023</p>
            </div>
        </div>
    </div>

    <script>
        const timeline = document.querySelector('.timeline');
        const timelineItems = document.querySelectorAll('.timeline-item');

        timelineItems.forEach((item, index, items) => {
            if (index > 0) {
                const connector = document.createElement('div');
                connector.classList.add('timeline-connector');
                item.insertBefore(connector, item.querySelector('.timeline-bullet'));

                if (index === items.length - 1) {
                    // Adjust the connector position for the last item
                    connector.style.top = '50%';
                }
            }
        });
    </script>
</body>
</html>