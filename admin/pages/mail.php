<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php'; // Path to the autoload file from PHPMailer

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
            $invitationLink = 'http://localhost/wedding/wedding/user/main.php?email=' . $email;
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
            $mail->SetFrom("evotingindonesia23@gmail.com","E-Voting Indonesia");
            $mail->Subject = $subject;
            $mail->AddAddress("{$email}", $name);
            $mail->MsgHTML($message.'<br><br><p>Click <a href="' . $invitationLink . '">here</a> to open the invitation.</p>');
            $mail->IsHTML(true);	
            $result = $mail->Send();
    
            if ($result) {
                $query = "INSERT INTO user (name, email, attend, isScratch, scratchData) VALUES ( ?, ?, ?, ?, ?)";
                $insert_user = $connect -> prepare($query);
                $insert_user -> execute ([$name, $email, 'Unknown', false, '']);
                ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
            <script>
                Swal.fire({
                    icon:'success',
                    title:'Email sudah dikirim!',
                }).then(function(){
                    window.location = "dashboard.php";
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
