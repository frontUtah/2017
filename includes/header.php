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
<?php

$global_nav[1] = array('subsite' => 'landing', 'link' => '/', 'text' => 'Home', 'class' => 'home');
$global_nav[2] = array('subsite' => 'conference', 'link' => '/conference', 'text' => 'Case Study Conference', 'class' => 'case-study');
$global_nav[3] = array('subsite' => 'bootcamp', 'link' => '/bootcamp', 'text' => 'Product Bootcamp', 'class' => 'bootcamp');
$global_nav[4] = array('subsite' => 'onsite', 'link' => '/onsite', 'text' => 'Custom Onsite Training', 'class' => 'custom-training');
$global_nav[5] = array('subsite' => 'magazine', 'link' => 'https://medium.com/front-conference', 'text' => 'Magazine', 'class' => 'magazine', 'target' => '_blank');


// Mobile Order: Actual Order. Desktop Order: Class Names. Bless you Flexbox)

switch($uri_parts[0]) {
	case 'conference':
		$global_nav_order = array(2,3,4,5,1);
		break;
	case 'bootcamp';
		$global_nav_order = array(3,2,4,5,1);
		break;
	case 'onsite';
		$global_nav_order = array(4,2,3,5,1);
		break;
	default:
		$global_nav_order = array(1,2,3,4,5);
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
		echo '
			<header class="section-header">
				<nav class="section-nav">
					<div class="section-nav-head">
						<h3 class="logo">Front</h3>
						<button class="menu-toggle"></button>
					</div>
				</nav>
			</header>';	
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
						<h3 class="logo">Front</h3>
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