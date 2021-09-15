<?php
if($_POST)
{
require('constant.php');
    
    $user_name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $user_phone     = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $content   = filter_var($_POST["content"], FILTER_SANITIZE_STRING);
    
    if(empty($user_name)) {
		$empty[] = "<b>Nombre</b>";		
	}
	if(empty($user_email)) {
		$empty[] = "<b>Email</b>";
	}
	if(empty($user_phone)) {
		$empty[] = "<b>Teléfono</b>";
	}	
	if(empty($content)) {
		$empty[] = "<b>Comentario</b>";
	}
	
	if(!empty($empty)) {
		$output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Requerido!'));
        die($output);
	}
	
	if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
	    $output = json_encode(array('type'=>'error', 'text' => '<b>'.$user_email.'</b> es un email invalido, por favor corríjalo.'));
		die($output);
	}
	
	//reCAPTCHA validation
	if (isset($_POST['g-recaptcha-response'])) {
		
		// Build POST request:
	    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
	    $recaptcha_secret = SECRET_KEY;
	    $recaptcha_response = $_POST['g-recaptcha-response'];

	    // Make and decode POST request:
	    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
	    $recaptcha = json_decode($recaptcha);
	    // Take action based on the score returned:
	    
	    if (!$recaptcha->success ) {
			$output = json_encode(array('type'=>'error', 'text' => '<b>Captcha</b> Validation Required!'));
			die($output);		
	    }
	}
	
	$toEmail = "carlos@planetm.us";
	$mailHeaders = "From: " . $user_name . "<" . $user_email . ">\r\n";
	if (mail($toEmail, "Contact Mail", $content, $mailHeaders)) {
	    $output = json_encode(array('type'=>'message', 'text' => 'Hola '.$user_name .', gracias por su comentario. Nos pondremos en contacto a la brevedad.'));
	    die($output);
	} else {
	    $output = json_encode(array('type'=>'error', 'text' => 'Hubo un error al enviar el email, por favor contacte'.SENDER_EMAIL));
	    die($output);
	}
}
?>