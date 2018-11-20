<?php

// send email
if(!empty($_POST)) {
	$to      = 'ben@frontutah.com';
	$subject = 'Front onsite training request: ' . $_POST['name'] . ' at ' . $_POST['company'];
	$message = "Front onsite training request:\n\n";
	$message .= "Name: " . $_POST['name'] . "\n";
	$message .= "Company: " . $_POST['company'] . "\n";
	$message .= "Email: " . $_POST['email'] . "\n";
	$message .= "Training: " . $_POST['training'] . "\n";
	$message .= "Consultant: " . $_POST['consultant'] . "\n";
	$headers = 'From: noreply@frontutah.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
} else {
	header('Location: /onsite');
}

?>