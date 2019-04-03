<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front UX & Product Management Case Study Conference, 6-7 June 2019';

$meta['twitter']['card'] = "Front is the product conference for UX designers and product managers. It's a practitioner’s conference. Attendees come for an education, real world, from-the-trenches case studies, and hands-on training from their peers. It's four days of learning and growth, providing answers to deep organizational questions and insights into how to validate and solve the right problems in the right way.";
$meta['twitter']['site'] = '@front';
$meta['twitter']['title'] = $title;
$meta['twitter']['image'] = 'https://www.frontutah.com/images/social/front_social_conference_earlybird.jpg';

$meta['opengraph']['title'] = 'Front - The product conference for UX designers and product managers';
$meta['opengraph']['type'] = 'article';
$meta['opengraph']['url'] = 'http://www.frontutah.com/conference/';
$meta['opengraph']['image'] = 'https://www.frontutah.com/images/social/front_social_conference_earlybird.jpg';
$meta['opengraph']['description'] = "Front is the product conference for UX designers and product managers. It's a practitioner’s conference. Attendees come for an education, real world, from-the-trenches case studies, and hands-on training from their peers. It's four days of learning and growth, providing answers to deep organizational questions and insights into how to validate and solve the right problems in the right way.";
$meta['opengraph']['site_name'] = 'Front Conference';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="product-workshops product-casestudy">
		<section class="hero">
			<h1>UX &amp; Product Management Case Study Conference</h1>
			<p>
				<ul>
					<li>2 days • 16 talks with audience-led Q&A</li>
					<li>1000+ product designers and managers</li>
				</ul>
			</p>
			<p class="date-location">6-7 June 2019 • Salt Lake City, Utah</p>
			<a href="http://www.pluralsight.com"><img id="broughtoyouby" src="/images/frontworkshops18/premeir-sponsor.png" /></a>
			<p><a href="/conference/registration" class="button">Register</a></p>
		</section>
		<section class="training-courses">
			<h2>Build better products</h2>
			<p>Join us this Spring, in Salt Lake City, for two full days of dedicated time away from your desk, learning better ways to work together with your team and be inspired to grow your career in UX or Product Management. Together with over 1,000 other professionals, you’ll learn from extremely talented people influencing the organizations they work for and changing the way our industry looks at digital products and the way people use them.</p>
			<p>Creating amazing products requires more than brilliant ideas, meticulously crafted interactions, and cutting-edge technology—it requires a fanatical focus on users and a commitment to producing something that is both useful and desirable. It requires cross-functional teams that listen, iterate, and learn.</p>
		</section>
		
		<section class="instructor-preview">
			<h2>Speakers</h2>
			<ul class="instructor-list">

<?php

// randomize list
shuffle($speakers);

// grab first six
$speakers = array_slice($speakers, 0, 6);

