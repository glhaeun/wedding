<?php
        if (isset($_POST['save'])) {
        
            if($check_database_bride->rowCount() > 0 ) {
                $query = "UPDATE bride SET bride =?, mom =?, dad=?, bank=?, rekening=?";
                $update = $connect -> prepare($query);
                $update -> execute ([$_POST['bride'], $_POST['bride_mom'], $_POST['bride_dad'], $_POST['bride_bank'], $_POST['bride_rek']]);
            } else {
                $query = "INSERT INTO bride (`bride`, `mom`, `dad`, `bank`, `rekening`) VALUES (?,?,?,?,?)";
                $insert = $connect->prepare($query);
                $insert -> execute ([$_POST['bride'], $_POST['bride_mom'], $_POST['bride_dad'], $_POST['bride_bank'], $_POST['bride_rek']]);
            }

            if($check_database_groom->rowCount() > 0 ) {
                $query = "UPDATE groom SET groom =?, mom =?, dad=?, bank=?, rekening=?";
                $update = $connect -> prepare($query);
                $update -> execute ([$_POST['groom'], $_POST['groom_mom'], $_POST['groom_dad'], $_POST['groom_bank'], $_POST['groom_rek']]);
            } else {
                $query = "INSERT INTO groom (`groom`, `mom`, `dad`, `bank`, `rekening`) VALUES (?,?,?,?,?)";
                $insert = $connect->prepare($query);
                $insert -> execute ([$_POST['groom'], $_POST['groom_mom'], $_POST['groom_dad'], $_POST['groom_bank'], $_POST['groom_rek']]);
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
            if ($check_database -> rowCount()>0) {
                $query = "UPDATE general SET invitation =?, date =?, holymatrimony_address =?, holymatrimony_date=?, holymatrimony_map=?, reception_address =?, reception_date=?, reception_map=?, thankyou=?, couple_address=?";
                $update = $connect -> prepare($query);
                $update -> execute ([$_POST['inv_title'], $_POST['inv_date'], $_POST['holymatrimony_address'], $_POST['holymatrimony_date'], $_POST['holymatrimony_map'], $_POST['reception_address'], $_POST['reception_date'], $_POST['reception_map'], $_POST['ty'],  $_POST['couple_address']]);
            } else {
                $query = "INSERT INTO general (`invitation`, `date`, `holymatrimony_address`, `holymatrimony_date`, `holymatrimony_map`, `reception_address`, `reception_date`, `reception_map`, `thankyou`, `couple_address`) VALUES (?,?,?,?,?,?,?,?,?,?)";
                $insert = $connect->prepare($query);
                $insert -> execute ([$_POST['inv_title'], $_POST['inv_date'], $_POST['holymatrimony_address'], $_POST['holymatrimony_date'], $_POST['holymatrimony_map'], $_POST['reception_address'], $_POST['reception_date'], $_POST['reception_map'], $_POST['ty'] , $_POST['couple_address']]);
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
        