<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Sponsors - Front UX & Product Management Case Study Conference, Spring 2023';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="secondary product-workshops-page product-why">
		<section class="hero">
			<h1>Sponsors</h1>
		</section>
		<section class="reasons-why">
			<h2>Sponsors</h2>
			<p class="about-reasons-why">We do things differently from most conferences. We don’t have a call for speakers. We build the program through networking, research, and recruiting. We actively seek out innovative teams and individuals that are doing great work in the industry and then work with them to craft case study stories around real projects they are working on. This is a practitioner’s conference—our speakers are those currently working as product managers, designers, researchers or those managing teams in those fields. This substantially increases the value for attendees and for our sponsors.<br /><br /><strong> Sponsors have a focused audience of the industry's best that are eager to engage and attendees are provided authentic content, resources, networking, and job opportunities.</strong></p>
		</section>
		<section class="training-courses sponsors" style="padding-top: 0px">
<?php

// organize sponsors
$sponsor_premier = null;
$sponsors_tier2 = array();

foreach($sponsors as $sponsor) {
	switch($sponsor['tier']) {
		case 1:
			$sponsor_premier = $sponsor;
			break;
		case 2:
			$sponsors_tier2[] = $sponsor;
			break;
	}
}

// display premier sponsor if exists
if(!is_null($sponsor_premier)) {
	echo '<a href="/conference/sponsor/' . $sponsor_premier['slug'] . '" target="_blank"><img id="premier" src="/images/sponsors/' . $sponsor_premier['logo'] . '" /></a>';
}


// display second+ tier sponsors
if(count($sponsors_tier2) > 0) {
	echo '<ul class="second_tier">';
}

// randomize list
shuffle($sponsors_tier2);

// spit them out
foreach($sponsors_tier2 as $sponsors_tier2_sponsor) {
	echo '<li class="second_tier_sponsor"><a href="/conference/sponsor/' . $sponsors_tier2_sponsor['slug'] . '" target="_blank"><img src="/images/sponsors/' . $sponsors_tier2_sponsor['logo'] . '" height="60px" /></a></li>';
}

if(count($sponsors_tier2)) {
	echo '</ul>';
}

?>

		</section>
		<section class="contact-us">
			<h2>Partner with us</h2>
			<p>Your product or brand should be experienced at the Front.</p>
			<ul>
				<li>
					<p>Sponsorship inquiries:</p>
					<p><a href="mailto:wade@frontutah.com">wade@frontutah.com</a></p>
					<p><a href="tel:8013681971">801.368.1971</a></p>
				</li>
			</ul>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>