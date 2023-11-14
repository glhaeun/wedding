<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/rsvp.css">

    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <style>
        body{
           background-image: url(assets/images/ziven/background.png);
        }

        .container-rsvp,
        .new-card{
            outline: 2px solid #FAD983;
            border-radius: 15px;
        }

        .font-esthetic {
            font-family: 'Ephesis', cursive !important;
            color: #000000 !important;
        }

        .font-arabic {
            font-family: 'Enriqueta', serif !important;
            color: #000000 !important;
        }
    </style>
</head>
<body>
    <section id="rsvp" class="m-5">
        <div class="container-rsvp">
            <div class="card-body border rounded-4 shadow p-3">
                <form action="" id="rsvp-form">
                    <h1 class="font-esthetic text-center mb-3" style="font-size: 3rem;">Ucapan & Doa</h1>
                    <div class="mb-1" id="balasan"></div>

                    <div class="mb-3">
                        <label for="form-nama" class="form-label">Nama</label>
                        <input type="text" class="form-control shadow-sm" id="form-nama" placeholder="Isikan Nama Anda">
                    </div>

                    <div class="mb-3">
                        <label for="form-kehadiran" class="form-label" id="label-kehadiran">Kehadiran</label>
                        <select class="form-select shadow-sm" id="form-kehadiran">
                            <option value="0" selected>Konfirmasi Kehadiran</option>
                            <option value="1">Hadir</option>
                            <option value="2">Berhalangan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="form-pesan" class="form-label">Ucapan & Doa</label>
                        <textarea class="form-control shadow-sm" id="form-pesan" rows="4" placeholder="Tulis Ucapan & Doa"></textarea>
                    </div>

                    <div class="d-flex">
                        <button class="flex-fill btn btn-warning btn-sm rounded-3 shadow m-1"  id="kirim">
                            Kirim
                            <i class="fa-solid fa-paper-plane ms-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="rounded-4 mt-5 mb-2 daftar-ucapan" id="daftar-ucapan">
        </div>
    </section>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('rsvp-form');
        const namaInput = document.getElementById('form-nama');
        const kehadiranInput = document.getElementById('form-kehadiran');
        const pesanInput = document.getElementById('form-pesan');
        const daftarUcapan = document.getElementById('daftar-ucapan');

        form.addEventListener('submit', function (event) {
            event.preventDefault(); 

            if (!namaInput.value || !kehadiranInput.value) {
                const toastNode = document.createElement("div");
                toastNode.innerHTML = "<i class='fas fa-exclamation-triangle'></i> ";
                Toastify({
                    text: "👀 Field nama atau status kehadiran wajib diisi !",
                    duration: 2000,
                    newWindow: true,
                    gravity: "bottom",
                    position: 'right',
                    backgroundColor: "tomato",
                    stopOnFocus: true,
                    onClick: function () { }
                }).showToast();
            } else {
                const nama = namaInput.value;
                const kehadiran = kehadiranInput.value;
                const pesan = pesanInput.value;
                const newCard = document.createElement('div');
                newCard.className = 'mb-3 new-card';
                newCard.innerHTML = `
                    <div class="card-body bg-light shadow p-3 m-0 rounded-4">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <p class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                        <strong class="me-1">${nama}</strong><i class="fa-solid fa-circle-check text-success"></i>
                        </p>
                    </div>
                    <hr class="text-dark my-1">
                    <p class="text-dark mt-0 mb-1 mx-0 p-0" style="white-space: pre-line">${pesan}</p>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <button style="font-size: 0.8rem;" data-uuid="${generateUUID()}" class="btn btn-sm btn-outline-dark rounded-2 py-0 px-0" fdprocessedid="qrakml">
                        <div class="d-flex justify-content-start align-items-center">
                            <p class="my-0 mx-1" data-suka="0">0 suka</p>
                            <i class="py-1 me-1 p-0 fa-regular fa-heart"></i>
                        </div>
                        </button>
                    </div> 
                    </div>`;
                daftarUcapan.appendChild(newCard);
                namaInput.value = '';
                kehadiranInput.value = '0';
                pesanInput.value = '';

                Toastify({
                    text: "🙏 Terima Kasih atas respond yang diberikan !",
                    duration: 2000,
                    newWindow: true,
                    gravity: "bottom",
                    position: 'right',
                    backgroundColor: "",
                    stopOnFocus: true,
                    onClick: function () { }
                }).showToast();  
            }
        });

        function generateUUID() {
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = Math.random() * 16 | 0,
                v = c === 'x' ? r : (r & 0x3 | 0x8);
                return v.toString(16);
            });
        }
    });
</script>
</html>


