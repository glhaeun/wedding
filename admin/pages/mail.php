<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php'; // Path to the autoload file from PHPMailer

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $isSent = false;

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
            $isSent = true;
        } else {
            echo 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }

        if ($isSent) {
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>';
            echo 'Swal.fire("Success", "Invitation has been sent successfully!", "success").then(function() {
                window.location = "dashboard.php";
            });';
            echo '</script>';
            exit; // Ensure no further code is executed
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request';
}
?>
