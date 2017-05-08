<?php

$title = 'Front - The product conference for UX designers and product managers';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="product-bootcamp">
		<section class="hero">
			<h1>UX &amp; Product Management Bootcamp</h1>
			<p>
				<ul>
					<li>2 days</li>
					<li>4 tracks</li>
					<li>24 courses</li>
					<li>200+ product designers and managers</li>
				</ul>
			</p>
			<p class="date-location">4-5 Jan 2018 • Park City, Utah</p>
			<p><a href="#" class="button">Register</a></p>
		</section>
		<section class="bootcamp-about">
			<div class="content">
				<h2>2 intense days of learning  and practice at 7,000 feet</h2>
				<p>Join us in the majestic mountains of Utah for an intimate, one-of-a-kind UX and Product Management training expeirence. Select 4 half-day workshops, for 2 intense days of learning and practice. No passive education here. This isn’t for the faint of heart. We’ll be working together, at 7,000 feet and atop the greatest snow on earth, in small groups of six, where you’ll be expected to collaborate and engage.</p>
				<p>Each workshop will be limited to 48 students and taught by internationally recognized industry leaders and some of tech’s most skilled practictioners. Breakfast and lunch are provided each day. And yeah, we certainly expect that you’ll stay an extra day—or two—for some time in on the slopes. </p>
			</div>
			<div class="image">
				<img src="/images/front-snow-stamp.png" alt="">
			</div>
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
					<a href="/bootcamp/instructor/' . $instructor['slug'] . '">
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
				<a href="/bootcamp/instructors" class="button">View All</a>
			</p>
		</section>
		<section class="highlight-video">
			<h2>2017 Highlights</h2>
			<div class="video-thumbnail">
				<img src="/images/ski-thumb.jpg" alt="">
			</div>
		</section>
		<section class="training-courses">
			<h2>Design your perfect training program</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<ul class="course-groups">
				<li class="course-group ux">
					<dl>
						<dt>UX</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Intermediate</dd>
						<dd class="basic">Basic</dd>
					</dl>
					<p>
						<a href="courses-ux.html" class="button">View Courses</a>
					</p>
				</li>
				<li class="course-group pm">
					<dl>
						<dt>Product Management</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Intermediate</dd>
						<dd class="basic">Basic</dd>
					</dl>
					<p>
						<a href="courses-pm.html" class="button">View Courses</a>
					</p>
				</li>
				<li class="course-group research">
					<dl>
						<dt>Research</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Intermediate</dd>
						<dd class="basic">Basic</dd>
					</dl>
					<p>
						<a href="courses-research.html" class="button">View Courses</a>
					</p>
				</li>
				<li class="course-group leadership">
					<dl>
						<dt>Leadership</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Intermediate</dd>
						<dd class="basic">Basic</dd>
					</dl>
					<p>
						<a href="courses-leadership.html" class="button">View Courses</a>
					</p>
				</li>
			</ul>
		</section>
		<section class="photo-collage">
			<img src="/images/conf-collage-mobile.jpg" alt="" class="mobile">
			<img src="/images/conf-collage-desktop.jpg" alt="" class="desktop">
		</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<p><a href="" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>