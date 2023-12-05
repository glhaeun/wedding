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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
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
                        <h1 class="font-esthetic text-center mb-3 csstitle" style="font-size: 4rem;">Ucapan & Doa</h1>
                        <div class="mb-1" id="balasan"></div>

                        <div class="mb-3 font-arabic">
                            <label for="form-nama" class="form-label">Nama</label>
                            <input type="text" class="form-control shadow-sm" id="form-nama" placeholder="Isikan Nama Anda">
                        </div>

                        <div class="mb-3 font-arabic">
                            <label for="form-kehadiran" class="form-label" id="label-kehadiran">Kehadiran</label>
                            <select class="form-select shadow-sm" id="form-kehadiran">
                                <option value="0" selected>Konfirmasi Kehadiran</option>
                                <option value="1">Hadir</option>
                                <option value="2">Berhalangan</option>
                            </select>
                        </div>

                        <div class="mb-3 font-arabic">
                            <label for="form-pesan" class="form-label">Ucapan & Doa</label>
                            <textarea class="form-control shadow-sm" id="form-pesan" rows="4" placeholder="Tulis Ucapan & Doa"></textarea>
                        </div>

                        <div class="d-flex font-arabic">
                            <button class="flex-fill btn btn-warning btn-sm rounded-3 shadow m-1"  id="kirim">
                                Kirim
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
                            <i class="fa-solid fa-circle-left me-1"></i>Sebelumnya
                        </button>
                    </li>
                    <li class="page-item">
                        <span class="page-link bg-warning text-dark" id="page">1</span>
                    </li>
                    <li class="page-item" id="next">
                        <button class="page-link"  aria-label="Next">
                            Selanjutnya<i class="fa-solid fa-circle-right ms-1"></i>
                        </button>
                    </li>
                </ul>
            </nav>

        </section>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script>
    AOS.init();
    document.addEventListener('DOMContentLoaded', function () {
        let isUpdate = false; 
        let updatingId = null;
        let guestMode = true;
        const userEmail = "<?php echo isset( $_SESSION['userEmail'])? $_SESSION['userEmail']: ''; ?>";
        if (userEmail != '') {
            guestMode = false;
        }
        console.log(guestMode)
        const userId = "<?php echo isset( $_SESSION['userId'])? $_SESSION['userId']: null; ?>";
        const form = document.getElementById('rsvp-form');
        const namaInput = document.getElementById('form-nama');
        const kehadiranInput = document.getElementById('form-kehadiran');
        const pesanInput = document.getElementById('form-pesan');
        const daftarUcapan = document.getElementById('daftar-ucapan');

        fetch('rsvpConnection.php?action=select')
            .then(response => response.json())
            .then(data => {
                data.forEach(item => {
                    const newCard = document.createElement('div');
                    const datetime = new Date(item.timestamp).toLocaleString();

                    newCard.className = 'mb-3 new-card';
                    newCard.innerHTML = `
                    <div class="card-body bg-light shadow p-3 m-0 rounded-4">
                        <div class="d-flex flex-wrap align-items-center"    >
                            <div>
                                <p class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                                    <strong class="me-1">${item.name}</strong>
                                </p>
                                <p class="mt-1 font-time">${item.created_datetime}</p>
                            </div>
                    
                            <div class="d-flex justify-content-end align-items-center" style="flex:1;">
                                <div class="text-end">
                                    <p class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                                        <strong class="me-1">${item.status}</strong>
                                        ${item.status == 'Hadir' ? '<i class="fa-solid fa-circle-check text-success"></i>' : '<i class="fas fa-times-circle" style="color: #ff1414;"></i>'}
                                    </p>
                                </div>
                                ${item.email == userEmail ? `
                                <button class="btn btn-warning btn-sm rounded-3 shadow m-1 edit-btn" data-email="${item.email}">
                                    Edit
                                    <i class="fas fa-edit ms-1"></i>
                                </button>
                                <button class="btn btn-danger btn-sm rounded-3 shadow m-1 delete-btn" data-email="${item.email}">
                                    Delete
                                    <i class="fas fa-trash-alt ms-1"></i>
                                </button> ` : ``
                                }
                            </div> 
                        </div>
                        <hr class="text-dark my-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex">
                                <input type="text" value="${item.message}" class="borderless"/>
                            </div>
                        </div>
                        <input type="hidden" value="${item.email}">
                    </div>`;
                        daftarUcapan.appendChild(newCard);
    
                        // Select all elements with class .edit-btn inside newCard
                        const editBtns = newCard.querySelectorAll('.edit-btn');
                        const deleteBtns = newCard.querySelectorAll('.delete-btn');
                        editBtns.forEach(button => {
                            button.addEventListener('click', function() {
                                const email = this.getAttribute('data-email');
                                createEditHandler(email);
                            });
                        });

                        deleteBtns.forEach(button => {
                            button.addEventListener('click', function() {
                                const email = this.getAttribute('data-email');
                                deleteEntry(email);
                            });
                        });
                });
                displaySubmissions();
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });

        function populateFormForEdit(item) {
            fetch(`rsvpConnection.php?action=getData&&userEmail=${item}`)
            .then(response => response.json())
            .then(data => {
                console.log(data)
                namaInput.value = data[0].name;
                kehadiranInput.value = data[0].status;
                pesanInput.value = data[0].message;
                form.scrollIntoView({ behavior: 'smooth', block: 'start' });
            })
            .catch(error => {
                console.error('Error:', error);
            });
            
        }

        const deleteEntry = (email) => {
            if(guestMode || email != userEmail) {
                    Toastify({
                        text: "😢 You can't delete other's message!",
                        duration: 3000,
                        newWindow: true,
                        gravity: "bottom",
                        position: 'right',
                        backgroundColor: "rgba(255, 99, 71, 0.6)",
                        stopOnFocus: true,
                        onClick: function () { }
                    }).showToast();
            } else {
                $.confirm({
                    title: 'Confirm Deletion',
                    content: 'Are you sure you want to delete your submission?',
                    buttons: {
                        confirm: function () {

                            fetch('rsvpConnection.php?action=delete', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                            },
                            body: new URLSearchParams({
                                'userEmail': email,
                            }),
                            })
                            .then(response => response.text())
                            .then(data => {
                                const cardToDelete = document.querySelector(`.new-card input[value="${userEmail}"]`).closest('.new-card');
                                cardToDelete.remove();
                                Toastify({
                                    text: "😢 Pesan berhasil dihapus!",
                                    duration: 3000,
                                    newWindow: true,
                                    gravity: "bottom",
                                    position: 'right',
                                    backgroundColor: "rgba(255, 99, 71, 0.6)",
                                    stopOnFocus: true,
                                    onClick: function () { }
                                }).showToast();
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });
                                    },
                                    cancel: function () {
                                        $.alert('Deletion canceled!');
                                    }
                                }
                            });
                
            }
            
        }

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
                if (isUpdate) {

                    
                const updatedName = namaInput.value;
                const updatedStatus = kehadiranInput.value;
                const updatedMessage = pesanInput.value;

                const cardToUpdate = document.querySelector(`.new-card input[value="${userEmail}"]`).closest('.new-card');
                const statusHadir = updatedStatus === '1' ? "Hadir" : "Berhalangan";
                const iconStatus = updatedStatus === '1' ? '<i class="fa-solid fa-circle-check text-success"></i>' : '<i class="fas fa-times-circle" style="color: #ff1414;"></i>';
                const datetime = new Date().toLocaleString(); 
                cardToUpdate.innerHTML = `
                    <div class="card-body bg-light shadow p-3 m-0 rounded-4">
                        <div class="d-flex flex-wrap align-items-center">
                            <div>
                                <p class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                                    <strong class="me-1">${updatedName}</strong>
                                </p>
                                <p class="mt-1 font-time">${datetime}</p>
                            </div>
                            <div class="d-flex justify-content-end align-items-center" style="flex:1;">
                                <div class="text-end">
                                    <div class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                                        <strong class="me-1">${statusHadir}</strong>
                                        ${iconStatus}
                                    </div>
                                </div>    
                                <button class="btn btn-warning btn-sm rounded-3 shadow m-1 edit-btn" data-email="${userEmail}">
                                    Edit
                                    <i class="fas fa-edit ms-1"></i>
                                </button>
                                <button class="btn btn-danger btn-sm rounded-3 shadow m-1 delete-btn" data-email="${userEmail}">
                                        Delete
                                        <i class="fas fa-trash-alt ms-1"></i>
                                </button>  
                            </div> 
                        </div>
                        <hr class="text-dark my-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="text" value="${updatedMessage}" class="borderless"/>
                        </div>
                        <input type="hidden" value="${userEmail}">
                    </div>`;

                    daftarUcapan.addEventListener('click', function(event) {
                        if (event.target.classList.contains('edit-btn')) {
                            const email = event.target.getAttribute('data-email');
                            createEditHandler(email);
                        }
                    });
                    
                    const deleteBtns = cardToUpdate.querySelectorAll('.delete-btn');
                        deleteBtns.forEach(button => {
                            button.addEventListener('click', function() {
                                const email = this.getAttribute('data-email');
                                deleteEntry(email);
                            });
                        });

                    
                    fetch('rsvpConnection.php?action=update', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: new URLSearchParams({
                            'userEmail': userEmail,
                            'updatedName': updatedName,
                            'updatedStatus': statusHadir,
                            'updatedMessage': updatedMessage,
                        }),
                    })
                    .then(response => response.text())
                    .then(data => {
                        Toastify({
                            text: "😍 Pesan berhasil diupdate !",
                            duration: 3000,
                            newWindow: true,
                            gravity: "bottom",
                            position: 'right',
                            backgroundColor: "green",
                            stopOnFocus: true,
                            onClick: function () { }
                        }).showToast(); 
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                    form.reset();
                    isUpdate = false;
                    updatingId = null;
                }
                else {
                if (guestMode) {
                    const toastNode = document.createElement("div");
                    toastNode.innerHTML = "<i class='fas fa-exclamation-triangle'></i> ";
                    Toastify({
                        text: "👀 You can't send RSVP in guest mode !",
                        duration: 3000,
                        newWindow: true,
                        gravity: "bottom",
                        position: 'right',
                        backgroundColor: "rgba(255, 2, 2, 0.54)",
                        stopOnFocus: true,
                        onClick: function () { }
                    }).showToast();
                } else {
                    fetch(`rsvpConnection.php?action=checkUser&&userEmail=${userEmail}`)
                    .then(response => response.text())
                    .then(data => {
                        console.log(data)
                        if (data > 0) {
                            const toastNode = document.createElement("div");
                            toastNode.innerHTML = "<i class='fas fa-exclamation-triangle'></i> ";
                            Toastify({
                                text: "You've already answered the attendance!",
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
                    const kehadiran = kehadiranInput.value;
                    const pesan = pesanInput.value;
                    const newCard = document.createElement('div');
                    const statusHadir = kehadiran == '1' ? "Hadir" : "Berhalangan";
                    const iconStatus = kehadiran == '1' ? '<i class="fa-solid fa-circle-check text-success"></i>' : '<i class="fas fa-times-circle" style="color: #ff1414;"></i>';
                    const datetime = new Date().toLocaleString();
        
                    newCard.className = 'mb-3 new-card';
                    newCard.innerHTML = `
                        <div class="card-body bg-light shadow p-3 m-0 rounded-4">
                        <div class="d-flex flex-wrap align-items-center">
                            <div>
                                <p class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                                    <strong class="me-1">${namaInput.value}</strong>
                                </p>
                                <p class="mt-1 font-time">${datetime}</p>
                            </div>
                            <div class="d-flex justify-content-end align-items-center" style="flex:1;">
                                <div class="text-end">
                                    <div class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                                        <strong class="me-1">${statusHadir}</strong>
                                        ${iconStatus}
                                    </div>
                                </div>    
                                <button class="btn btn-warning btn-sm rounded-3 shadow m-1 edit-btn" data-email="${userEmail}">
                                    Edit
                                    <i class="fas fa-edit ms-1"></i>
                                </button>
                                <button class="btn btn-danger btn-sm rounded-3 shadow m-1 delete-btn" data-email="${userEmail}">
                                        Delete
                                        <i class="fas fa-trash-alt ms-1"></i>
                                </button>  
                            </div> 
                        </div>
                        <hr class="text-dark my-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="text" value="${pesan}" class="borderless"/>
                        </div>
                        <input type="hidden" value="${userEmail}">
                        </div>`;

                    daftarUcapan.appendChild(newCard);
                    namaInput.value = '';
                    kehadiranInput.value = '0';
                    pesanInput.value = '';
                    form.reset();
                    displaySubmissions();
                    // form.submit();

                    daftarUcapan.addEventListener('click', function(event) {
                        if (event.target.classList.contains('edit-btn')) {
                            const email = event.target.getAttribute('data-email');
                            createEditHandler(email);
                        }
                    });

                    daftarUcapan.addEventListener('click', function(event) {
                        if (event.target.classList.contains('delete-btn')) {
                            const email = event.target.getAttribute('data-email');
                            deleteEntry(email);
                        }
                    });

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
                            'kehadiran': statusHadir,
                            'pesan': pesan,
                        }),
                    })
                    .then(response => response.text())
                    .then(data => {
                        console.log(data);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });


                    }
                    
                }
            }
        });

        function createEditHandler(email) {
            if (email != userEmail) {
                const toastNode = document.createElement("div");
                toastNode.innerHTML = "<i class='fas fa-exclamation-triangle'></i> ";
                Toastify({
                    text: "This is not your account !",
                    duration: 3000,
                    newWindow: true,
                    gravity: "bottom",
                    position: 'right',
                    backgroundColor: "rgba(255, 2, 2, 0.54)",
                    stopOnFocus: true,
                    onClick: function () { }
                }).showToast();
            } else {
                isUpdate = true;
                populateFormForEdit(email);
                
            }
        }

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


