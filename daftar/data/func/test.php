<?php 
    require '../../../mail/PHPMailer.php';
    require '../../../mail/SMTP.php';
    require '../../../mail/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";
    $mail->Username = "it.specialist@mitrajasa.com";
    $mail->Password = "JaWaRa321";
    $mail->Subject = "Test";
    $mail->setFrom("adewaloyo01.9f@gmail.com");
    $mail->Body = "Test";
    $mail->addAddress("adewaloyo01.9f@gmail.com");
    if ($mail->Send()) {
       echo "Send";

    }else{
        echo "Error";
    }

    $mail->smtpClose();
?>