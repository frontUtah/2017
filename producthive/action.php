<?php

if(!empty($_POST)) {
	// generate discount code
	$discount_code = 'ph20_' . uniqid();
	
	
	// send email to PH member
	
	unset($mail);
	
	$mail['to']      = $_POST['email'];
	$mail['subject'] = 'Front discount code';
	$mail['message'] = "Here's your discount code to the Front UX & Product Management Case Study conference. Enter the code during registration to receive your 20% off. We look forward to seeing you there." . "\n\n";
	$mail['message'] .= "Discount code: " . $discount_code . "\n\n\n";
	$mail['message'] .= 'https://www.frontutah.com/conference/registration';
	$mail['headers'] = 'From: ben@frontutah.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($mail['to'], $mail['subject'], $mail['message'], $mail['headers']);
	
	
	// send email to Ben
	
	unset($mail);
	
	$mail['to']      = 'ben@frontutah.com';
	$mail['subject'] = 'Product Hive discount code request: ' . $_POST['name'];
	$mail['message'] = "Name: " . $_POST['name'] . "\n";
	$mail['message'] .= "Email: " . $_POST['email'] . "\n";
	$mail['message'] .= "Discount code: " . $discount_code;
	$mail['headers'] = 'From: noreply@frontutah.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($mail['to'], $mail['subject'], $mail['message'], $mail['headers']);
	
	
	// success
	header('Location: /producthive?form=success');
} else {
	header('Location: /producthive');
}

?>