// spit them out
foreach($speakers as $instructor) {
	echo '<li class="instructor ' . $instructor['discipline'] . '">
					<a href="/conference/speaker/' . $instructor['slug'] . '">
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
				<a href="/conference/speakers" class="button">View All</a>
			</p>
		</section>
		
<a name="highlights"></a>
		
		<section class="highlight-video">
			<h2>2018 Highlights</h2>
			<div href="https://www.youtube.com/watch?v=8f5QpAa1nh8" class="thumnail video-thumbnail recap-video">
				<img class="full" src="/images/home-bg-7.jpg" alt="">
			</div>
		</section>
		
		<section class="training-courses">
			<h2>Learn, Connect, and Share</h2>
			<p>We believe product management and product design play a central role in the success of a company. We believe we need better, smarter people to lead product. We believe in human relationships and learning from each other through examples. We believe in kindness, generosity, transparency and a willingness to share. We've created a mix of topics, some practical, others aspirational/inspirational, some aimed at more junior folks, some at the mid-level, some at leadership.</p>
			<p>Our goal is to provide an environment that allows industry professionals to gather once a year and share the experiences that have helped them build better products and progress individually.</p>
		</section>

		<section class="scholarship">
			<div class="scholarship-logos"><img src="../images/conf-scholarship-vschool-logos" width="300"></div>
			<h2>Win a free scholarship to the V School</h2>
			<div class="columns">
				<div>
					<p><strong>5 Finalists Receive</strong></p>
					<ul class="default">
						<li>Free 2 day ticket to Front Conference</li>
						<li>Tour and opportunity meet the teams at 5 top Utah tech companies or design agencies</li>
						<li>Mentorship from top design leader</li>
					</ul>
				</div>
				<div>
					<p><strong>1 Scholarship Winner Receives</strong></p>
					<ul class="default">
						<li>12 week UX immersive course at V School (value $15,000), starting 9 July</li>
						<li>Internship with Contravent</li>
					</ul>
				</div>
			</div>
			<a href="https://vschool.io/front-scholarship" target="_blank" class="button">Apply</a>
		</section>
		
		<section class="training-courses sponsors">
			<h2>Sponsors</h2>
			<!---->
			<a href="http://www.pluralsight.com" target="_blank"><img id="premier" src="/images/sponsors/pluralsight.svg" /></a>
			<ul class="second_tier">
				<li class="second_tier_sponsor"><a href="https://www.goabstract.com/?&utm_medium=Events&utm_source=Events-Conference&utm_campaign=CY19-Events-Conference-Front-Jun-6" target="_blank"><img src="/images/sponsors/abstract.svg" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="http://www.usertesting.com" target="_blank"><img src="/images/sponsors/usertesting.svg" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="http://www.workfront.com" target="_blank"><img src="/images/sponsors/workfront.svg" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="http://www.underbelly.is" target="_blank"><img src="/images/sponsors/underbelly.svg" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="http://www.rev.com" target="_blank"><img src="/images/sponsors/rev.svg" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="http://www.balsamiq.com" target="_blank"><img src="/images/sponsors/balsamiq.svg" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="http://www.pendo.io" target="_blank"><img src="/images/sponsors/pendo.svg" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="https://data.mx.com/" target="_blank"><img src="/images/sponsors/mx.svg" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="https://www.vschool.io/" target="_blank"><img src="/images/sponsors/vschool.png" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="https://www.solutionstream.com/" target="_blank"><img src="/images/sponsors/solutionstream.svg" height="60px" /></a></li>
			  <!--
			  <li class="second_tier_sponsor"><a href="http://www.jane.com" target="_blank"><img src="/images/sponsors/jane.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.podium.com" target="_blank"><img src="/images/sponsors/podium.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.domo.com" target="_blank"><img src="/images/sponsors/domo.svg" style="max-width: 70px;" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.invisionapp.com" target="_blank"><img src="/images/sponsors/invision.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="https://jobs.progleasing.com/" target="_blank"><img src="/images/sponsors/progressive.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="https://www.split.io/" target="_blank"><img src="/images/sponsors/split.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="https://www.ancestry.com" target="_blank"><img src="/images/sponsors/ancestry.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="https://www.kroger.com" target="_blank"><img src="/images/sponsors/kroger.svg" /></a></li>
			-->
			</ul>
		</section>
		
		<section class="photo-collage">
			<img src="/images/collage-front-photos-mobile@2x.jpg" alt="" class="mobile">
			<img src="/images/collage-front-photos-desktop@2x.jpg" alt="" class="desktop">
		</section>
		<section class="personal-stories">
		<h2>2018 Talks</h2>
		<ul class="story-cards">
			<li>
				<a href="https://www.youtube.com/watch?v=mV0lp5cJpBo"><div href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="card-image recap-video"><img src="/images/frontconference18/cover_benjamin_evans.jpg" alt=""></div></a>
				<h3>Benjamin Evans</h3>
				<p>The challenge of designing for everyone</p>
			</li>
			<li>
				<a href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E"><div href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E" class="card-image recap-video"><img src="/images/frontconference18/cover_vicki_tan.jpg" alt=""></div></a>
				<h3>Vicki Tan</h3>
				<p>Designing with Intuition</p>
			</li>
			<li>
				<a href="https://www.youtube.com/watch?v=QkOzNF492xY"><div href="https://www.youtube.com/watch?v=QkOzNF492xY" class="card-image recap-video"><img src="/images/frontconference18/cover_cameron_moll.jpg" alt=""></div></a>
				<h3>Cameron Moll</h3>
				<p>When we align</p>
			</li>
			<li>
				<a href="https://www.youtube.com/watch?v=xOlXgrL8m2M"><div href="https://www.youtube.com/watch?v=xOlXgrL8m2M" class="card-image recap-video"><img src="/images/frontconference18/cover_rayna_wiles.jpg" alt=""></div></a>
				<h3>Rayna Wiles</h3>
				<p>Researching as a facilitator</p>
			</li>
			<li>
				<a href="https://www.youtube.com/watch?v=gCLahVvDFPY"><div href="https://www.youtube.com/watch?v=gCLahVvDFPY" class="card-image recap-video"><img src="/images/frontconference18/cover_chris_bhavika.jpg" alt=""></div></a>
				<h3>Chris Mayfield & Bhavika Shah</h3>
				<p>How to survive as a designer or PM in the era of the algorithm</p>
			</li>
			<li>
				<a href="https://www.youtube.com/watch?v=SW-h5UcjLIE"><div href="https://www.youtube.com/watch?v=SW-h5UcjLIE" class="card-image recap-video"><img src="/images/frontconference18/cover_amanda_richardson.jpg" alt=""></div></a>
				<h3>Amanda Richardson</h3>
				<p>Getting data right, A case study in how we did it wrong</p>
			</li>
		</ul>
		<p>
			<a href="/conference/videos" class="button">Watch More</a>
		</p>
	</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>In it's 5th year, Front is a sell-out event, with  
				<strong>1,000 annual attendees from 5 countries and 31 states</strong> 
				across the US. Join us at the Front to share, learn, and be inspired 
				to create amazing products.</p>
			<p><a href="/conference/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>