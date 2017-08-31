<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Venue - Front Salt Lake City 2018, 31 May - 1 June 2018';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="venue">
		<section class="hero">
			<p class="olympic-logo"><img src="/images/olympic-logo.png" alt=""></p>
			<h1>Utah Olympic Sports Park</h1>
			<p class="location">Park City, Utah</p>
		</section>
		<section class="sports">
			<h2>In the path of athletes</h2>
			<p>Built for the Salt Lake 2002 Olympic Winter Games, Utah Olympic Park is located near Park City, just 25 miles east of Salt Lake City, Utah. The nearly 400 acre venue houses one of only four sliding tracks in North America, six Nordic ski jumps, a 2002 Winter Games museum, and a multitude of adventure activities. Utah Olympic Park is a dynamic multi-use facility focused on developing and growing participation in winter sports in the state of Utah and is an official USOC Training Site.</p>
			<ul class="sports-list">
				<li class="nordic-combined">
					<img src="/images/nordic-combined.svg" alt="">
					<span>Nordic Combined<span>
				</li>
				<li class="ski-jumping">
					<img src="/images/ski-jumping.svg" alt="">
					<span>Ski Jumping<span>
				</li>
				<li class="luge">
					<img src="/images/luge.svg" alt="">
					<span>Luge<span>
				</li>
				<li class="skeleton">
					<img src="/images/skeleton.svg" alt="">
					<span>Skeleton<span>
				</li>
				<li class="bobsleigh">
					<img src="/images/bobsleigh.svg" alt="">
					<span>Bobsleigh<span>
				</li>
			</ul>
		</section>
		<section class="photo-collage">
			<img src="/images/venue-map.jpg" alt="">
		</section>
		<section class="sports">
			<h2>Location, location, location</h2>
			<div class="webcam">
			<p>Utah Olympic Park is located in beautiful Park City just 30 minutes from downtown Salt Lake City. From Exit #145 off I80, turn south towards historic Park City. Take a right turn at the second light (Olympic Parkway / Newpark Blvd) and go through the round-about. Take the road up the hill towards the Nordic Jumps, the Quinney Welcome Center is about a mile up the road.</p>
		</section>
		<section class="photo-collage">
			<img src="/images/Plaza_QWC_Legacy.jpg" alt="">
		</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>Reserve your seat now for the premier UX and Product Management training experience. Design your custom training program now. Whether you’re a beginner or seasoned professional, the Front Park City workshop series will take you and your team to the next level in product design and management.</p>
			<p><a href="/bootcamp/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>



