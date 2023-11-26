<?php
    $database = $connect->prepare("SELECT * FROM timeline");
    $database -> execute();

    $data = array();
    if ($database->rowCount() > 0) {
        $data = $database->fetch(PDO::FETCH_ASSOC);
    } 

?>

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
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Redressed&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <link rel="stylesheet" href="assets/style/timeline.css">

    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
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
<div class="golden-blur golden-blur-1"></div>
<div class="golden-blur golden-blur-4"></div>    
<div class="container py-4 my-4" data-aos="fade-left" data-aos-duration="2000">
    
    <div id="background-container">
        <div class="background-image"></div>
    </div>

    <div class="card-body border card-timeline  rounded-4 shadow p-3">

        <h1 class="font-esthetic text-center py-3 csstitle" id="timeline-title" style="font-size: 3rem;"  data-aos="fade-down" data-aos-duration="2000" data-aos-delay="100" >Our Love Story</h1>

        <div class="d-flex justify-content-center" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="500" >
            <img src="../user/assets/images/jason/12.png" alt="" class="crown img-fluid">
    <!-- <div class="container pb-2 pt-4" data-aos="fade-left" data-aos-duration="2000">
        <div id="background-container">
            <div class="background-image"></div>
        </div>

        <div class="card-body border rounded-4 shadow p-3">

            <h1 class="font-esthetic text-center py-3 csstitle" id="timeline-title" style="font-size: 3rem;"  data-aos="fade-down" data-aos-duration="2000" data-aos-delay="100" >Our Love Story</h1>

            <div class="d-flex justify-content-center" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="500" >
                <img src="../user/assets/images/jason/12.png" alt="" class="crown img-fluid"> -->
            </div>

            <div class="timeline-container py-2" data-aos="flip-down"  data-aos-delay="500" >

            <?php

            $database = $connect->prepare("SELECT * FROM timeline");
            $database -> execute();

            if($database->rowCount()>0){
                while ($fetch_data = $database ->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="row timeline-item">
                <div class="col-12 col-md-1">
                    <div class="timeline-bullet" onclick="showBoard(this)"></div>
                </div>
                <div class="col-12 col-md-10">
                    <div class="timeline-content">
                        <h4 class="font-arabic" id="timeline-desc"><?=$fetch_data['title']?> (<?=$fetch_data['year']?>)</h4>
                        <p class="font-inside" id="timeline-story"><?=$fetch_data['content']?></p>
                    </div>
                    <!-- Picture board code -->
                    <div class="board">
                        <?php if($fetch_data['imageA'] != '') { ?>
                        <img src="../images/<?= $fetch_data['imageA'] ?>" alt="" class="img-fluid slide-in-left" id="timeline-pic1"> <?php } ?>
                        <?php if($fetch_data['imageB'] != '') { ?>
                        <img src="../images/<?= $fetch_data['imageB'] ?>" alt="" class="img-fluid fade-in" id="timeline-pic2"> <?php } ?>
                        <?php if($fetch_data['imageC'] != '') { ?>
                        <img src="../images/<?= $fetch_data['imageC'] ?>" alt="" class="img-fluid slide-in-right" id="timeline-pic3"> <?php } ?>
                        <button class="close-button" onclick="closeBoard(this)"> X </button>
                    </div>
                    <!-- End of Picture board code -->
                </div>
            </div>
            <?php
            }
        }
        ?>
                <!-- <div class="row timeline-item">
                    <div class="col-12 col-md-1">
                        <div class="timeline-bullet" onclick="showBoard(this)"></div>
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="timeline-content">
                            <h4 class="font-arabic" id="timeline-desc">First Meet (2013)</h4>
                            <p class="font-inside" id="timeline-story">Bulan Agustus 2013, kami pertama kali bertemu pada Ospek Perkuliahan. Pada masa tersebut kami hanyalah teman biasa saja.</p>
                        </div>
                        Picture board code -->
                        <!-- <div class="board">
                            <img src="../user/assets/images/jason/bridegroom1.png" alt="" class="img-fluid slide-in-left" id="timeline-pic1">
                            <img src="../user/assets/images/jason/bridegroom2.png" alt="" class="img-fluid fade-in" id="timeline-pic2">
                            <img src="../user/assets/images/jason/bridegroom3.png" alt="" class="img-fluid slide-in-right" id="timeline-pic3">
                            <button class="close-button" onclick="closeBoard(this)"> X </button>
                        </div>
                        End of Picture board code -->
                    <!-- </div>
                </div>
                <div class="row timeline-item">
                    <div class="col-12 col-md-1">
                        <div class="timeline-bullet" onclick="showBoard(this)"></div>
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="timeline-content">
                            <h4 class="font-arabic">Relationship (2018)</h4>
                            <p class="font-inside">Tanggal 25 Februari 2018, kami mengikat janji sebagai sepasang kekasih.</p>
                        </div>
                        <div class="board">
                            <img src="../user/assets/images/jason/bridegroom1.png" alt="" class="img-fluid slide-in-left">
                            <img src="../user/assets/images/jason/bridegroom2.png" alt="" class="img-fluid fade-in">
                            <img src="../user/assets/images/jason/bridegroom3.png" alt="" class="img-fluid slide-in-right">
                            <button class="close-button" onclick="closeBoard(this)"> X </button>
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
                            <p class="font-inside">Lika-liku hubungan kami lalui bersama hingga kami memutuskan untuk bertunangan pada 25 Februari 2021.</p>
                        </div>
                    Picture board code -->
                    <!-- <div class="board">
                            <img src="../user/assets/images/jason/bridegroom1.png" alt="" class="img-fluid slide-in-left">
                            <img src="../user/assets/images/jason/bridegroom2.png" alt="" class="img-fluid fade-in">
                            <img src="../user/assets/images/jason/bridegroom3.png" alt="" class="img-fluid slide-in-right">
                            <button class="close-button" onclick="closeBoard(this)"> X </button>
                        </div>
                    End of Picture board code -->
                    <!-- </div>
                </div>
                <div class="row timeline-item">
                    <div class="col-12 col-md-1">
                        <div class="timeline-bullet" onclick="showBoard(this)"></div>
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="timeline-content">
                            <h4 class="font-arabic">Married (2023)</h4>
                            <p class="font-inside">Kami memutuskan untuk mengikat janji suci pernikahan pada 29 Oktober 2023</p>
                        </div>
                    Picture board code -->
                        <!-- <div class="board">
                            <img src="../user/assets/images/jason/bridegroom1.png" alt="" class="img-fluid slide-in-left">
                            <img src="../user/assets/images/jason/bridegroom2.png" alt="" class="img-fluid fade-in">
                            <img src="../user/assets/images/jason/bridegroom3.png" alt="" class="img-fluid slide-in-right">
                            <button class="close-button" onclick="closeBoard(this)"> X </button>
                        </div> -->
                        <!-- End of Picture board code -->
                    <!-- </div>
                </div>  --> 
            </div>
        </div>
    </div>
    <?php include 'divider.php' ?>
