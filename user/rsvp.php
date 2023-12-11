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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <style>
        .main-container-rsvp{
           position: relative;
           background-image: url(assets/images/ziven/background.png);
           z-index: 1;
        }

        .leave-1-png-rsvp{
            position: absolute;
            top: -50px;
            left: 0;
            z-index: -1; 
            width: 300px; 
        }

        .flower-png-rsvp{
            position: absolute;
            bottom: -275px;
            right: -175px; 
            z-index: -1; 
            width: 500px; 
        }

        .container-rsvp,
        .new-card{
            z-index:1;
            outline: 2px solid #FAD983;
            border-radius: 15px;
        }

        .font-time{
            font-family: 'Digital-7', sans-serif !important;
            color: #000000 !important;
        }
        .font-esthetic {
            font-family: 'Ephesis', cursive !important;
            color: #000000 !important;
        }

        .font-arabic {
            font-family: 'Enriqueta', serif !important;
            color: #000000 !important;
        }

        .page-link:focus {
            box-shadow: none;
        }

        .disabled {
            pointer-events: none;
            opacity: 0.6;
        }   

        @keyframes cardAddedAnimation {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .new-card {
            animation: cardAddedAnimation 0.5s ease-in;
        }

        .borderless {
            border: none;
            outline: none;
            box-shadow: none; 
            background:none;
        }


    </style>
</head>
<body>
    <div class="main-container-rsvp">
        <img src="assets/images/ziven/leave-1.png" data-aos="fade-right" class="leave-1-png-rsvp" alt="">
        <section id="rsvp" class="m-5">
            <div class="container-rsvp" data-aos="fade-up">
                <div class="card-body border rounded-4 shadow p-3">
                    <form method="post" id="rsvp-form">
                        <h1 class="font-esthetic text-center mb-3 csstitle" style="font-size: 4rem;">Blessing and Prayer</h1>
                        <div class="mb-1" id="balasan"></div>

                        <div class="mb-3 font-arabic">
                            <label for="form-nama" class="form-label">Name</label>
                            <input type="text" class="form-control shadow-sm" id="form-nama" placeholder="Isikan Nama Anda">
                        </div>

                        <div class="mb-3 font-arabic">
                            <label for="form-kehadiran" class="form-label" id="label-kehadiran">Attendance</label>
                            <select class="form-select shadow-sm" id="form-kehadiran">
                                <option value="0" selected>Confirm Attendance</option>
                                <option value="1">I will attend</option>
                                <option value="2">Can't make it</option>
                            </select>
                        </div>

                        <div class="mb-3 font-arabic">
                            <label for="form-pesan" class="form-label">Message</label>
                            <textarea class="form-control shadow-sm" id="form-pesan" rows="4" placeholder="Tulis Ucapan & Doa"></textarea>
                        </div>

                        <div class="d-flex font-arabic">
                            <button class="flex-fill btn btn-warning btn-sm rounded-3 shadow m-1" style="display: block;" id="kirim">
                                Send
                                <i class="fa-solid fa-paper-plane ms-1"></i>
                            </button>
                        </div>

                        <div class="d-flex font-arabic">
                            <button class="flex-fill btn btn-warning btn-sm rounded-3 shadow m-1" style="display: none;" id="update">
                                Update
                                <i class="fa-solid fa-paper-plane ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="rounded-4 mt-5 mb-2 daftar-ucapan font-arabic" id="daftar-ucapan"> 
            <!-- list ucapan -->
            </div>

            <nav class="d-flex justify-content-center mb-0 font-arabic">
                <ul class="pagination mb-0">
                    <li class="page-item" id="previous">
                        <button class="page-link"  aria-label="Previous">
                            <i class="fa-solid fa-circle-left me-1"></i>Before
                        </button>
                    </li>
                    <li class="page-item">
                        <span class="page-link bg-warning text-dark" id="page">1</span>
                    </li>
                    <li class="page-item" id="next">
                        <button class="page-link"  aria-label="Next">
                            After<i class="fa-solid fa-circle-right ms-1"></i>
                        </button>
                    </li>
                </ul>
            </nav>

        </section>
    </div>
</body>
<script>
    AOS.init();
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('rsvp-form');
        const namaInput = document.getElementById('form-nama');
        const kehadiranInput = document.getElementById('form-kehadiran');
        const pesanInput = document.getElementById('form-pesan');
        const daftarUcapan = document.getElementById('daftar-ucapan');
        const kirimButton = document.getElementById('kirim');
        const updateButton = document.getElementById('update');

        fetch('rsvpConnection.php?action=select')
            .then(response => response.json())
            .then(data => {
                data.forEach(item => {
                    const newCard = document.createElement('div');
                    const datetime = new Date(item.timestamp).toLocaleString();
                    if(item.status == 1){
                        kehadiran = 'Hadir';
                    }
                    else{
                        kehadiran = 'Berhalangan';
                    }
                    newCard.className = 'mb-3 new-card'; 
                    newCard.innerHTML = `
                        <div class="card-body bg-light shadow p-3 m-0 rounded-4">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div>
                                    <p class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                                        <strong class="me-1">${item.name}</strong>
                                    </p>
                                    <p class="mt-1 font-time">${item.created_datetime}</p>
                                </div>
                                <div class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                                    <strong class="me-1">${kehadiran}</strong>
                                    ${kehadiran == 'Hadir' ? '<i class="fa-solid fa-circle-check text-success"></i>' : '<i class="fas fa-times-circle" style="color: #ff1414;"></i>'}
                                </div>
                                
                                <div class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                                    <strong class="me-1">${kehadiran}</strong>
                                    ${kehadiran == 'Hadir' ? '<i class="fa-solid fa-circle-check text-success"></i>' : '<i class="fas fa-times-circle" style="color: #ff1414;"></i>'}
                                </div>
                            </div>
                            <hr class="text-dark my-1">
                            <div class="d-flex justify-content-between align-items-center">
                                <input type="text" value="${item.message}" class="borderless"/>
                                <button class="btn btn-warning btn-sm rounded-3 shadow m-1 edit-btn">
                                    Edit
                                    <i class="fas fa-edit ms-1"></i>
                                </button>
                            </div>
                            <input type="hidden" value="${item.id}">
                        </div>`;

                    const editBtn = newCard.querySelector('.edit-btn');
                    editBtn.addEventListener('click', function () {
                        namaInput.value = item.name;
                        kehadiran = 'Hadir' ? 1 : 0;
                        kehadiranInput.value = kehadiran;
                        pesanInput.value = item.message;
                        updateButton.style.display = 'block';
                        kirimButton.style.display = 'none';
                        console.log(item.id);
                        fetch('rsvpConnection.php?action=update', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                            },
                            body: new URLSearchParams({
                                'updatedName': item.name,
                                'updatedStatus': item.status,
                                'updatedMessage': item.message,
                                'messageId' : item.id,
                            }),
                        })
                        .then(response => response.text())
                        .then(data => {
                            
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });

                    });
                    
                    daftarUcapan.appendChild(newCard);
                });
                displaySubmissions();
            })
            .catch(error => {
                console.error('Error fetching data:', error);
        });

        form.addEventListener('submit', function (event) {
            event.preventDefault(); 
            if (!namaInput.value || !kehadiranInput.value) {
                const toastNode = document.createElement("div");
                toastNode.innerHTML = "<i class='fas fa-exclamation-triangle'></i> ";
                Toastify({
                    text: "👀 Field nama atau status kehadiran wajib diisi !",
                    duration: 3000,
                    newWindow: true,
                    gravity: "bottom",
                    position: 'right',
                    backgroundColor: "rgba(255, 2, 2, 0.54)",
                    stopOnFocus: true,
                    onClick: function () { }
                }).showToast();
            } else {
                const nama = namaInput.value;
                const kehadiran = parseInt(kehadiranInput.value);
                const pesan = pesanInput.value;
                const newCard = document.createElement('div');
                const statusHadir = kehadiran == '1' ? "Hadir" : "Berhalangan";
                const iconStatus = kehadiran == '1' ? '<i class="fa-solid fa-circle-check text-success"></i>' : '<i class="fas fa-times-circle" style="color: #ff1414;"></i>';
                const datetime = new Date().toLocaleString();
                newCard.className = 'mb-3 new-card';
                newCard.innerHTML = `
                    <div class="card-body bg-light shadow p-3 m-0 rounded-4">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div>
                                <p class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                                    <strong class="me-1">${nama}</strong>
                                </p>
                                <p class="mt-1 font-time">${datetime}</p>
                            </div>
                            <div class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                                <strong class="me-1">${statusHadir}</strong>
                                ${iconStatus}
                            </div>
                        </div>
                        <hr class="text-dark my-1">
                        <input type="text" value="${pesan}"class="borderless"/>
                        <button class="btn btn-warning btn-sm rounded-3 shadow m-1 edit-btn">
                            Edit
                            <i class="fas fa-edit ms-1"></i>
                        </button>
                    </div>`;

                daftarUcapan.appendChild(newCard);
                namaInput.value = '';
                kehadiranInput.value = '0';
                pesanInput.value = '';
                form.reset();
                displaySubmissions();
                form.submit();

                Toastify({
                    text: "😍 Terima Kasih atas respond yang diberikan !",
                    duration: 3000,
                    newWindow: true,
                    gravity: "bottom",
                    position: 'right',
                    backgroundColor: "rgba(172, 168, 170, 0.54)",
                    stopOnFocus: true,
                    onClick: function () { }
                }).showToast();  

                //insert Db
                fetch('rsvpConnection.php?action=insert', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        'nama': nama,
                        'kehadiran': kehadiran,
                        'pesan': pesan,
                    }),
                })
                .then(response => response.text())
                .then(data => {
                    Toastify({
                        text: "🚀 Data updated successfully!",
                        duration: 3000,
                        newWindow: true,
                        gravity: "bottom",
                        position: 'right',
                        backgroundColor: "rgba(172, 168, 170, 0.54)",
                        stopOnFocus: true,
                        onClick: function () { }
                    }).showToast();
                })
                .catch(error => {
                    console.error('Error:', error);
                });

                updateButton.style.display = 'none';
                kirimButton.style.display = 'block';
            }
        });

        function generateUUID() {
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = Math.random() * 16 | 0,
                v = c === 'x' ? r : (r & 0x3 | 0x8);
                return v.toString(16);
            });
        }

        const nextButton = document.getElementById('next');
        const previousButton = document.getElementById('previous');
        const submissionsPerPage = 5;
        let currentPage = 1;

        nextButton.addEventListener('click', function () {
            currentPage++;
            displaySubmissions();
        });

        previousButton.addEventListener('click', function () {
            if (currentPage > 1) {
                currentPage--;
                displaySubmissions();
            }
        });

        const nav = document.querySelector('.pagination');
        nav.style.display = 'none';

        function displaySubmissions() {
            const allSubmissions = document.querySelectorAll('.new-card');
            const startIdx = (currentPage - 1) * submissionsPerPage;
            const endIdx = startIdx + submissionsPerPage;

            allSubmissions.forEach((submission, index) => {
                if (index >= startIdx && index < endIdx) {
                    submission.style.display = 'block';
                } else {
                    submission.style.display = 'none';
                }
            });
            
            const pageElement = document.getElementById('page');
            pageElement.textContent = currentPage;
            
            if (allSubmissions.length === 0) {
                nav.style.display = 'none';
            } else {
                nav.style.display = 'flex';
                previousButton.disabled = currentPage === 1;
                nextButton.disabled = endIdx >= allSubmissions.length;

                if (endIdx >= allSubmissions.length) {
                    nextButton.classList.add('disabled');
                } else {
                    nextButton.classList.remove('disabled');
                }
            }
        }
    });
</script>
</html>


