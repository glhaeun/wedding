<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .event {
            margin-top: 50px;
        }

        .countdown {
            font-size: 30px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Holy Matrimony</h1>
    <p>Sunday, 29 October 2023 at 09.00 am</p>
    <p>Methodist Indonesia Church, Jl. M. T. Haryono No.38, Pusat Ps., Kec. Medan Kota, Kota Medan</p>
    <a href="https://maps.google.com/?q=Methodist+Indonesia+Church,Jl.+M.+T.+Haryono+No.38,Pusat+Ps.,Kec.+Medan+Kota,Kota+Medan">Get directions using maps</a>

    <div class="event">
        <h1>Reception</h1>
        <p>Sunday, 29 October 2023 at 08.00 pm</p>
        <p>Ballroom, Wisma Benteng restaurant Jl. Kapten Maulana Lubis No.6, Petisah Tengah, Kec. Medan Petisah, Kota Medan</p>
        <a href="https://maps.google.com/?q=Ballroom,Wisma+Benteng+restaurant,Jl.+Kapten+Maulana+Lubis+No.6,Petisah+Tengah,Kec.+Medan+Petisah,Kota+Medan">Get directions using maps</a>
    </div>

    <div class="countdown" id="countdown"></div>

    <script>
        // Set the date and time of the event
        const eventDate = new Date('2023-10-29T09:00:00');

        // Update the countdown every second
        setInterval(updateCountdown, 1000);

        function updateCountdown() {
            const now = new Date();
            const timeDifference = eventDate - now;

            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            const countdownElement = document.getElementById('countdown');
            countdownElement.innerHTML = `Countdown: ${days}d ${hours}h ${minutes}m ${seconds}s`;
        }
    </script>
</body>
</html>
