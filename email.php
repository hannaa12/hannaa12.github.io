<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'hanisaravanan@gmail.com'; // Change this to your email address
    $subject = 'Message from Website Contact Form';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    if(mail($to, $subject, $body)) {
      echo "Mail Sent!";
    } else {
      echo "Failed to send mail!";
    }
}
?>
