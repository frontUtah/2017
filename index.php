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
				<p class="date-location">Salt Lake City, 28-29 May 2020</p>
				<div href="https://www.youtube.com/watch?v=8f5QpAa1nh8" class="thumnail video-thumbnail recap-video">
					<img src="images/conf-scene001.jpg" alt="" style="width: 413px;">
				</div>
				<p class="description">A 3 day, in-depth series of from-the-trenches case studies by innovative user experience designers and product managers.</p>
				<p><a href="/conference" class="button">Learn More</a></p>
			</li>
			<li>
				<h3>Workshop Series</h3>
				<p class="date-location">Salt Lake City, 11-13 November 2020</p>
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
				<a href="https://www.youtube.com/watch?v=mV0lp5cJpBo"><div href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="card-image recap-video"><img src="images/frontconference18/cover_benjamin_evans.jpg" alt=""></div></a>
				<h3>Benjamin Evans</h3>
				<p>The challenge of designing for everyone</p>
			</li>
			<li>
				<a href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E"><div href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E" class="card-image recap-video"><img src="images/frontconference18/cover_vicki_tan.jpg" alt=""></div></a>
				<h3>Vicki Tan</h3>
				<p>Designing with Intuition</p>
			</li>
			<li>
				<a href="https://www.youtube.com/watch?v=QkOzNF492xY"><div href="https://www.youtube.com/watch?v=QkOzNF492xY" class="card-image recap-video"><img src="images/frontconference18/cover_cameron_moll.jpg" alt=""></div></a>
				<h3>Cameron Moll</h3>
				<p>When we align</p>
			</li>
			<li>
				<a href="https://www.youtube.com/watch?v=xOlXgrL8m2M"><div href="https://www.youtube.com/watch?v=xOlXgrL8m2M" class="card-image recap-video"><img src="images/frontconference18/cover_rayna_wiles.jpg" alt=""></div></a>
				<h3>Rayna Wiles</h3>
				<p>Researching as a facilitator</p>
			</li>
			<li>
				<a href="https://www.youtube.com/watch?v=gCLahVvDFPY"><div href="https://www.youtube.com/watch?v=gCLahVvDFPY" class="card-image recap-video"><img src="images/frontconference18/cover_chris_bhavika.jpg" alt=""></div></a>
				<h3>Chris Mayfield & Bhavika Shah</h3>
				<p>How to survive as a designer or PM in the era of the algorithm</p>
			</li>
			<li>
				<a href="https://www.youtube.com/watch?v=SW-h5UcjLIE"><div href="https://www.youtube.com/watch?v=SW-h5UcjLIE" class="card-image recap-video"><img src="images/frontconference18/cover_amanda_richardson.jpg" alt=""></div></a>
				<h3>Amanda Richardson</h3>
				<p>Getting data right, A case study in how we did it wrong</p>
			</li>
		</ul>
		<p>
			<a href="/conference/videos" class="button">Watch More</a>
		</p>
	</section>
	<section class="attendee-stats">
		<p>In it's 5th year, Front is a sell-out event, with a 
			<strong>1,000 annual attendees from 5 countries and 31 states</strong> 
			across the US. Join us at the Front to share, learn, and be inspired 
			to create amazing products.</p>
	</section>
</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>