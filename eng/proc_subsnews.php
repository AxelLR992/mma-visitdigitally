<?php
$to = "carlosvassallo@gmail.com";
$subject = "PlanetM.us News Subscription";

// compose headers
$headers = "From: carlos@planetm.us\r\n";
$headers .= "Reply-To: carlos@planetm.us\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

// compose message
$message = "Email: ";
$message .= $_POST['email-news'];
$message = wordwrap($message, 70);

// send email
mail($to, $subject, $message, $headers);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body style="background-color: #D3D742; color: #FFFFFF; font-family: Arial; font-size: 20px; font-weight: normal; text-align: center">
    <p style="padding-top: 50px;">Thank you for subscribing!</p>
</body>
</html>
