<!DOCTYPE html> 
<html> 
<head> 
  <title>Thank You Page</title> 
  <style>
    body {
      font-family: Ephesis, script; 
      background-color: #f0f0f0; 
      margin: 0;
      padding: 0;
    }

    h1 {
      font-size: 72px; 
      color: #FFCA00; /* Sesuaikan warna font */
      text-align: center;
      margin-top: 100px;
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      opacity: 0;
      animation: slideIn 2s ease forwards;
    }

    @keyframes slideIn {
      from {
        top: -100px;
        opacity: 0;
      }
      to {
        top: 50%;
        opacity: 1;
      }
    }
  </style>
</head> 
<body> 
  <h1>Thank you for confirming</h1>

  <script>
    // JavaScript untuk animasi
    // Menggunakan animasi CSS keyframes
  </script>
</body> 
</html>
<!--  <!DOCTYPE html> 
<html> 
<head> 
  <title>Thank You Page</title> 
  <style>
    body {
      font-family: Ephesis, script; /* Ganti jenis font sesuai pilihan Anda */
      background-color: #f0f0f0; /* Ganti warna latar belakang sesuai keinginan */
      margin: 0;
      padding: 0;
    }

    h1 {
      font-size: 72px; /* Sesuaikan ukuran font */
      color: #FFCA00; /* Sesuaikan warna font */
      text-align: center;
      margin-top: 100px;
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      opacity: 0;
    }
  </style>
</head> 
<body> 
  <h1 id="thankYouText">Thank you for confirming</h1>

  <script>
    // Ambil elemen h1 berdasarkan ID
    var thankYouText = document.getElementById("thankYouText");

    // Fungsi untuk memulai animasi
    function startAnimation() {
      thankYouText.style.animation = "slideIn 2s ease forwards";
      thankYouText.style.opacity = 1;
    }

    // Memulai animasi ketika halaman dimuat
    window.onload = startAnimation;
  </script>
</body> 
</html> !>
