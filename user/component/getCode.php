<?php 
    if(isset($_GET['email'])) {
        $email = $_GET['email'];
        $code_database = $connect->prepare("SELECT * FROM user where email='$email'");
        $code_database -> execute();

        $query = "SELECT id FROM prize";
        $getPrize = $connect->prepare($query);
        $getPrize->execute();

        if ($getPrize->rowCount() > 0) {
            while ($row = $getPrize->fetch(PDO::FETCH_ASSOC)) {
                $prizeId = $row['id'];
                ?>
                <td><?=$fetch_user['kode_'.$prizeId]?></td> 
                <?php
            }
        }

        if ($code_database->rowCount() > 0) {
            $code = $code_database->fetch(PDO::FETCH_ASSOC);
    } 
    }

    
?>