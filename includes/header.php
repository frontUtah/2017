<?php

// global variables

$uri_parts = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/styles/style.css">
	<link rel="stylesheet" href="/styles/magnific-popup.css">
</head>
<body>

<div class="headers">
	<header class="primary-header">
		<nav class="primary-nav">
			<ul>
				<!--Mobile Order: Actual Order. Desktop Order: Class Names. Bless you Flexbox-->
				<li class="order-1"><a href="/" class="home active">Home</a></li>
				<li class="order-2"><a href="/conference" class="case-study">Case Study Conference</a></li>
				<li class="order-3"><a href="/bootcamp" class="bootcamp">Product Bootcamp</a></li>
				<li class="order-4"><a href="/onsite" class="custom-training">Custom Onsite Training</a></li>
				<li class="order-5"><a href="https://medium.com/front-conference" class="magazine">Magazine</a></li>
			</ul>
		</nav>
		<nav class="social-nav">
			<ul>
				<li><a class="twitter" href="https://twitter.com/front">Twitter</a></li>
				<li><a class="linkedin" href="https://www.linkedin.com/company/front-utah">LinkedIn</a></li>
				<li><a class="instagram" href="https://www.instagram.com/frontutah/">Instagram</a></li>
			</ul>
		</nav>
	</header>

<?php

// include sub nav?

switch($uri_parts[0]) {
	case 'conference':
		break;
	case 'bootcamp';

		$bootcamp_nav[] = array('link' => 'courses', 'text' => 'Courses', 'class' => '');
		$bootcamp_nav[] = array('link' => 'schedule', 'text' => 'Schedule', 'class' => '');
		$bootcamp_nav[] = array('link' => 'instructors', 'text' => 'Instructors', 'class' => '');
		$bootcamp_nav[] = array('link' => 'venue', 'text' => 'Venue', 'class' => '');
		$bootcamp_nav[] = array('link' => 'faqs', 'text' => 'FAQs', 'class' => '');
		$bootcamp_nav[] = array('link' => 'whyattend', 'text' => 'Why attend', 'class' => '');
		$bootcamp_nav[] = array('link' => 'registration', 'text' => 'Register', 'class' => 'button');

		echo '
			<header class="section-header">
				<nav class="section-nav">
					<div class="section-nav-head">
						<a href="/bootcamp"><h3 class="logo">Front</h3></a>
						<button class="menu-toggle"></button>
					</div>
					<ul>';

		foreach($bootcamp_nav as $navitem) {
			echo '<li><a href="/bootcamp/' . $navitem['link'] . '" class="' . $navitem['class'];

			if($uri_parts[1] == $navitem['link']) {
				echo ' selected';
			}

			echo '">' . $navitem['text'] . '</a></li>';
		}

		echo '
					</ul>
				</nav>
			</header>';
		break;
	default:
}

?>

</div>