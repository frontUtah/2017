<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front UX & Product Management Workshop Series, 7-8 November 2019';

$meta['twitter']['card'] = "Front is the product conference for UX designers and product managers. It's a practitioner’s conference. Attendees come for an education, real world, from-the-trenches case studies, and hands-on training from their peers. It's four days of learning and growth, providing answers to deep organizational questions and insights into how to validate and solve the right problems in the right way.";
$meta['twitter']['site'] = '@front';
$meta['twitter']['title'] = $title;
$meta['twitter']['image'] = 'https://www.frontutah.com/images/social/front_social_workshops_earlybird.jpg';

$meta['opengraph']['title'] = 'Front - The product conference for UX designers and product managers';
$meta['opengraph']['type'] = 'article';
$meta['opengraph']['url'] = 'http://www.frontutah.com';
$meta['opengraph']['image'] = 'https://www.frontutah.com/images/social/front_social_workshops_earlybird.jpg';
$meta['opengraph']['description'] = "Front is the product conference for UX designers and product managers. It's a practitioner’s conference. Attendees come for an education, real world, from-the-trenches case studies, and hands-on training from their peers. It's four days of learning and growth, providing answers to deep organizational questions and insights into how to validate and solve the right problems in the right way.";
$meta['opengraph']['site_name'] = 'Front Conference';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="product-workshops">
		<section class="hero">
			<h1>UX &amp; Product Management Workshop Series</h1>
			<p>
				<ul>
					<li>2 days • 4 tracks • 20 courses</li>
					<li>200+ product designers and managers</li>
				</ul>
			</p>
			<p class="date-location">7-8 November 2019 • Salt Lake City, Utah</p>
			<a href="http://www.pendo.io"><img id="broughtoyouby" src="/images/frontpc18/broughttoyouby_pendo.png" /></a>
			<p><a href="/workshops/registration" class="button">Register</a></p>
		</section>
		<section class="training-courses">
				<h2>2 intense days of learning and practice</h2>
				<p>Join us in foothills of the majestic mountains of Utah for an intimate, one-of-a-kind 
					UX and Product Management training experience. Select 5 half and quarter-day 
					workshops, for 2 intense days of learning and practice. No passive education 
					here. This isn’t for the faint of heart. We’ll be working together in small groups of six, where you’ll be expected 
					to collaborate and engage.</p>
				<p>Each workshop will be limited to 48 students and taught by internationally 
					recognized industry leaders and some of tech’s most skilled practitioners. 
					Breakfast and lunch are provided each day. And yeah, we certainly expect that 
					you’ll stay an extra day—or two—for some time world famous hiking and mountain biking.</p>
		</section>
		
		<section class="instructor-preview">
			<h2>Instructors</h2>
			<ul class="instructor-list">

<?php

// randomize list
shuffle($instructors);

// grab first six
$instructors = array_slice($instructors, 0, 6);

// spit them out
foreach($instructors as $instructor) {
	echo '<li class="instructor ' . $instructor['discipline'] . '">
					<a href="/workshops/instructor/' . $instructor['slug'] . '">
						<div class="instructor-photo">
							<img src="/images/' . $instructor['photo'] . '" alt="">
						</div>
						<h4>' . $instructor['first'] . ' ' . $instructor['last'] . '</h4>
						<p class="title">' . $instructor['title'] . '<br>' . $instructor['company'] . '</p>
					</a>
				</li>';

}

?>

			</ul>
			<p>
				<a href="/workshops/instructors" class="button">View All</a>
			</p>
		</section>
		
		<a name="highlight_video"></a>
		<section class="highlight-video">
			<h2>2018 Highlights</h2>
			<div href="https://www.youtube.com/watch?v=AU8QI7wPzoc" class="thumbnail video-thumbnail recap-video">
				<img class="full" src="/images/home-bg/home-bg-workshops-video.jpg" alt="">
			</div>
		</section>
		
		<section class="sponsors">
			<h2>Sponsors</h2>
			<a href="http://www.pendo.io"><img id="premier" src="/images/sponsors/pendo.svg" /></a>
			<ul class="second_tier">
			  <li class="second_tier_sponsor"><a href="http://www.workfront.com"><img src="/images/sponsors/workfront.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.invisionapp.com" target="_blank"><img src="/images/sponsors/invision.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.balsamiq.com" target="_blank"><img src="/images/sponsors/balsamiq.svg" height="60px" /></a></li>

			  <!--
			  <li class="second_tier_sponsor"><a href="https://alphahq.com" target="_blank"><img src="/images/sponsors/alphahq.svg" /></a></li>	
			  <li class="second_tier_sponsor"><a href="http://www.underbelly.is" target="_blank"><img src="/images/sponsors/underbelly.svg" /></a></li>
			  -->
			</ul>
		</section>
			
		<section class="photo-collage">
			<img src="/images/conf-collage-mobile.jpg" alt="" class="full mobile">
			<img src="/images/conf-collage-desktop.jpg" alt="" class="full desktop">
		</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>Reserve your seat now for the premier UX and Product Management training experience. Design your custom training program now. Whether you’re a beginner or seasoned professional, the Front UX & Product Management Workshops Series will take you and your team to the next level in product design and management.</p>
			<p><a href="/workshops/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>