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
	case 'workshops';
		require($_SERVER['DOCUMENT_ROOT'] . '/workshops/instructors.data.php');
		require($_SERVER['DOCUMENT_ROOT'] . '/workshops/courses.data.php');
		break;
}

?>