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
				<p class="date-location">Salt Lake City, 31 May - 1 June 2018</p>
				<div href="https://www.youtube.com/watch?v=Qqxmgf5WDjE" class="thumnail video-thumbnail recap-video">
					<img src="images/conf-scene001.jpg" alt="">
				</div>
				<p class="description">A two-day, in-depth series
 of from-the-trenches case studies by innovative user experience designers and product managers.</p>
				<p><a href="/conference" class="button">Learn More</a></p>
			</li>
			<li>
				<h3>Product Bootcamp</h3>
				<p class="date-location">Salt Lake City, 8-9 November 2018</p>
				<div href="https://www.youtube.com/watch?v=rTLIYQVHa90" class="thumnail video-thumbnail recap-video">
					<img src="images/conf-scene002.jpg" alt="">
				</div>
				<p class="description">A two-day, hands-on training bootcamp to learn how to create amazing products and work like the teams you hear from at Front.</p>
				<p><a href="/bootcamp" class="button">Learn More</a></p>
			</li>
			<li>
				<h3>Custom Onsite Training</h3>
				<p class="date-location">Name your date</p>
				<div class="thumnail">
					<img src="images/conf-scene003.jpg" alt="">
				</div>
				<p class="description">Let us to bring Front to you. Tell us about your organization's needs and we'll build a custom training solution to meet them.</p>
				<p><a href="/onsite" class="button">Learn More</a></p>
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
				<a href="https://vimeo.com/222437833"><div href="https://vimeo.com/222437833" class="card-image recap-video"><img src="images/frontslc17/title_danielburka.jpg" alt=""></div></a>
				<h3>Daniel Burka</h3>
				<p>The moment of truth for design leadership</p>
			</li>
			<li>
				<a href="https://vimeo.com/222459441"><div href="https://vimeo.com/222459441" class="card-image recap-video"><img src="images/frontslc17/title_mariahhay.jpg" alt=""></div></a>
				<h3>Mariah Hay</h3>
				<p>Why Everyone and No One is Prepared to Manage Product</p>
			</li>
			<li>
				<a href="https://vimeo.com/222450170"><div href="https://vimeo.com/222450170" class="card-image recap-video"><img src="images/frontslc17/title_diogenesbrito.jpg" alt=""></div></a>
				<h3>Diogenes Brito</h3>
				<p>Design or Die Trying</p>
			</li>
			<li>
				<a href="https://vimeo.com/223169495"><div href="https://vimeo.com/223169495" class="card-image recap-video"><img src="images/frontslc17/title_vickythomas.jpg" alt=""></div></a>
				<h3>Vicky Thomas</h3>
				<p>When and How to use Data Effectively</p>
			</li>
			<li>
				<a href="https://vimeo.com/222456158"><div href="https://vimeo.com/222456158" class="card-image recap-video"><img src="images/frontslc17/title_josh_kendall.jpg" alt=""></div></a>
				<h3>Josh Penrod & Kendall Hulet</h3>
				<p>UX+PM=BFFs</p>
			</li>
			<li>
				<a href="https://vimeo.com/223189913"><div href="https://vimeo.com/223189913" class="card-image recap-video"><img src="images/frontslc17/title_teresatorres.jpg" alt=""></div></a>
				<h3>Teresa Torres</h3>
				<p>Adopting Continuous Product Discovery Practices</p>
			</li>
		</ul>
		<p>
			<a href="https://vimeo.com/frontutah" class="button">Watch More</a>
		</p>
	</section>
	<section class="attendee-stats">
		<p>In 2017, Front Salt Lake City sold out with
 <strong>650 attendees from 4 countries and 29 states</strong> across the US. Join us at the Front to share, learn, and be inspired to create amazing products.</p>
	</section>
</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>