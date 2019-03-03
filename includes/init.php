<?php

// global variables
$uri_parts = explode('/', trim($_SERVER['REQUEST_URI'], '/'));


// global includes
require($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php');

// sub site includes
switch($uri_parts[0]) {
	case 'conference':
		require($_SERVER['DOCUMENT_ROOT'] . '/conference/speakers.data.php');
		require($_SERVER['DOCUMENT_ROOT'] . '/conference/talks.data.php');
		break;
	case 'workshops':
		require($_SERVER['DOCUMENT_ROOT'] . '/workshops/instructors.data.php');
		require($_SERVER['DOCUMENT_ROOT'] . '/workshops/courses.data.php');
		break;
	case 'onsite':
		require($_SERVER['DOCUMENT_ROOT'] . '/onsite/consultants.data.php');
		require($_SERVER['DOCUMENT_ROOT'] . '/onsite/trainings.data.php');
		break;
	case 'training':
		switch($uri_parts[1]) {
			case 'public':
				require($_SERVER['DOCUMENT_ROOT'] . '/training/public/instructors.data.php');
				require($_SERVER['DOCUMENT_ROOT'] . '/training/public/workshops.data.php');
			break;
		}
		break;
}

?>