</section>

    <!-- <script>
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
    </script> -->

    <!-- <script>
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

        // Update the height of the parent row to accommodate the expanded content
        updateRowHeight(timelineItem);
    }

    function updateRowHeight(row) {
        const boardHeight = currentBoard.clientHeight;
        const originalRowHeight = row.clientHeight;

        // Update the row height by adding the height of the board
        row.style.height = `${originalRowHeight + boardHeight}px`;
    }
</script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->

    <script>
        AOS.init();
        // function showBoard(element) {
        //     // Get the parent timeline-item element
        //     var timelineItem = element.closest('.timeline-item');

        //     // Get the board inside the timeline-item
        //     var board = timelineItem.querySelector('.board');

        //     // Add animation class for sliding out to the right
        //     board.classList.add('slide-in-right');

        //     // Show the board by adding the appropriate classes
        //     board.classList.add('slide-in-left', 'fade-in');
        //     board.style.display = 'block';
            
        //     // Add the close-board class to the body to prevent scrolling
        //     document.body.classList.add('close-board');
        // }

        // function closeBoard(element) {
        //     // Get the board element
        //     var board = element.closest('.board');

        //     // Hide the board by removing the classes
        //     board.classList.remove('slide-in-left', 'fade-in');

        //     // Add animation class for sliding out to the right
        //     board.classList.add('slide-in-right');

        //     // Set a timeout to remove the display property after the animation completes
        //     setTimeout(function () {
        //         board.style.display = 'none';

        //         // Remove all animation classes
        //         board.classList.remove('slide-in-left', 'slide-in-right', 'fade-in');

        //         // Remove the close-board class from the body
        //         document.body.classList.remove('close-board');
        //     }, 1500); // Adjust the timeout duration to match your animation duration
        // }

        // Add this JavaScript code to your existing script tag

        // Add this JavaScript code to your existing script tag

        // function showBoard(element) {
        //     // Get the parent timeline-item element
        //     var timelineItem = element.closest('.timeline-item');

        //     // Get the board inside the timeline-item
        //     var board = timelineItem.querySelector('.board');

        //     // Check if the board is already visible
        //     if (board.style.display === 'block') {
        //         return; // If visible, do nothing
        //     }

        //     // Add animation class for sliding out to the right
        //     board.classList.add('slide-in-right');

        //     // Show the board by adding the appropriate classes
        //     board.classList.add('slide-in-left', 'fade-in');
        //     board.style.display = 'block';

        //     // Add the close-board class to the body to prevent scrolling
        //     document.body.classList.add('close-board');
        // }

        // function closeBoard(element) {
        //     // Get the board element
        //     var board = element.closest('.board');

        //     // Hide the board by removing the classes
        //     board.classList.remove('slide-in-left', 'fade-in');

        //     // Add animation class for sliding out to the right
        //     board.classList.add('slide-in-right');

        //     // Set a timeout to remove the display property after the animation completes
        //     setTimeout(function () {
        //         board.style.display = 'none';

        //         // Remove all animation classes
        //         board.classList.remove('slide-in-left', 'slide-in-right', 'fade-in');

        //         // Remove the close-board class from the body
        //         document.body.classList.remove('close-board');
        //     }, 1500); // Adjust the timeout duration to match your animation duration
        // }

        function showBoard(bullet) {
            // Find the closest timeline-item to the clicked bullet
            var timelineItem = bullet.closest('.timeline-item');

            // Find all other open boards and close them
            var allBoards = document.querySelectorAll('.board');
            allBoards.forEach(function (board) {
                if (board !== timelineItem.querySelector('.board')) {
                    board.style.display = 'none';
                }
            });

            // Find the board within the timeline-item
            var board = timelineItem.querySelector('.board');

            // Show the board
            board.style.display = 'block';
        }

        function closeBoard(button) {
            // Find the closest timeline-item to the clicked close button
            var timelineItem = button.closest('.timeline-item');

            // Find the board within the timeline-item
            var board = timelineItem.querySelector('.board');

            // Hide the board
            board.style.display = 'none';
        }
    </script>

</body>
</html>