<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
            width: 300px; 
            height: 65px;
            margin-top: -40px;
            margin-bottom: 0px;
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
            margin-right: 5px;
            flex: 0 0 20px; 
            cursor: pointer;
        }

        .board {
            position: absolute;
            top: 7%0;
            left: 25%;
            width: 50%;
            height: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            background-image: url(../user/assets/images/jason/4.png);
            background-size: cover; /* Set the background image to cover the entire board */
            display: none;
            border-radius: 20px 0 20px 0;
        }

        .board img {
            width: 30%;
            margin-top: 25px;
            margin-left: 10px;
            margin-right: 10px;
            float: left;
            opacity: 0; /* Set initial opacity to 0 for fade-in effect */
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out; /* Add transition for opacity and transform */
        }

        .slide-in-left {
            animation: slide-in-left 1.5s cubic-bezier(0.25, 0.45, 0.45, 0.95) both;
        }

        .fade-in {
            animation: fade-in 1.5s ease-in-out both;
        }

        .slide-in-right {
            animation: slide-in-right 1.5s cubic-bezier(0.25, 0.45, 0.45, 0.95) both;
        }

        @keyframes slide-in-left {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0%);
                opacity: 1;
            }
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes slide-in-right {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0%);
                opacity: 1;
            }
        }

        /* .close-board {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 30px;
            cursor: pointer;
        } */

        .close-button {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px;
            cursor: pointer;
        }

        .close-button:hover {
            background-color: #C79856;
        }

        .timeline-content {
            max-width: 400px; /* Set a maximum width */
            /* margin-left: 30px; Adjust margin for better spacing */
            /* border: 1px solid black; */
            text-align: justify;
        }

        /* .timeline-connector {
            position: absolute;
            background-color: #C79856;
            width: 2px;
            left: 2.5%;
            top: 0;
            bottom: 0;
            transform: translateX(-50%);
            z-index: -1;
        } */

        /* .board {
            position: absolute;
            background-color: white;
            border: 1px solid black;
            padding: 10px;
            display: none;
            }

        .board-close-button {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
        } */

        @media (max-width: 768px) {
            .font-esthetic {
                font-size: 1.5rem;
            }

            .timeline-content {
                max-width: 100%;
                margin-left: 0;
            }

            .board {
                flex-direction: column;
                width: 75%; /* Adjust the width as needed */
                height: auto;
                left: 10%; /* Adjust the left position as needed */
            }

            .board img {
                width: 75%; /* Make the images fill the width of the board */
                margin-left: 10%; /*Add space between images*/
                margin-top: 10px; /* Add space between images */
            }
        }
    </style>
</head>
<body>
    <!-- <section id="timeline">
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
</head> -->

<section id="timeline">

<div class="container pb-2 pt-4">

    <div class="card-body border rounded-4 shadow p-3">

        <h1 class="font-esthetic text-center py-3" style="font-size: 3rem;">Our Love Story</h1>

        <div class="d-flex justify-content-center">
            <img src="../user/assets/images/jason/12.png" alt="" class="crown img-fluid">
        </div>

        <div class="timeline py-2">
            <div class="row">
                <div class="col-12 col-md-1">
                    <div class="timeline-bullet" onclick="showBoard(this)"></div>
                </div>
                <div class="col-12 col-md-10">
                    <div class="timeline-content">
                        <h4 class="font-arabic">First Meet (2013)</h4>
                        <p class="font-arabic">Bulan Agustus 2013, kami pertama kali bertemu pada Ospek Perkuliahan. Pada masa tersebut kami hanyalah teman biasa saja.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-1">
                    <div class="timeline-bullet" onclick="showBoard(this)"></div>
                </div>
                <div class="col-12 col-md-10">
                    <div class="timeline-content">
                        <h4 class="font-arabic">Relationship (2018)</h4>
                        <p class="font-arabic">Tanggal 25 Februari 2018, kami mengikat janji sebagai sepasang kekasih.</p>
                </div>
                </div>
            </div>
            <div class="row timeline-item">
                <div class="col-12 col-md-1">
                    <div class="timeline-bullet" onclick="showBoard(this)"></div>
                </div>
                <div class="col-12 col-md-10">
                    <div class="timeline-content">
                    <h4 class="font-arabic">Engagement (2021)</h4>
                    <p class="font-arabic">Lika-liku hubungan kami lalui bersama hingga kami memutuskan untuk bertunangan pada 25 Februari 2021.</p>
                </div>
                </div>
            </div>
            <div class="row timeline-item">
                <div class="col-12 col-md-1">
                    <div class="timeline-bullet" onclick="showBoard(this)"></div>
                </div>
                <div class="col-12 col-md-10">
                    <div class="timeline-content">
                    <h4 class="font-arabic">Married (2023)</h4>
                    <p class="font-arabic">Kami memutuskan untuk mengikat janji suci pernikahan pada 29 Oktober 2023</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'divider.php' ?>
