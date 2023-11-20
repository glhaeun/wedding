<?php 
    $bride_database = $connect->prepare("SELECT * FROM bride");
    $bride_database -> execute();

    $bride = array();
    if ($bride_database->rowCount() > 0) {
        $bride = $bride_database->fetch(PDO::FETCH_ASSOC);
    } 

    $groom_database = $connect->prepare("SELECT * FROM groom");
    $groom_database -> execute();

    $groom = array();
    if ($groom_database->rowCount() > 0) {
        $groom = $groom_database->fetch(PDO::FETCH_ASSOC);
    } 


?>