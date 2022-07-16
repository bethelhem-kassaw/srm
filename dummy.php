
<?php
// use PHPMailer\PHPMailer\PHPMailer;
// require 'PHPMailer/Exception.php';
// require 'PHPMailer/PHPMailer.php';
// require 'PHPMailer/SMTP.php';
// require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';
 
// $mail = new PHPMailer;
 
// $mail->isSMTP();
// // $mail->SMTPDebug = 2;
// $mail->Host = 'smtp.gmail.com';
// $mail->SMTPAuth = true;
// $mail->Username = 'bethelhemkassaw@gmail.com';
// $mail->Password = 'oahbebfagsgmpjqz';
// $mail->SMTPSecure = 'tls';
 
// $mail->From = 'bethelhemkassaw@gmail.com';
// $mail->FromName = 'bethelhem kassaw';
// $mail->addAddress('bettykassaw@gmail.com', 'betty');
 
// $mail->addReplyTo('bettykassaw@gmail.com', 'betty');
 
// $mail->WordWrap = 50;
// $mail->isHTML(true);
 
// $mail->Subject = 'Using PHPMailer';
// $mail->Body    = 'Hi Iam using PHPMailer library to sent SMTP mail from localhost';
 
// if(!$mail->send()) {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
//    exit;
// }else{
//     header('location: verifyemail.php');

// }
session_start();
echo 'welcome'.$_SESSION['user_name'].$_SESSION['user_id'];