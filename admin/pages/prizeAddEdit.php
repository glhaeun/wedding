<?php 
            include('../component/imageLib.php');
            if (isset($_POST['prize'])) {
                $name = $_POST["name"];


                if(isset($_FILES['prizeImage']) && file_exists($_FILES['prizeImage']['tmp_name'])) {
                    $image = moveImage('../../images', $_FILES['prizeImage']);
                } 
                if(isset($_FILES['cardImage']) && file_exists($_FILES['cardImage']['tmp_name'])) {
                    $cardImage = moveImage('../../images', $_FILES['cardImage']);
                }


                if($editMode) {
                    $check_database = $connect->prepare("SELECT * FROM prize WHERE id=?");
                    $check_database -> execute([$_POST['edit_id']]);
                
                    $data = array();
                    if ($check_database->rowCount() > 0) {
                        $data = $check_database->fetch(PDO::FETCH_ASSOC);
                    } 

                    if (empty($image)) {
                        $image = $data['image'];
                    } else {
                        deleteImage('../../images', $data['image']);
                    }
                    if (empty($cardImage)) {
                        $cardImage = $data['cardImage'];
                    } else {
                        deleteImage('../../images', $data['cardImage']);
                    }
                    
                    $query = "UPDATE prize SET name = ?, image = ?, cardImage = ? WHERE id = ?";
                    $update = $connect->prepare($query);
                    $update->execute([$name, $image, $cardImage, $editId]);
                    ?>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
                    <script>
                        Swal.fire({
                            icon:'success',
                            title:'Data has been updated successfully!',
                        }).then(function(){
                            window.location = `prize.php?edit=<?=$editId?>`;
                        });
                    </script>
                    <?php
                            
                } else {
                    if (empty($image)) {
                        $image = '';
                    }
                    if (empty($cardImage)) {
                        $cardImage = '';
                    }

                    $sql = "INSERT INTO prize (name, image, cardImage) VALUES ('$name', '$image', '$cardImage')";
                $insert = $connect->prepare($sql);
                $insert ->execute();

                $lastPrizeID = $connect->lastInsertId(); 

                $alterSql = "ALTER TABLE user ADD kode_$lastPrizeID INT(11)";
                $connect->query($alterSql);

                function generateUniqueRandom($connect, $lastPrizeID) {
                    $result = $connect->query("SELECT $lastPrizeID FROM user");
                    $usedNumbers = [];
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        $usedNumbers[] = $row[$lastPrizeID];
                    }
            
                    do {
                        $randomNumber = mt_rand(100000000, 999999999);
                    } while (in_array($randomNumber, $usedNumbers));
            
                    return $randomNumber;
                }
            
                // Update existing user records with a different random number for each user
                $result = $connect->prepare("SELECT id FROM user");
                $result -> execute();
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $userID = $row['id'];
                    $randomNumber = generateUniqueRandom($connect, $lastPrizeID);
            
                    $updateSql = "UPDATE user SET kode_$lastPrizeID = '$randomNumber' WHERE id = '$userID'";
                    $connect->query($updateSql);
                }
                }
                ?>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
                    <script>
                        Swal.fire({
                            icon:'success',
                            title:'Data has been inserted successfully!',
                        }).then(function(){
                            window.location = "prizeTable.php";
                        });
                    </script>
                    <?php
            
            }
    ?>