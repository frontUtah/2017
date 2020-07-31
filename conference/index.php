<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front UX & Product Management Case Study Conference, 7-9 April 2021';

$meta['twitter']['card'] = "Front is the product conference for UX designers and product managers. It's a practitioner’s conference. Attendees come for an education, real world, from-the-trenches case studies, and hands-on training from their peers. It's four days of learning and growth, providing answers to deep organizational questions and insights into how to validate and solve the right problems in the right way.";
$meta['twitter']['site'] = '@front';
$meta['twitter']['title'] = $title;
$meta['twitter']['image'] = 'https://www.frontutah.com/images/social/front_social_conference.jpg';

$meta['opengraph']['title'] = 'Front - The product conference for UX designers and product managers';
$meta['opengraph']['type'] = 'article';
$meta['opengraph']['url'] = 'http://www.frontutah.com/conference/';
$meta['opengraph']['image'] = 'https://www.frontutah.com/images/social/front_social_conference.jpg';
$meta['opengraph']['description'] = "Front is the product conference for UX designers and product managers. It's a practitioner’s conference. Attendees come for an education, real world, from-the-trenches case studies, and hands-on training from their peers. It's four days of learning and growth, providing answers to deep organizational questions and insights into how to validate and solve the right problems in the right way.";
$meta['opengraph']['site_name'] = 'Front Conference';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="product-workshops product-casestudy">
		<section class="hero">
			<h1>UX &amp; Product Management Case Study Conference</h1>
			<p>
				<ul>
					<li>3 days • 16 talks with audience-led Q&A</li>
					<li>1000+ product designers and managers</li>
				</ul>
			</p>
			<p class="date-location">7-9 April 2021 • Salt Lake City, Utah</p>
			<a href="http://www.pluralsight.com"><img id="broughtoyouby" src="/images/frontworkshops18/premeir-sponsor.png" /></a>
			<p><a href="/conference/registration" class="button">Register</a></p>
		</section>
		<section class="training-courses">
			<h2>Build better products</h2>
			<p>Join us this Spring, in Salt Lake City, for two full days of dedicated time away from your desk, learning better ways to work together with your team and be inspired to grow your career in UX or Product Management. Together with over 1,000 other professionals, you’ll learn from extremely talented people influencing the organizations they work for and changing the way our industry looks at digital products and the way people use them.</p>
			<p>Creating amazing products requires more than brilliant ideas, meticulously crafted interactions, and cutting-edge technology—it requires a fanatical focus on users and a commitment to producing something that is both useful and desirable. It requires cross-functional teams that listen, iterate, and learn.</p>
		</section>
		
		<section class="instructor-preview">
			<h2>2020 speakers</h2>
			<ul class="instructor-list">

<?php

// randomize list
shuffle($speakers);

// grab first six
$speakers = array_slice($speakers, 0, 6);

// spit them out
foreach($speakers as $instructor) {
	echo '<li class="instructor">
				<div class="' . $instructor['discipline'] . '">
					<a href="/conference/speaker/' . $instructor['slug'] . '">
						<div class="instructor-photo">
							<img src="/images/' . $instructor['photo'] . '" alt="">
						</div>
						<h4>' . $instructor['first'] . ' ' . $instructor['last'] . '</h4>
						<p class="title">' . $instructor['title'] . '<br>' . $instructor['company'] . '</p>
					</a>
				</div>
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
			<h2>Previous conference highlights</h2>
			<div href="https://www.youtube.com/watch?v=8f5QpAa1nh8" class="thumnail video-thumbnail recap-video">
				<img class="full" src="/images/home-bg-7.jpg" alt="">
			</div>
		</section>
		
		<section class="training-courses">
			<h2>Learn, connect, and share</h2>
			<p>We believe product management and product design play a central role in the success of a company. We believe we need better, smarter people to lead product. We believe in human relationships and learning from each other through examples. We believe in kindness, generosity, transparency and a willingness to share. We've created a mix of topics, some practical, others aspirational/inspirational, some aimed at more junior folks, some at the mid-level, some at leadership.</p>
			<p>Our goal is to provide an environment that allows industry professionals to gather once a year and share the experiences that have helped them build better products and progress individually.</p>
		</section>
		

		<section class="training-courses sponsors">
			<h2>Sponsors</h2>
			<a href="http://www.pluralsight.com" target="_blank"><img id="premier" src="/images/sponsors/pluralsight.svg" /></a>
			<ul class="second_tier">
				<li class="second_tier_sponsor"><a href="https://www.pendo.io" target="_blank"><img src="/images/sponsors/pendo.svg" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="https://www.heap.io" target="_blank"><img src="/images/sponsors/heap.svg" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="https://www.usertesting.com" target="_blank"><img src="/images/sponsors/usertesting.svg" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="https://progleasing.com" target="_blank"><img src="/images/sponsors/progressive.svg" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="https://uxpressia.com" target="_blank"><img src="/images/sponsors/uxpressia.svg" height="60px" /></a></li>
				<li class="second_tier_sponsor"><a href="https://www.grain.co" target="_blank"><img src="/images/sponsors/grain.svg" height="60px" /></a></li>
			</ul>
		</section>
		
		<section class="photo-collage">
			<img src="/images/collage-front-photos-mobile@2x.jpg" alt="" class="mobile">
			<img src="/images/collage-front-photos-desktop@2x.jpg" alt="" class="desktop">
		</section>
		<section class="personal-stories">
		<h2>2019 talks</h2>
		<ul class="story-cards">
				<li>
					<div href="https://www.youtube.com/watch?v=opwJPuTsMrg" class="card-image recap-video"><img src="/images/frontconference19/thor_ernstsson.jpg" alt=""></div>
					<h3>Thor Ernstsson</h3>
					<p>The incumbents dilemma</p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=UvzoWmhxDTg" class="card-image recap-video"><img src="/images/frontconference19/matt_strom.jpg" alt=""></div>
					<h3>Matt Ström</h3>
					<p>Designing Change</p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=QIhqbB_Hn1k" class="card-image recap-video"><img src="/images/frontconference19/nate_walkingshaw.jpg" alt=""></div>
					<h3>Nate Walkingshaw</h3>
					<p>Organizational design: Going from features to experiences</p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=lL_Mo6F2u44" class="card-image recap-video"><img src="/images/frontconference19/maggie_crowley.jpg" alt=""></div>
					<h3>Maggie Crowley</h3>
					<p>Your product is only as good as your teamwork</p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=uOM8cf0RqNA" class="card-image recap-video"><img src="/images/frontconference19/wade_shearer.jpg" alt=""></div>
					<h3>Wade Shearer</h3>
					<p>Letting go of process and accepting controlled chaos</p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=o4YseYT95qM" class="card-image recap-video"><img src="/images/frontconference19/frank_yoo.jpg" alt=""></div>
					<h3>Frank Yoo</h3>
					<p>Gen 2</p>
				</li>
		</ul>
		<p>
			<a href="/conference/videos" class="button">Watch More</a>
		</p>
	</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>In it's 6th year, Front is a sell-out event, with  
				<strong>800 annual attendees from 8 countries and 34 states</strong> 
				across the US. Join us at the Front to share, learn, and be inspired 
				to create amazing products.</p>
			<p><a href="/conference/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>