<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
        font-family: "Montserrat", sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
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
      align-items: start;
      justify-content: start;
      text-align: start;
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
    padding-top: 68%;
    background-image: url('assets/images/darren/image-url7.jpg');
  }
  .stage-content1 {
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
  }
  
  
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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="main-heading border-left border-danger pl-3 mt-0 mb-4"></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h3>Scratch Card 1</h3>
                <div class="scratch-container">
                    <div class="scratch-card text-center">
                        <div class="code">D7DF9CFF0C</div>
                    </div>
                    <canvas id="scratch-card1" class="w-100" height="160"></canvas>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Scratch Card 2</h3>
                <div class="scratch-container">
                    <div class="scratch-card text-center">
                        <div class="code">8DDIECIW3</div>
                    </div>
                    <canvas id="scratch-card2" class="w-100" height="150"></canvas>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Scratch Card 3</h3>
                <div class="scratch-container">
                    <div class="scratch-card text-center">
                        <div class="code">38CUDCJS93</div>
                    </div>
                    <canvas id="scratch-card3" class="w-100" height="150"></canvas>
                </div>
            </div>

          <div class="col-md-4">
                <h3>Scratch Card 1</h3>
                <div class="scratch-container">
                    <div class="scratch-card text-center">
                        <div class="code">Hey, You Win</div>
                    </div>
                    <canvas id="scratch-card4" class="w-100" height="150"></canvas>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Scratch Card 2</h3>
                <div class="scratch-container">
                    <div class="scratch-card text-center">
                        <div class="code">Hey, You Win</div>
                    </div>
                    <canvas id="scratch-card5" class="w-100" height="150"></canvas>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Scratch Card 3</h3>
                <div class="scratch-container">
                    <div class="scratch-card text-center">
                        <div class="code">Sorry, Better Luck Next Time</div>
                    </div>
                    <canvas id="scratch-card6" class="w-100" height="150"></canvas>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container">
      <div class="row">
        <!-- Prize 1 -->
        <div class="col-md-4">
          <div class="prize-container">
            <h5 class="prize-title">Prize 1</h5>
            <!-- Image for Prize 1 -->
            <div class="stage">
            <p class="prize-description">Brand New Private Jet</p>
              <div class="stage-content"></div>
              <label class="curtain-container">
                <div class="curtain-panel">
                  <input type="checkbox" class="curtain-trigger" />
                  <div class="left-curtain curtain"></div>
                  <div class="right-curtain curtain"></div>
                </div>
              </label>
            </div>
            </div>
          </div>
    
        <!-- Prize 2 -->
        <div class="col-md-4">
          <div class="prize-container">
            <h5 class="prize-title">Prize 2</h5>
            <!-- Image for Prize 2 -->
            <div class="stage">
            <p class="prize-description">Brand New Car</p>
              <div class="stage-content1"></div>
              <label class="curtain-container">
                <div class="curtain-panel">
                  <input type="checkbox" class="curtain-trigger" />
                  <div class="left-curtain curtain"></div>
                  <div class="right-curtain curtain"></div>
                </div>
              </label>
            </div>
            </div>
          </div>
    
        <!-- Prize 3 -->
        <div class="col-md-4">
          <div class="prize-container">
            <h5 class="prize-title">Prize 3</h5>
            <!-- Image for Prize 3 -->
            <div class="stage">
            <p class="prize-description">Brand New Motorcycle</p>
              <div class="stage-content2"></div>
              <label class="curtain-container">
                <div class="curtain-panel">
                  <input type="checkbox" class="curtain-trigger" />
                  <div class="left-curtain curtain"></div>
                  <div class="right-curtain curtain"></div>
                </div>
              </label>
            </div>
            </div>
          </div>
      </div>
      </div>
    
    

    <script>
        const createScratchCard = (canvasId, imageUrl) => {
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

createScratchCard("scratch-card1", "assets/images/darren/image-url1.jpg");
createScratchCard("scratch-card2", "assets/images/darren/image-url2.jpg");
createScratchCard("scratch-card3", "assets/images/darren/image-url3.jpg");
createScratchCard("scratch-card4", "assets/images/darren/image-url4.jpg");
createScratchCard("scratch-card5", "assets/images/darren/image-url5.jpg");
createScratchCard("scratch-card6", "assets/images/darren/image-url6.jpg");


    </script>
</body>

</html>
