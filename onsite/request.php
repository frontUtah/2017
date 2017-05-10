<?php

// send email
if(!empty($_POST)) {
	$to      = 'me@wadeshearer.com';
	$subject = 'Front onsite training request';
	$message = "Front onsite training request:\n\n";
	$message .= "Name: " . $_POST['name'] . "\n";
	$message .= "Company: " . $_POST['company'] . "\n";
	$message .= "Email: " . $_POST['email'] . "\n";
	$headers = 'From: noreply@frontutah.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
} else {
	header('Location: /onsite');
}


$title = 'Front - The product conference for UX designers and product managers';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="custom-training">
		<section class="hero">
			<h1>Custom onsite training</h1>
			<p>Let us to bring Front to you. Tell us about your organization's needs and we'll build a custom training solution to meet them.</p>
		</section>

		<a name="success"></a>

		<section class="request-form">
			<h2>Request Training</h2>
			<p>Thanks. We'll be in touch to arrange details!</p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>