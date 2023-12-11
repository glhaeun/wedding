<?php
    require("component/connect.php");

    $action = $_GET['action'];

    // Insert Data
    if ($action === 'insert') {
        $nama = $_POST['nama'];
        $kehadiran = $_POST['kehadiran'];
        $kehadiran == 1 ? 'Hadir' : 'Berhalangan';
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
        $userEmail = $_POST['userEmail']; 
        $editedName = $_POST['updatedName']; 
        $editedStatus = $_POST['updatedStatus'];
        $editedStatus == 1 ? 'Hadir' : 'Berhalangan';
        $editedMessage = $_POST['updatedMessage']; 

        var_dump($userEmail, $editedName, $editedStatus, $editedMessage);

        $updateQuery = "UPDATE message_rsvp SET name='$editedName', status='$editedStatus', message='$editedMessage' WHERE email='$userEmail'";
        $updateUser = $connect->prepare("UPDATE user set attend='$editedStatus' WHERE email = '$userEmail'");
        $updateUser -> execute();
        
        if ($connect->query($updateQuery) === TRUE) {
            echo "Data updated successfully";
        } else {
            echo "Error updating data: " . $connect->errorInfo()[2];
        }
    }

    if($action === 'checkUser') {
        $userEmail = $_GET['userEmail']; // Get the userEmail from the GET request

        $database = $connect->prepare("SELECT * FROM message_rsvp WHERE email = '$userEmail'");
        $database -> execute();

        if ($database->rowCount() > 0) {
            $row = $database->rowCount();
            echo $row;
        } else {
            $row = 0;
            echo $row;
        }
       
    }

    if($action === 'getData') {
        $email = $_SESSION['userEmail'];
        

        $userEmail = $_GET['userEmail']; 
        $database = $connect->prepare("SELECT * FROM message_rsvp WHERE email = '$userEmail'");
        $database -> execute();

        
        $data = $database->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
    }
    
    if ($_GET['action'] == 'delete') {
        $userEmail = $_POST['userEmail'];
        $sql = "DELETE FROM message_rsvp WHERE email = '$userEmail'";
    
        if ($connect->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting ";
        }
    }
?>
