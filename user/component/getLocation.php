<?php 
    $query = "SELECT * from general";


    $database = $connect->prepare("SELECT * FROM general");
    $database -> execute();

    $data = array();
    if ($database->rowCount() > 0) {
        $data = $database->fetch(PDO::FETCH_ASSOC);

        $dateTime = new DateTime($data['holymatrimony_date']);
        $formattedHolyMatrimony = $dateTime->format('l, j F Y \a\t h.i a');
        $data['holymatrimony_formatedDate'] = $formattedHolyMatrimony;

        $dateTime = new DateTime($data['reception_date']);
        $formattedReception = $dateTime->format('l, j F Y \a\t h.i a');
        $data['reception_formatedDate'] = $formattedReception;    } 

?>