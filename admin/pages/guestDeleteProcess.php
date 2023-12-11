<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['deleteId'])) {
        $deleteId = $_POST['deleteId'];

        try {
            include_once '../component/connect.php';

            $query = "SELECT email FROM user WHERE id = ?";
            $get = $connect->prepare($query);
            $get->execute([$deleteId]);
            $emailUser = $get->fetch();
            
            $query = "DELETE FROM user WHERE id = ?";
            $delete = $connect->prepare($query);
            $delete->execute([$deleteId]);

            $query = "DELETE FROM message_rsvp WHERE email = ?";
            $update = $connect->prepare($query);
            $update->execute([$emailUser['email']]);

            echo json_encode(array("status" => "success", "message" => "Data deleted successfully"));
        } catch (PDOException $e) {
            echo json_encode(array("status" => "error", "message" => "Error deleting data: " . $e->getMessage()));
        }
    } else {
        echo json_encode(array("status" => "error", "message" => "Invalid delete ID"));
    }
} else {
    echo json_encode(array("status" => "error", "message" => "Invalid request method"));
}

?>
