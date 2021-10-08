<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front - The product conference for UX designers and product managers';

require('includes/header.php');

?>

<main class="home">
 	<section class="hero">
		<h1 class="logo">Front</h1>
		<p>Inspiration and training for UX designers and product managers</p>
		<h2>UX + PM</h2>
	</section>
	<section class="spotlight">
		<ul>
			<li>
				<h3>Case Study Conference</h3>
				<p class="date-location">6-8 April 2022, Salt Lake City</p>
				<div href="https://www.youtube.com/watch?v=8f5QpAa1nh8" class="thumnail video-thumbnail recap-video">
					<img src="images/conf-scene001.jpg" alt="" style="width: 413px;">
				</div>
				<p class="description">A 3 day, in-depth series of from-the-trenches case studies by innovative user experience designers and product managers.</p>
				<p><a href="/conference" class="button">Learn More</a></p>
			</li>
			<li>
				<h3>Workshop Series</h3>
				<p class="date-location">2-4 November 2022, Salt Lake City</p>
				<div href="https://www.youtube.com/watch?v=AU8QI7wPzoc" class="thumnail video-thumbnail recap-video">
					<img src="images/conf-scene002.jpg" alt="" style="width: 413px;">
				</div>
				<p class="description">A 3 day, hands-on workshop series to learn to create amazing products and work like the teams you hear from at Front.</p>
				<p><a href="/workshops" class="button">Learn More</a></p>
			</li>
			<li>
				<h3>On-demand workshops</h3>
				<p class="date-location">Any time, anywhere</p>
				<div class="thumnail">
					<img src="images/conf-scene003.jpg" alt="" style="width: 413px;">
				</div>
				<p class="description">Kick-start or grow your career by streaming recorded workshops at your own pace and convenience.</p>
				<p><a href="/ondemand" class="button">Learn More</a></p>
			</li>
		</ul>
	</section>
	<section class="about">
		<h2>Building amazing product teams</h2>
		<p>Creating amazing products requires more than brilliant ideas, 
			meticulously crafted interactions, perfect pixels, and cutting-edge 
			technology—it requires a fanatical focus on users and a commitment 
			to producing something that is both useful and desirable. It 
			requires cross-functional teams that listen, iterate, and 
			learn.<br /><br />Front is the product conference for UX designers 
			and product managers. It's a practitioner’s conference. Attendees 
			come for an education, real world, from-the-trenches case studies, 
			and hands-on training from their peers. It's four days of learning 
			and growth, providing answers to deep organizational questions and 
			insights into how to validate and solve the right problems in the 
			right way.</br ></br ><a href="/about"><em>Learn more about Front's 
			birth and mission</em></a></p> 

	</section>
	<section class="personal-stories">
		<h2>Personal stories from innovative teams</h2>
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
	<section class="attendee-stats">
		<p>In it's 7th year, Front is a sell-out event, with a 
			<strong>1,000 annual attendees from across the country 
			and around the world.</strong> Join us at the Front to 
			share, learn, and be inspired to create amazing products.</p>
	</section>
</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>