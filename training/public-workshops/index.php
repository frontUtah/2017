<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front UX & Product Management Public Workhops';

$meta['twitter']['card'] = "Front is the product conference for UX designers and product managers. It's a practitioner’s conference. Attendees come for an education, real world, from-the-trenches case studies, and hands-on training from their peers. It's four days of learning and growth, providing answers to deep organizational questions and insights into how to validate and solve the right problems in the right way.";
$meta['twitter']['site'] = '@front';
$meta['twitter']['title'] = $title;
$meta['twitter']['image'] = 'https://www.frontutah.com/images/workshops2019/earlybird.jpg';

$meta['opengraph']['title'] = 'Front - The product conference for UX designers and product managers';
$meta['opengraph']['type'] = 'article';
$meta['opengraph']['url'] = 'http://www.frontutah.com';
$meta['opengraph']['image'] = 'https://www.frontutah.com/images/workshops2019/earlybird.jpg';
$meta['opengraph']['description'] = "Front is the product conference for UX designers and product managers. It's a practitioner’s conference. Attendees come for an education, real world, from-the-trenches case studies, and hands-on training from their peers. It's four days of learning and growth, providing answers to deep organizational questions and insights into how to validate and solve the right problems in the right way.";
$meta['opengraph']['site_name'] = 'Front Conference';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="product-workshops-public">
		<section class="hero">
			<h1>UX &amp; Product Management Public Workshops</h1>
			
			<!-- a href="http://www.pendo.io"><img id="broughtoyouby" src="/images/frontpc18/broughttoyouby_pendo.png" /></a -->
		</section>
		<section class="training-courses">
				<h2>Workshops for improving what matters</h2>
				<p>As individuals in the user experience and product design industry we find that just as fast as we build software we also continue to learn new ways of doing it better just as fast. Its one thing to hear clear case study examples from our peers at the Front conference but its another to put those ideas and experience into action. So, we’re offering as much training help that we can in as many locations as possible. Each workshop will be limited to 48 students and taught by internationally recognized industry leaders and some of tech’s most skilled practitioners. Breakfast and lunch are provided each day.</p>

				<p>We announce new dates and locations for our public training workshops on a regular basis.  Keep up to speed via our Newsletter.</p>
		</section>

		
		<section class="public-workshops">
			<h2>Upcoming Public Workshops</h2>
			<div class="public-workshops-wrap">
				<ul class="public-workshop">
					<li class="theme-product-management">
						<dl>
							<dd class="instructor product-management">
								<div class="instructor-photo">
									<img src="/images/headshots/jeffpatton.jpg">
								</div>
							</dd>
							<dd>
								<h4>User Story Mapping</h4>
								<p class="name">by Jeff Patton</p>
								<p class="location"><span class="icon-location"></span> New York, NY</p>
								<p class="date-mobile"><span class="icon-location"></span> APR 01, 2019</p>
								<p class="description">Ideal Agile development teams build small valuable chunks of functionality. But, that’s easier said than done. Not all products or features are small and breaking them down into small buildable parts is challenging. </p>
								<a href="https://www.eventbrite.com/e/front-workshop-nyc-user-story-mapping-with-jeff-patton-tickets-55605790416" target="_blank" class="button button-small">Learn More</a>
								
							</dd>
							<dd class="date-desk">
								<span class="month">APR</span><span class="day">02</span>
							</dd>
						</dl>
					</li>
					<ul class="public-workshop">
					<li class="theme-product-management">
						<dl>
							<dd class="instructor product-management">
								<div class="instructor-photo">
									<img src="/images/headshots/jeffpatton.jpg">
								</div>
							</dd>
							<dd>
								<h4>Certified Scrum Product</h4>
								<p class="name">by Jeff Patton</p>
								<p class="location"><span class="icon-location"></span> New York, NY</p>
								<p class="date-mobile"><span class="icon-location"></span> SEP 05, 2019</p>
								<p class="description">Jeff Patton will deliver an honest, irreverent, and extremely useful 2-Day Certified Scrum Product Ownership course. This is a course with a deliberate and unapologetic product-centric and Lean UX bias. If you’ve learned Agile and Scrum basics elsewhere and felt that product and user experience concerns were missing, we’ll fix that.</p>
								<a href="https://www.eventbrite.com/e/front-workshop-nyc-certified-scrum-product-ownership-cspo-with-jeff-patton-tickets-55667276322" target="_blank" class="button button-small">Learn More</a>
							</dd>
							<dd class="date-desk">
								<span class="month">Sep</span><span class="day">02</span>
							</dd>
						</dl>
					</li>
				</ul>
			</div>

		</section>
		<!--
		<section class="sponsors">
			<h2>Past sponsors</h2>
			<a href="http://www.pendo.io"><img id="premier" src="/images/sponsors/pendo.svg" /></a>
			<ul class="second_tier">
			  <li class="second_tier_sponsor"><a href="http://www.workfront.com"><img src="/images/sponsors/workfront.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.underbelly.is" target="_blank"><img src="/images/sponsors/underbelly.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="https://alphahq.com" target="_blank"><img src="/images/sponsors/alphahq.svg" /></a></li>
			</ul>
		</section>
		-->
			
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