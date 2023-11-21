<?php
    require("component/connect.php");

    $nama = $_POST['nama'];
    $kehadiran = $_POST['kehadiran'];
    $pesan = $_POST['pesan'];

    if ($_SESSION['userEmail']) {
        $email = $_SESSION['userEmail'];

        $query = "UPDATE user SET attend='$kehadiran' WHERE email = '$email'";
        if ($connect->query($query) === TRUE) {
            echo "Data updated successfully";
        }
    }
    
    $sql = "INSERT INTO message_rsvp (name, status, message) VALUES ('$nama', '$kehadiran', '$pesan')";
    if ($connect->query($sql) === TRUE) {
        echo "Data inserted successfully";
    }

    


?>