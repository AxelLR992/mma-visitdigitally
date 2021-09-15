<?php
$to = 'carlos@planetm.us';
$subject = 'You subject';
$headers = 'From: (www.planetm.us/sports)' . "\r\n" . 'Content-type: text/html; charset=utf-8';
$message = '
<html>
	<head>
		<title>Register in www.planetm.us/sports Contact Form</title>
	</head>
	<body>
		
		<h3>Email for register www.planetm.us/sports: <span style="font-weight: normal;">' . $_POST['email'] . '</span></h3>
		
	</body>
</html>';

if (!empty($_POST['email']) ) {
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		mail($to, $subject, $message, $headers) or die('<span class="text-danger">Error sending Mail</span>');
	  echo '<span class="text-success send-true">Email sent successfully for register </span>';
	} else {
		echo '<span class="text-danger">Please specify correct e-mail!</span>';
	}
} else {
	echo '<span class="text-danger">All fields must be filled!</span>';
}

?>
