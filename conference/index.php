<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front UX & Product Management Case Study Conference, 6-7 June 2019';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="product-workshops product-casestudy">
		<section class="hero">
			<h1>UX &amp; Product Management Case Study Conference</h1>
			<p>
				<ul>
					<li>2 days • 14 talks • 2 interactive Q&A panels</li>
					<li>1000+ product designers and managers</li>
				</ul>
			</p>
			<p class="date-location">6-7 June 2019 • Salt Lake City, Utah</p>
			<a href="http://www.workfront.com"><img id="broughtoyouby" src="/images/frontconference18/broughttoyouby_workfront.png" /></a>
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
			<h2>2017 Highlights</h2>
			<div href="https://www.youtube.com/watch?v=Qqxmgf5WDjE" class="thumnail video-thumbnail recap-video">
				<img class="full" src="/images/home-bg-7.jpg" alt="">
			</div>
		</section>
		
		<section class="training-courses">
			<h2>Learn, Connect, and Share</h2>
			<p>We believe product management and product design play a central role in the success of a company. We believe we need better, smarter people to lead product. We believe in human relationships and learning from each other through examples. We believe in kindness, generosity, transparency and a willingness to share. We've created a mix of topics, some practical, others aspirational/inspirational, some aimed at more junior folks, some at the mid-level, some at leadership.</p>
			<p>Our goal is to provide an environment that allows industry professionals to gather once a year and share the experiences that have helped them build better products and progress individually.</p>
		</section>
		
		<section class="sponsors">
			<h2>Sponsors</h2>
			<a href="http://www.workfront.com" target="_blank"><img id="premier" src="/images/sponsors/workfront.svg" /></a>
			<ul class="second_tier">
			  <li class="second_tier_sponsor"><a href="http://www.pluralsight.com" target="_blank"><img src="/images/sponsors/pluralsight.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.jane.com" target="_blank"><img src="/images/sponsors/jane.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.pendo.io" target="_blank"><img src="/images/sponsors/pendo.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.podium.com" target="_blank"><img src="/images/sponsors/podium.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.domo.com" target="_blank"><img src="/images/sponsors/domo.svg" style="max-width: 70px;" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.underbelly.is" target="_blank"><img src="/images/sponsors/underbelly.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.invisionapp.com" target="_blank"><img src="/images/sponsors/invision.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.rev.com" target="_blank"><img src="/images/sponsors/rev.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.balsamiq.com" target="_blank"><img src="/images/sponsors/balsamiq.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="https://jobs.progleasing.com/" target="_blank"><img src="/images/sponsors/progressive.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="https://www.split.io/" target="_blank"><img src="/images/sponsors/split.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="https://www.ancestry.com" target="_blank"><img src="/images/sponsors/ancestry.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="https://www.kroger.com" target="_blank"><img src="/images/sponsors/kroger.svg" /></a></li>
			</ul>
		</section>
		
		<section class="photo-collage">
			<img src="/images/collage-front-photos-mobile@2x.jpg" alt="" class="mobile">
			<img src="/images/collage-front-photos-desktop@2x.jpg" alt="" class="desktop">
		</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>In it's 5th year, Front is a sell-out event, with a 
				<strong>1,000 annual attendees from 5 countries and 31 states</strong> 
				across the US. Join us at the Front to share, learn, and be inspired 
				to create amazing products.</p>
			<p><a href="/conference/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>