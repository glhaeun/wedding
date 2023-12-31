<?php
    include('../component/imageLib.php');
        if (isset($_POST['save'])) {
            if(isset($_FILES['bride_image']) && file_exists($_FILES['bride_image']['tmp_name'])) {
                // replaceImage('../../images', $_FILES['bride_image'], 'bride.png');
                $brideFileType = strtolower(pathinfo($_FILES['bride_image']['name'], PATHINFO_EXTENSION));
                if($brideFileType != "png" && $brideFileType != "jpg" && $brideFileType != "jpeg") {
                    ?>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Invalid file type for bride image!',
                            text: 'Only JPG, PNG, and JPEG files are allowed.'
                        })
                    </script>
                    <?php
                    return;
                    } else {
                    moveImageWithName('../../images', $_FILES['bride_image'], 'bride.png');
                }
            }
            if(isset($_FILES['groom_image']) && file_exists($_FILES['groom_image']['tmp_name'])) {
                // replaceImage('../../images', $_FILES['groom_image'], 'groom.png');
                $groomFileType = strtolower(pathinfo($_FILES['groom_image']['name'], PATHINFO_EXTENSION));
                if($groomFileType != "png" && $groomFileType != "jpg" && $groomFileType != "jpeg") {
                    ?>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Invalid file type for groom image!',
                            text: 'Only JPG, PNG, and JPEG files are allowed.'
                        })
                    </script>
                    <?php
                    return;
                    } else {
                        moveImageWithName('../../images', $_FILES['groom_image'], 'groom.png');
                    }
            }
            if($check_database_bride->rowCount() > 0 ) {
                $query = "UPDATE bride SET bride =?, number=?, mom =?, dad=?, bank=?, rekening=?, image=?";
                $update = $connect -> prepare($query);
                $update -> execute ([$_POST['bride'],$_POST['brideNo'],  $_POST['bride_mom'], $_POST['bride_dad'], $_POST['bride_bank'], $_POST['bride_rek'], "bride.png"]);
            } else {
                $query = "INSERT INTO bride (`bride`,`number`, `mom`, `dad`, `bank`, `rekening`, `image`) VALUES (?,?,?,?,?,?,?)";
                $insert = $connect->prepare($query);
                $insert -> execute ([$_POST['bride'], $_POST['brideNo'], $_POST['bride_mom'], $_POST['bride_dad'], $_POST['bride_bank'], $_POST['bride_rek'], "bride.png"]);
            }

            if($check_database_groom->rowCount() > 0 ) {
                $query = "UPDATE groom SET groom =?, number=?, mom =?, dad=?, bank=?, rekening=?, image=?";
                $update = $connect -> prepare($query);
                $update -> execute ([$_POST['groom'],$_POST['groomNo'],  $_POST['groom_mom'], $_POST['groom_dad'], $_POST['groom_bank'], $_POST['groom_rek'], "groom.png"]);
            } else {
                $query = "INSERT INTO groom (`groom`, `number`, `mom`, `dad`, `bank`, `rekening`, `image`) VALUES (?,?,?,?,?,?,?)";
                $insert = $connect->prepare($query);
                $insert -> execute ([$_POST['groom'],$_POST['groomNo'], $_POST['groom_mom'], $_POST['groom_dad'], $_POST['groom_bank'], $_POST['groom_rek'], "groom.png"]);
            }

            ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
            <script>
                Swal.fire({
                    icon:'success',
                    title:'Data has been updated successfully!',
                }).then(function(){
                    window.location = "data.php";
                });
            </script>
            <?php
        } else if (isset($_POST['jadwal'])) {
            if(isset($_FILES['bride_groom_image'])  && file_exists($_FILES['bride_groom_image']['tmp_name'])) {
                $brideGroomFileType = strtolower(pathinfo($_FILES['bride_groom_image']['name'], PATHINFO_EXTENSION));
                if($brideGroomFileType != "png" && $brideGroomFileType != "jpg" && $brideGroomFileType != "jpeg") {
                    ?>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Invalid file type for cover image!',
                            text: 'Only JPG, PNG, and JPEG files are allowed.'
                        })
                    </script>
                    <?php
                    return;
                    } else {
                        replaceImage('../../images', $_FILES['bride_groom_image'], 'bridegroom.png');
                    }
            }
           
            if ($check_database -> rowCount()>0) {
                
                $query = "UPDATE general SET date =?, location=?, holymatrimony_address =?, holymatrimony_date=?, holymatrimony_map=?, reception_address =?, reception_date=?, reception_map=?, thankyou=?, couple_address=?";
                $update = $connect -> prepare($query);
                $update -> execute ([$_POST['inv_date'], $_POST['inv_location'], $_POST['holymatrimony_address'], $_POST['holymatrimony_date'], $_POST['holymatrimony_map'], $_POST['reception_address'], $_POST['reception_date'], $_POST['reception_map'], $_POST['ty'],  $_POST['couple_address']]);
            } else {
                $query = "INSERT INTO general (`image`, `date`, `location`, `holymatrimony_address`, `holymatrimony_date`, `holymatrimony_map`, `reception_address`, `reception_date`, `reception_map`, `thankyou`, `couple_address`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
                $insert = $connect->prepare($query);
                $insert -> execute (["bridegroom.png",$_POST['inv_date'],  $_POST['inv_location'],$_POST['holymatrimony_address'], $_POST['holymatrimony_date'], $_POST['holymatrimony_map'], $_POST['reception_address'], $_POST['reception_date'], $_POST['reception_map'], $_POST['ty'] , $_POST['couple_address']]);
            }
            ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
            <script>
                Swal.fire({
                    icon:'success',
                    title:'Data has been updated successfully!',
                }).then(function(){
                    window.location = "jadwal.php";
                });
            </script>
            <?php
        }
    
    ?>
        