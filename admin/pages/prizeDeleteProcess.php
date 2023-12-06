<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['deleteId'])) {
        $deleteId = $_POST['deleteId'];

        try {
            include_once '../component/connect.php';
            
            $query = "DELETE FROM prize WHERE id = ?";
            $update = $connect->prepare($query);
            $update->execute([$deleteId]);
            
            $columnToDelete = "kode_$deleteId";
            $query = "ALTER TABLE user DROP COLUMN $columnToDelete";

            $update = $connect->prepare($query);
            $update->execute();


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
