<?php

$to = "mail@bashudevsapkota.com.np";
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subjectt = $_POST['subject'];
 $message = $_POST['message'];
//change header email from and reply to
$headers = 'From: Portfolio Website <000webhostapp.com>' . "\r\n" . //Don't change this
           'Reply-To: mail@bashudevsapkota.com.np' . "\r\n" .   // Change this
           'X-Mailer: PHP' . phpversion();
$subject = "Contact - Bashudevsapkota.com.np";
$body = "Name: " . $name . "\n";
$body .= "Email: " . $email . "\n";
$body .= "Subject: " . $subjectt . "\n";
$body .= "Message: " . $message . "\n";



if (mail($to,$subject,$body,$headers)){
header('Location: https://bashudevsapkota.com.np/#contact');
}   else {
    echo 'Sorry, Something Went wrong, Please try again.>';
}
?>
Running from gopisapkota@000web.com-pw-Arjun@123
