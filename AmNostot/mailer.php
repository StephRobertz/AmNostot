<?php

$name = $_POST["name"];
$email = $_POST["email"];
// $subject = $_POST["subject"];
$message = $_POST["message"];

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//instans
$mail = new PHPMailer(true);

//debug
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

//skicka
$mail->isSMTP();
$mail->SMTPAuth = true;

//konfigurera smtp servern, webhotellet
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "devjohto@gmail.com";
$mail->Password = "xuhvcllaogxbyswp";

//skicka
$mail->setFrom($email, $name);
//mottagarn
$mail->addAddress("devjohto@gmail.com");

// $mail->Subject = $subject;
$mail->Body = $message;
$mail->addReplyTo($email, $name);

$mail->send();

header("Location: sent.html");
?>