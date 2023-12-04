<?php
    require("component/connect.php");

    $action = $_GET['action'];

    // Insert Data
    if ($action === 'insert') {
        $nama = $_POST['nama'];
        $kehadiran = $_POST['kehadiran'];
        $kehadiran = 1 ? "Hadir" : "Berhalangan";
        $pesan = $_POST['pesan'];

        if ($_SESSION['userEmail']) {
            $email = $_SESSION['userEmail'];

            $query = "UPDATE user SET attend='$kehadiran' WHERE email = '$email'";
            if ($connect->query($query) === TRUE) {
                echo "Data updated successfully";
            }
        } else {
            $email = 'anonymous';
        }

        $sql = "INSERT INTO message_rsvp (name, status, message, email) VALUES ('$nama', '$kehadiran', '$pesan', '$email')";
        if ($connect->query($sql) === TRUE) {
            echo "Data inserted successfully";
        }
    }

    // Select Data
    if ($action === 'select') {
        $selectQuery = "SELECT * FROM message_rsvp";
        $result = $connect->query($selectQuery);

        if (!$result) {
            die("Error in SQL query: " . $connect->errorInfo()[2]);
        }

        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
    }

    // Update Data
    if ($action === 'update') {
        $id = $_POST['messageId']; 
        $editedName = $_POST['updatedName']; 
        $editedStatus = $_POST['updatedStatus'];
        $editedStatus = 1 ? "Hadir" : "Berhalangan";
        $editedMessage = $_POST['updatedMessage']; 
        $updateQuery = "UPDATE message_rsvp SET name='$editedName', status='$editedStatus', message='$editedMessage' WHERE id=$id";
        
        if ($connect->query($updateQuery) === TRUE) {
            echo "Data updated successfully";
        } else {
            echo "Error updating data: " . $connect->errorInfo()[2];
        }
    }
    
?>