</section>

    <script>
        // const timelineItems = document.querySelectorAll('.timeline-item');
        // const timelineConnectors = [];

        // timelineItems.forEach((item, index) => {
        //     const connector = document.createElement('div');
        //     connector.classList.add('timeline-connector');
        //     item.insertBefore(connector, item.querySelector('.timeline-bullet'));
        //     timelineConnectors.push(connector);

        //     if (index === timelineItems.length - 1) {
        //         connector.style.top = '50%';
        //         connector.style.bottom = '0';
        //     }
        // });

        // let board;

        // // Get all timeline bullets
        // const timelineBullets = document.querySelectorAll('.timeline-bullet');

        // // Add an event listener to each timeline bullet
        // timelineBullets.forEach(bullet => {
        //     bullet.addEventListener('click', () => {
        //         // Create a new board element
        //         const board = document.createElement('div');
        //         board.classList.add('board');

        //         // Add three pictures to the board
        //         const picture1 = document.createElement('img');
        //         picture1.src = '../user/assets/images/jason/12.png';
        //         board.appendChild(picture1);

        //         const picture2 = document.createElement('img');
        //         picture2.src = '../user/assets/images/jason/12.png';
        //         board.appendChild(picture2);

        //         const picture3 = document.createElement('img');
        //         picture3.src = '../user/assets/images/jason/12.png';
        //         board.appendChild(picture3);

        //         // Append the board to the body of the document
        //         document.body.appendChild(board);

        //         // Position the board next to the timeline bullet
        //         board.style.left = bullet.getBoundingClientRect().left + 'px';
        //         board.style.top = bullet.getBoundingClientRect().top + 'px';
        //     });
        // });

        // // Get the close button element
        // const closeButton = document.querySelector('.board-close-button');

        // // Add an event listener to the close button
        // closeButton.addEventListener('click', () => {
        //     // Remove the board element from the body of the document
        //     document.body.removeChild(board);
        // });

        // function showBoard(button) {
        //     // Create a new board element
        //     const board = document.createElement('div');
        //     board.classList.add('board');

        //     // Add three pictures to the board
        //     const picture1 = document.createElement('img');
        //     picture1.src = '../user/assets/images/jason/12.png';
        //     board.appendChild(picture1);

        //     const picture2 = document.createElement('img');
        //     picture2.src = '../user/assets/images/jason/12.png';
        //     board.appendChild(picture2);

        //     const picture3 = document.createElement('img');
        //     picture3.src = '../user/assets/images/jason/12.png';
        //     board.appendChild(picture3);

        //     // **Create a close button inside the board element**
        //     const closeButton = document.createElement('div');
        //     closeButton.classList.add('board-close-button');
        //     closeButton.innerHTML = '&times;';
        //     closeButton.addEventListener('click', () => {
        //         // Remove the board element from the body of the document
        //         document.body.removeChild(board);
        //     });
        //     board.appendChild(closeButton);

        //     // Append the board to the body of the document
        //     document.body.appendChild(board);

        //     // Log for debugging
        //     console.log('Board appended to body');

        //     // Position the board next to the clicked button
        //     const buttonRect = button.getBoundingClientRect();
        //     board.style.left = buttonRect.left + 'px';
        //     board.style.top = buttonRect.top + 'px';
        // }

        let currentBoard = null;

        function showBoard(timelineBullet) {
            // Close the currently open board if there is one
            if (currentBoard) {
                currentBoard.style.display = "none";
                currentBoard = null;
            }

            // Get the parent element of the timeline bullet
            const timelineItem = timelineBullet.parentElement;

            // Disable the timeline bullet while the board is visible
            timelineBullet.style.pointerEvents = "none";

            // Create a new element for the board
            const board = document.createElement("div");
            board.classList.add("board");

            // Add 3 image elements to the board
            for (let i = 0; i < 3; i++) {
                const image = document.createElement("img");
                image.src = "../user/assets/images/jason/bridegroom" + (i + 1) + ".png";
                image.classList.add("img-fluid");
                board.appendChild(image);
            }

            // Add the 'show' class to the board to trigger the fade-in effect
            board.classList.add("show");

            // Add animation classes to the images for sliding and fading effects
            const images = board.querySelectorAll("img");
            images[0].classList.add("slide-in-left");
            images[1].classList.add("fade-in");
            images[2].classList.add("slide-in-right");

            // Create a new element for the close button
            const closeButton = document.createElement("button");
            closeButton.classList.add("close-button");
            closeButton.textContent = " X ";

            // Add the close button to the board
            board.appendChild(closeButton);

           // Add an event listener to the close button to close the board when it is clicked
            closeButton.addEventListener("click", function () {
                board.style.display = "none";
                // Enable the timeline bullet when the board is closed
                timelineBullet.style.pointerEvents = "auto";
                currentBoard = null;
            });

            // Add the board to the timeline item
            timelineItem.appendChild(board);

            // Make the board visible
            board.style.display = "block";

            // Update the currently open board
            currentBoard = board;
        }
    </script>
</body>
</html>