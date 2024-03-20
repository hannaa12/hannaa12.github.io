<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $senderName = $_POST['name'] ?? 'Anonymous';
    $senderEmail = $_POST['email'] ?? 'no-reply@example.com';
    $message = $_POST['message'] ?? '';

    // Disable verbose debug output
    $mail->SMTPDebug = 0;

    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hanisaravanan@gmail.com';
    $mail->Password = 'nput kyhf kmtm ottf';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('hanisaravanan@gmail.com', $senderName);
    $mail->addReplyTo($senderEmail, $senderName);
    $mail->addAddress('hanisaravanan@gmail.com', 'Sujith Kumar');

    $mail->isHTML(true);
    $mail->Subject = 'New Message from ' . $senderName;
    $mail->Body    = "<b>Name:</b> $senderName<br>" .
        "<b>Email:</b> $senderEmail<br>" .
        "<b>Message:</b> " . nl2br($message);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
