<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Redressed&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Fasthand&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

<style>
      #scratch {
          background-image: url(./assets/images/ziven/landingBackground.webp);
          background-size: cover;
          background-position: center center;
          overflow: hidden;
          overflow-y: hidden;
      }

        .font-esthetic {
          font-family: 'Ephesis', cursive !important;
          /* color: #ffd700 !important; Change to gold/yellow color */
      }

      .font-arabic {
          font-family: 'Enriqueta', serif !important;
          /*  Change to gold/yellow color */
      }
      .font-inside, .code {
        font-family: 'Asul';
        }

        .main-heading {
        color: #000;
        }

        .scratch-container {
        width: 300px;
        height: 150px;
        border-radius: 8px;
        margin-bottom: 32px;
        overflow: hidden;
        position: relative;
        place-items: center;
        }
        @media screen and (max-width: 740px) {
          .scratch-container {
        width : auto;
        height: 300px;
        border-radius: 8px;
        margin-bottom: 32px;
        overflow: hidden;
        position: relative;
        place-items: center;
        }
        }

        .scratch-card {
        position: absolute;
        inset: 0;
        display: grid;
        place-items: center;
        font-size: 24px;
        font-weight: bold;
        letter-spacing: 2px;
        }

        canvas {
        position: absolute;
        cursor: grabbing;
        }
        .prize-container {
          position: relative;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          text-align: center;
          overflow: hidden;
        }

    .prize-image {
      margin-top: 10px;
      position: relative;
      overflow: hidden;
    }
    .stage {
    background: none;
    width: 300px;
    position: relative;
  }
  
  .stage-content {
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;

    /* padding-top: 68%; */
    /* background-image: url('assets/images/darren/image-url7.jpg'); */
  }

  .stage-content img {
    width: auto;
    height: 200px;
  }
  /* .stage-content1 {
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    padding-top: 68%;
    background-image: url('assets/images/darren/image-url8.jpg');
  }
  .stage-content2 {
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    padding-top: 68%;
    background-image: url('assets/images/darren/image-url9.jpg');
  } */
  
  
  .curtain-container {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
  }
  
  .curtain-panel {
    display: flex;
    height: 103%;
    width: 100%;
    cursor: pointer;
    overflow: hidden;
  }
  
  .curtain-panel .curtain {
    width: 50%;
    background-image: url('assets/images/darren/image-url10.jpg');
    position: relative;
    transition: transform 0.5s ease-out;
    display: flex;
    align-items: center;
    overflow: hidden;
  }
  
  .curtain-panel .curtain:before {
    content: attr(data-title);
    text-align: center;
    width: 200%;
    position: absolute;
    top: 50%;
    line-height: 0;
    font-size: 1.1em;
    text-shadow: 1px 1px 3px #ccc;
  }
  
  .curtain-panel .left-curtain:before {
    left: 0;
  }
  
  .curtain-panel .right-curtain:before {
    right: 0;
  }
  
  .curtain-panel .curtain:after {
    content: '';
    background-size: 20px 20px;
    background-image: radial-gradient(circle at 10px -5px, rgba(0, 0, 0, 0) 12px, #ffffff00 13px);
    display: block;
    height: 10px;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
  }
  
  .curtain-trigger {
    visibility: hidden;
    position: absolute;
  }
  
  .curtain-trigger:checked ~ .left-curtain {
    transform: translateX(calc(-100%));
  }
  
  .curtain-trigger:checked ~ .right-curtain {
    transform: translateX(calc(100%));
  }


    </style>
</head>

<body class="bg-light">
  <section id="scratch">

    <div class="container mt-5 ">
    <h1 class="text-center font-esthetic csstitle" data-aos="fade-down-left" data-aos-duration="2000">Lucky Draw</h1>
    <p class="text-center font-inside" data-aos="fade-down-left" data-aos-duration="2000">
    Gunakan kursor pada perangkat komputer atau gesek layar dengan jari pada perangkat seluler untuk mengungkap area yang ditentukan pada kartu. Perhatikan dan simpan huruf atau angka yang terungkap setelah penggosokan.
    </p>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">
          <?php
          if (isset($email)) {
            $select_user = $connect->prepare("SELECT * FROM user where email='$email'");
            $select_user -> execute();

            if($select_user->rowCount()>0){
              while ($fetch_user = $select_user ->fetch(PDO::FETCH_ASSOC)){
              $query = "SELECT * FROM prize";
              $getPrize = $connect->prepare($query);
              $getPrize->execute();
              $index = 1;
              if ($getPrize->rowCount() > 0) {
                while ($row = $getPrize->fetch(PDO::FETCH_ASSOC)) {
                  ?>
                  <div class="col-md-4" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="500">
                      <h3 class="font-arabic text-center">Scratch Card <?=$index?></h3>
                      <div class="scratch-container">
                          <div class="scratch-card text-center">
                              <div class="code"><?= isset($fetch_user['kode_'.$row['id']])? $fetch_user['kode_'.$row['id']]: '123456789' ?></div>
                          </div>
                          <canvas id="scratch-card<?=$index?>" class="w-100" height="160"></canvas>
                      </div>
                  </div>
                  <script>
                            (function() {
                      const currentIndex = <?= json_encode($index) ?>;
                      const createScratchCard<?= $index ?> = (canvasId, imageUrl) => {
                        let canvas = document.getElementById(canvasId);
                        let context = canvas.getContext("2d");

                        const init = () => {
                          let image = new Image();
                          image.src = imageUrl;

                          image.onload = () => {
                            context.drawImage(image, 0, 0, 300, 150);
                          };
                        };

                        let isDragging = false;

                        const scratch = (x, y) => {
                          context.globalCompositeOperation = "destination-out";
                          context.beginPath();
                          context.arc(x, y, 24, 0, 2 * Math.PI);
                          context.fill();
                        };

                        canvas.addEventListener("mousedown", (event) => {
                          isDragging = true;
                          scratch(event.offsetX, event.offsetY);
                        });

                        canvas.addEventListener("mousemove", (event) => {
                          if (isDragging) {
                            scratch(event.offsetX, event.offsetY);
                          }
                        });

                        canvas.addEventListener("mouseup", () => {
                          isDragging = false;
                        });

                        canvas.addEventListener("mouseleave", () => {
                          isDragging = false;
                        });

                        init();
                      };

                      createScratchCard<?= $index ?>("scratch-card<?= $index ?>", "../images/<?= $row['cardImage'] ?>");
                    })();
                  </script>
                  <?php
                  $index++;

                }
              }
          }
        }
      }
          ?>
            

            <!-- <div class="col-md-4" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="600">
                <h3 class="font-arabic text-center">Scratch Card 2</h3>
                <div class="scratch-container">
                    <div class="scratch-card text-center">
                      <div class="code"><?= isset($code['kode2'])? $code['kode2'] : '111222333' ?></div>
                    </div>
                    <canvas id="scratch-card2" class="w-100" height="150"></canvas>
                </div>
            </div>
 
            <div class="col-md-4" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="700">
                <h3 class="font-arabic text-center">Scratch Card 3</h3>
                <div class="scratch-container">
                    <div class="scratch-card text-center">
                      <div class="code"><?= isset($code['kode3'])? $code['kode3'] : '332211223' ?></div>
                    </div>
                    <canvas id="scratch-card3" class="w-100" height="150"></canvas>
                </div>
            </div> -->
        </div>
    </div>

    
    <div class="container">
      <div class="row">
        <!-- Prize 1 -->
        <?php
        $query = "SELECT * FROM prize";
              $getPrize = $connect->prepare($query);
              $getPrize->execute();
              $index = 1;
              if ($getPrize->rowCount() > 0) {
                while ($row = $getPrize->fetch(PDO::FETCH_ASSOC)) {
                  ?>
                  <div class="col-md-4" data-aos="fade-up-left" data-aos-duration="2000" data-aos-delay="1000">
                    <div class="prize-container">
                      <h5 class="prize-title font-arabic">Prize <?=$index?></h5>
                      <div class="stage">
                      <p class="prize-description font-inside"><?= $row['name'] ?></p>
                        <div class="stage-content">
                          <img src='../images/<?= $row['image'] ?>'>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                $index++;
                }
              }

        ?>
        <!-- <div class="col-md-4" data-aos="fade-up-left" data-aos-duration="2000" data-aos-delay="1000">
          <div class="prize-container">
            <h5 class="prize-title font-arabic">Prize 1</h5>
            <div class="stage">
            <p class="prize-description font-inside">Brand New Private Jet</p>
              <div class="stage-content"></div>
            </div>
          </div>
        </div>
    

        <div class="col-md-4" data-aos="fade-up-left" data-aos-duration="2000" data-aos-delay="1100">
          <div class="prize-container">
            <h5 class="prize-title font-arabic">Prize 2</h5>
            <div class="stage">
            <p class="prize-description font-inside">Brand New Car</p>
              <div class="stage-content1"></div>
            </div>
            </div>
          </div>
     -->

      </div>

      </div>
    </div>
<?php include 'divider.php' ?>

  </section>
    
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    

  <script>
  
// createScratchCard("scratch-card1", "assets/images/darren/image-url1.jpg");
// createScratchCard("scratch-card2", "assets/images/darren/image-url2.jpg");
// createScratchCard("scratch-card3", "assets/images/darren/image-url3.jpg");


    </script>
</body>

</html>
