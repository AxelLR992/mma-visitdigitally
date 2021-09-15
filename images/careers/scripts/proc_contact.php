<?php
$to = "web@netvisionsa.com";
$subject = "PlanetM.us Contact";

// compose headers
$headers = "From: carlos@planetm.us\r\n";
$headers .= "Reply-To: carlos@planetm.us\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

// compose message
$message = "Name: ";
$message .= $_POST['name_contact']."\n\n";
$message .= "Email: ";
$message .= $_POST['email_contact']."\n\n";
$message .= "Subject: ";
$message .= $_POST['subject_contact']."\n\n";
$message .= "Message: ";
$message .= $_POST['message_contact'];
//$message = wordwrap($message, 70);

// send email
mail($to, $subject, $message, $headers);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body style="background-color: #D3D742; color: #FFFFFF; font-family: Arial; font-size: 20px; font-weight: normal; text-align: center">
    <p style="padding-top: 50px;">Thank you for your contact!</p>
</body>
</html>
