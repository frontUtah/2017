<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front Salt Lake City 2018 - UX & Product Case Study Conference';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="product-bootcamp product-casestudy">
		<section class="hero">
			<h1>UX &amp; Product Management Case Study Conference</h1>
			<p>
				<ul>
					<li>2 days • 14 talks • 2 panels</li>
					<li>1000+ product designers and managers</li>
				</ul>
			</p>
			<p class="date-location">31 May - 1 June 2018 • Salt Lake City, Utah</p>
			<p><a href="/conference/registration" class="button">Register</a></p>
		</section>
		<section class="training-courses">
			<h2>Build better products</h2>
			<p>Join us this Spring, in Salt Lake City, for two full days of dedicated time away from your desk, learning better ways to work together with your team and be inspired to grow your career in UX or Product Management. Together with over 1000 other professionals, You’ll learn from extremely talented people influencing the organizations they work for and changing the way our industry looks at digital products and the way people use them.</p>
			<p>Creating amazing products requires more than brilliant ideas, meticulously crafted interactions, and cutting-edge technology—it requires a fanatical focus on users and a commitment to producing something that is both useful and desirable. It requires cross-functional teams that listen, iterate, and learn.</p>
		</section>
		<!--
		<section class="instructor-preview">
			<h2>Instructors</h2>
			<ul class="instructor-list">

<?php
/*
// randomize list
shuffle($instructors);

// grab first six
$instructors = array_slice($instructors, 0, 6);

// spit them out
foreach($instructors as $instructor) {
	echo '<li class="instructor ' . $instructor['discipline'] . '">
					<a href="/bootcamp/instructor/' . $instructor['slug'] . '">
						<div class="instructor-photo">
							<img src="/images/' . $instructor['photo'] . '" alt="">
						</div>
						<h4>' . $instructor['first'] . ' ' . $instructor['last'] . '</h4>
						<p class="title">' . $instructor['title'] . '<br>' . $instructor['company'] . '</p>
					</a>
				</li>';

}
*/
?>

			</ul>
			<p>
				<a href="/bootcamp/instructors" class="button">View All</a>
			</p>
		</section>
		-->
		
<a name="highlights"></a>
		
		<section class="highlight-video">
			<h2>2016 Highlights</h2>
			<div href="https://www.youtube.com/watch?v=Qqxmgf5WDjE" class="thumnail video-thumbnail recap-video">
				<img src="/images/home-bg-7.jpg" alt="">
			</div>
		</section>
		<section class="training-courses">
			<h2>Learn, Connect, and Share</h2>
			<p>We believe product management and product design play a central role in the success of a company. We believe we need better, smarter people to lead product. We believe in human relationships and learning from each other through examples. We believe in kindness, generosity, transparency and a willingness to share. We've created a mix of topics, some practical, others aspirational/inspirational, some aimed at more junior folks, some at the mid-level, some at leadership.</p>
			<p>Our goal is to provide an environment that allows industry professionals to gather once a year and share the experiences that have helped them build better products and progress individually.</p>
		</section>
		<section class="photo-collage">
			<img src="/images/collage-front-photos-mobile@2x.jpg" alt="" class="mobile">
			<img src="/images/collage-front-photos-desktop@2x.jpg" alt="" class="desktop">
		</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>In 2017, Front Salt Lake City sold out with 650 attendees from 4 countries and 29 states across the US. Join us at the Front to share, learn, and be inspired to create amazing products.</p>
			<p><a href="/conference/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>