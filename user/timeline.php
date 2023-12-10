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

    <link rel="stylesheet" href="assets/style/timelinenew.css">
</head>
<body>
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
                </div>

                <div class="timeline-container py-2" data-aos="flip-down"  data-aos-delay="500">
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

                                <div class="board">
                                    <?php if($fetch_data['imageA'] != '') { ?>
                                    <img src="../images/<?= $fetch_data['imageA'] ?>" alt="" class=" slide-in-left foto" id="timeline-pic1"> <?php } ?>
                                    <?php if($fetch_data['imageB'] != '') { ?>
                                    <img src="../images/<?= $fetch_data['imageB'] ?>" alt="" class=" fade-in foto" id="timeline-pic2"> <?php } ?>
                                    <?php if($fetch_data['imageC'] != '') { ?>
                                    <img src="../images/<?= $fetch_data['imageC'] ?>" alt="" class=" slide-in-right foto" id="timeline-pic3"> <?php } ?>
                                    <button class="close-button" onclick="closeBoard(this)"> X </button>
                                </div>                        
                            </div>
                        </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>

        <?php include 'divider.php' ?>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        function showBoard(bullet) {
            var timelineItem = bullet.closest('.timeline-item');            
            var allBoards = document.querySelectorAll('.board');

            allBoards.forEach(function (board) {
                if (board !== timelineItem.querySelector('.board')) {
                    board.style.display = 'none';
                }
            });

            var board = timelineItem.querySelector('.board');
            board.style.display = 'block';
        }

        function closeBoard(button) {
            var timelineItem = button.closest('.timeline-item');
            var board = timelineItem.querySelector('.board');
            board.style.display = 'none';
        }
    </script>
</body>
</html>