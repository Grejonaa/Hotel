<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'grejonagashi19@gmail.com';
    $mail->Password = 'qzxsjsseiqifclel';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    
   
    $mail->setFrom('grejonagashi19@gmail.com', 'Hotel Contact Form'); 
    
    $mail->addReplyTo($_POST['email'], $_POST['name']); 
    
    $mail->addAddress('grejonagashi19@gmail.com');  // Receiver Email
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    
    $mail->Body = "
        <p><strong>Name:</strong> {$_POST['name']}</p>
        <p><strong>Email:</strong> {$_POST['email']}</p>
        <p><strong>Phone Number:</strong> {$_POST['phone']}</p>
        <p><strong>Message:</strong><br>{$_POST['message']}</p>
    ";
    
    $mail->send();

    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'index.php';
    </script>
    
    ";


}



?>