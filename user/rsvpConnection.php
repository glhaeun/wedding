<?php
    require("component/connect.php");

    $nama = $_POST['nama'];
    $kehadiran = $_POST['kehadiran'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO message_rsvp (name, status, message) VALUES ('$nama', '$kehadiran', '$pesan')";
    if ($connect->query($sql) === TRUE) {
        echo "Data inserted successfully";
    }
?>