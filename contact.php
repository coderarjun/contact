<?php
$to = "mail@bashudevsapkota.com.np";
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$subjectt = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

$headers = 'From: Portfolio Website <your@email.com>' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$subject = "Contact - Bashudevsapkota.com.np";
$body = "Name: " . $name . "\n";
$body .= "Email: " . $email . "\n";
$body .= "Subject: " . $subjectt . "\n";
$body .= "Message: " . $message . "\n";

if (mail($to, $subject, $body, $headers)) {
  
    $redirect_url = "https://bashudevsapkota.com.np/#contact";
} else {
    $response_message = "Sorry, something went wrong. Please try again later.";
    $redirect_url = "https://bashudevsapkota.com.np/#contact"; // Replace with an appropriate URL
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Response</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>
    <script>
      
        window.location.href = "<?php echo $redirect_url; ?>";
    </script>
</head>
<body>
    <!-- This page will only be displayed briefly before the redirect occurs -->
</body>
</html>
