<?php 
    include 'getBrideGroom.php';

    $brideBank = $bride['bank'];
    $database = $connect->prepare("SELECT * FROM bank WHERE bank_name='$brideBank'");
    $database -> execute();

    $dataBrideBank='';
    $dataGroomBank='';

    if ($database->rowCount() > 0) {
        $dataBrideBank = $database->fetch(PDO::FETCH_ASSOC);
    } 

    $groomBank = $groom['bank'];
    $groomRek = $groom['rekening'];
    $groomName = $groom['groom'];
    $database = $connect->prepare("SELECT * FROM bank WHERE bank_name='$groomBank'");
    $database -> execute();

    if ($database->rowCount() > 0) {
        $dataGroomBank = $database->fetch(PDO::FETCH_ASSOC);
    } 

?>