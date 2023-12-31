<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php'; // Path to the autoload file from PHPMailer

function generateUniqueCode($columnName, $email, $connect) {
    do {
        $randomNumber = mt_rand(100000000, 999999999);
        
        $checkQuery = "SELECT COUNT(*) as count FROM user WHERE $columnName = ? AND id != ?";
        $checkStatement = $connect->prepare($checkQuery);
        $checkStatement->execute([$randomNumber, $email]);
        $result = $checkStatement->fetch(PDO::FETCH_ASSOC);
        $count = $result['count'];
    } while ($count > 0); 
    
    return $randomNumber;
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $isSent = false;

    $query = "SELECT * FROM user WHERE email ='$email' ";
    $get_user = $connect->prepare($query);
    $get_user->execute();


    if($get_user->rowCount() > 0) {
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
        <script>
            Swal.fire({
                icon:'warning',
                title:'You have already invited this user!!',
            });
        </script>
        <?php
    } else {
        try {
            require('../component/phpmailer/vendor/phpmailer/phpmailer/src/SMTP.php');
            require('../component/phpmailer/vendor/phpmailer/phpmailer/src/Exception.php');    
            require('../component/phpmailer/vendor/phpmailer/phpmailer/src/PHPMailer.php');
            $invitationLink = 'https://wedding-21ti2.000webhostapp.com/user/main.php?email=' . $email;
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPSecure = 'ssl';
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPDebug = 0;
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->Timeout = 60;
            $mail->SMTPKeepAlive = true; 
            $mail->Username = "evotingindonesia23@gmail.com";
            $mail->Password = "ldaxltxowanuluyu";
            $mail->SetFrom("evotingindonesia23@gmail.com","Wedding Invitation");
            $mail->Subject = $subject;
            $mail->AddAddress("{$email}", $name);
            $mail->MsgHTML($message.'<br><br><p>Click <a href="' . $invitationLink . '">here</a> to open the invitation.</p>');
            $mail->IsHTML(true);	
            $result = $mail->Send();
    
            if ($result) {
                $query = "INSERT INTO user (name, email, attend) VALUES ( ?, ?, ?)";
                $insert_user = $connect -> prepare($query);
                $insert_user -> execute ([$name, $email, 'Unknown']);
                $getColumnsQuery = "SHOW COLUMNS FROM user";
                $getColumnsStatement = $connect->prepare($getColumnsQuery);
                $getColumnsStatement->execute();
                $columns = $getColumnsStatement->fetchAll(PDO::FETCH_ASSOC);

                // Determine the number of kode columns
                $kodeColumns = [];
                foreach ($columns as $column) {
                    $columnName = $column['Field'];
                    if (strpos($columnName, 'kode_') === 0) {
                        $kodeColumns[] = $columnName;
                    }
                }

                $numberOfCodesToUpdate = count($kodeColumns);

                for ($i = 0; $i < $numberOfCodesToUpdate; $i++) {
                    $uniqueCode = generateUniqueCode($kodeColumns[$i], $email, $connect); // Function to generate a unique code (e.g., a random string)
                    // Update the user table with the generated unique code
                    $updateQuery = "UPDATE user SET {$kodeColumns[$i]} = ? WHERE email = ?";
                    $updateStatement = $connect->prepare($updateQuery);
                    $updateStatement->execute([$uniqueCode, $email]);
                }

                
                ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
            <script>
                Swal.fire({
                    icon:'success',
                    title:'Email sudah dikirim!',
                }).then(function(){
                    window.location = "guest.php";
                });
            </script>
            <?php
        
            } else {
                echo 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            }
    
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    
} 
?>
