<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<?php

// twitter card meta data
if(isset($meta['twitter']) && !empty($meta['twitter'])) {
	foreach($meta['twitter'] as $key => $value) {
		echo '	<meta name="twitter:' . $key . '" content="' . $value . '">' . "\n";
	}
}

// open graph meata data
if(isset($meta['opengraph']) && !empty($meta['opengraph'])) {
	foreach($meta['opengraph'] as $key => $value) {
		echo '	<meta property="og:' . $key . '" content="' . $value . '" />' . "\n";
	}
}

?>

	<link rel="stylesheet" href="/styles/style.css">
	<link rel="stylesheet" href="/styles/magnific-popup.css">

	<link rel="apple-touch-icon" href="/images/apple-touch-icon.png" type="image/png" />
	<link rel="mask-icon" href="/images/mask-icon.svg" color="gray" />
	<link rel="shortcut icon" href="/images/favicon.ico" />
</head>
<body>

<div class="headers">
	<header class="primary-header">
		<nav class="primary-nav">
			<ul>
<?php

$global_nav[1] = array('subsite' => 'landing', 'link' => '/', 'text' => 'Home', 'class' => 'home');
$global_nav[2] = array('subsite' => 'conference', 'link' => '/conference', 'text' => 'Case Study Conference', 'class' => 'case-study');
$global_nav[3] = array('subsite' => 'workshops', 'link' => '/workshops', 'text' => 'Workshop Series', 'class' => 'workshops');



// Mobile Order: Actual Order. Desktop Order: Class Names. Bless you Flexbox)

switch($uri_parts[0]) {
	case 'conference':
		$global_nav_order = array(2,3,4,1);
		break;
	case 'workshops';
		$global_nav_order = array(3,2,4,1);
		break;
	case 'onsite';
		$global_nav_order = array(2,3,4,1);
		break;
	default:
		$global_nav_order = array(1,2,3,4);
}


// sort global nav
foreach($global_nav_order as $global_nav_order_item) {
	$sorted_global_nav[$global_nav_order_item] = $global_nav[$global_nav_order_item];
}


// build global nav
foreach($sorted_global_nav as $key => $nav) {
	echo '				<li class="order-' . $key . '"><a href="' . $nav['link'] . '" class="' . $nav['class'];

	if($uri_parts[0] == $nav['subsite'] || empty($uri_parts[0]) && $nav['subsite'] == 'landing') {
		echo ' active';
	}

	echo '" target="' . $nav['target'] . '">' . $nav['text'] . '</a></li>';
	echo "\n";
}

?>
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

		//$conference_nav[] = array('link' => 'talks', 'text' => 'Talks & schedule', 'class' => '');
		$conference_nav[] = array('link' => 'speakers', 'text' => 'Speakers', 'class' => '');
		$conference_nav[] = array('link' => 'venue', 'text' => 'Venue', 'class' => '');
		$conference_nav[] = array('link' => 'faqs', 'text' => 'FAQs', 'class' => '');
		$conference_nav[] = array('link' => 'whyattend', 'text' => 'Why attend', 'class' => '');
		$conference_nav[] = array('link' => 'registration', 'text' => 'Register', 'class' => 'button');

		echo '
			<header class="section-header">
				<nav class="section-nav">
					<div class="section-nav-head">
						<a href="/conference"><h3 class="logo">Front</h3></a>
						<button class="menu-toggle"></button>
					</div>
					<ul>';

		foreach($conference_nav as $conference_navitem) {
			echo '<li><a href="/conference/' . $conference_navitem['link'] . '" class="' . $conference_navitem['class'];

			if($uri_parts[1] == $conference_navitem['link']) {
				echo ' selected';
			}

			echo '">' . $conference_navitem['text'] . '</a></li>';
		}

		echo '
					</ul>
				</nav>
			</header>';
		break;
	case 'workshops';

		$workshops_nav[] = array('link' => 'courses', 'text' => 'Courses', 'class' => '');
		$workshops_nav[] = array('link' => 'instructors', 'text' => 'Instructors', 'class' => '');
		$workshops_nav[] = array('link' => 'venue', 'text' => 'Venue', 'class' => '');
		$workshops_nav[] = array('link' => 'schedule', 'text' => 'Schedule', 'class' => '');
		$workshops_nav[] = array('link' => 'faqs', 'text' => 'FAQs', 'class' => '');
		$workshops_nav[] = array('link' => 'whyattend', 'text' => 'Why attend', 'class' => '');
		$workshops_nav[] = array('link' => 'registration', 'text' => 'Register', 'class' => 'button');

		echo '
			<header class="section-header">
				<nav class="section-nav">
					<div class="section-nav-head">
						<a href="/workshops"><h3 class="logo">Front</h3></a>
						<button class="menu-toggle"></button>
					</div>
					<ul>';

		foreach($workshops_nav as $workshops_navitem) {
			echo '<li><a href="/workshops/' . $workshops_navitem['link'] . '" class="' . $workshops_navitem['class'];

			if($uri_parts[1] == $workshops_navitem['link']) {
				echo ' selected';
			}

			echo '">' . $workshops_navitem['text'] . '</a></li>';
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
