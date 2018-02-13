<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front Park City 2018 - UX & Product Management Bootcamp';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="product-bootcamp">
		<section class="hero">
			<h1>UX &amp; Product Management Bootcamp</h1>
			<p>
				<ul>
					<li>2 days • 4 tracks • 20 courses</li>
					<li>200+ product designers and managers</li>
				</ul>
			</p>
			<p class="date-location">8-9 November 2018 • Salt Lake City, Utah</p>
			<!--<a href="http://www.pendo.io"><img id="broughtoyouby" src="/images/frontpc18/broughttoyouby_pendo.png" /></a>-->
			<p><a href="/bootcamp/registration" class="button">Register</a></p>
		</section>
		<section class="training-courses">
				<h2>2 intense days of learning and practice</h2>
				<p>Join us in foothills of the majestic mountains of Utah for an intimate, one-of-a-kind 
					UX and Product Management training experience. Select 5 half and quarter-day 
					workshops, for 2 intense days of learning and practice. No passive education 
					here. This isn’t for the faint of heart. We’ll be working together in the shadows 
					of the Rocky Mountains, in small groups of six, where you’ll be expected 
					to collaborate and engage.</p>
				<p>Each workshop will be limited to 48 students and taught by internationally 
					recognized industry leaders and some of tech’s most skilled practitioners. 
					Breakfast and lunch are provided each day. And yeah, we certainly expect that 
					you’ll stay an extra day—or two—for some time world famous hiking and mountain biking.</p>

		</section>
		<section class="instructor-preview">
			<h2>Past instructors</h2>
			<ul class="instructor-list">

<?php

// randomize list
shuffle($instructors);

// grab first six
$instructors = array_slice($instructors, 0, 6);

// spit them out
foreach($instructors as $instructor) {
	echo '<li class="instructor ' . $instructor['discipline'] . '">
					<!--<a href="/bootcamp/instructor/' . $instructor['slug'] . '">-->
						<div class="instructor-photo">
							<img src="/images/' . $instructor['photo'] . '" alt="">
						</div>
						<h4>' . $instructor['first'] . ' ' . $instructor['last'] . '</h4>
						<p class="title">' . $instructor['title'] . '<br>' . $instructor['company'] . '</p>
					<!--</a>-->
				</li>';

}

?>

			</ul>
			<!--
			<p>
				<a href="/bootcamp/instructors" class="button">View All</a>
			</p>
			-->
		</section>
		<section class="highlight-video">
			<h2>2017 Highlights</h2>
			<div href="https://vimeo.com/216410956" class="thumbnail video-thumbnail recap-video">
				<img class="full" src="/images/ski-thumb.jpg" alt="">
			</div>
		</section>
		<section class="training-courses">
			<h2>Design your perfect training program</h2>
			<p>We’ve assembled a diverse group of instructors which have prepared a wide range of basic and advanced courses on user experience design, product management, research, and leadership. Design your custom training program, selecting from this broad curriculum of twenty different courses.</p>
			<ul class="course-groups">
				<li class="course-group ux">
					<dl>
						<dt>UX</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Basics</dd>
						<!-- dd class="basic">Basic</dd -->
					</dl>
					<p>
						<a href="/bootcamp/courses/ux" class="button">View Courses</a>
					</p>
				</li>
				<li class="course-group pm">
					<dl>
						<dt>Product Management</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Basics</dd>
						<!-- dd class="basic">Basic</dd -->
					</dl>
					<p>
						<a href="/bootcamp/courses/pm" class="button">View Courses</a>
					</p>
				</li>
				<li class="course-group research">
					<dl>
						<dt>Research</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Basics</dd>
						<!-- dd class="basic">Basic</dd -->
					</dl>
					<p>
						<a href="/bootcamp/courses/research" class="button">View Courses</a>
					</p>
				</li>
				<li class="course-group leadership">
					<dl>
						<dt>Leadership</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Basics</dd>
						<!-- dd class="basic">Basic</dd -->
					</dl>
					<p>
						<a href="/bootcamp/courses/leadership" class="button">View Courses</a>
					</p>
				</li>
			</ul>
		</section>
		
		<section class="sponsors">
			<h2>Sponsors</h2>
			<a href="http://www.pendo.io"><img id="premier" src="/images/sponsors/pendo.svg" /></a>
			<ul class="second_tier">
			  <li class="second_tier_sponsor"><a href="http://www.workfront.com"><img src="/images/sponsors/workfront.svg" /></a></li>
			</ul>
		</section>
			
		<section class="photo-collage">
			<img src="/images/conf-collage-mobile.jpg" alt="" class="full mobile">
			<img src="/images/conf-collage-desktop.jpg" alt="" class="full desktop">
		</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>Reserve your seat now for the premier UX and Product Management training experience. Design your custom training program now. Whether you’re a beginner or seasoned professional, the Front UX & Product Management Bootcamp will take you and your team to the next level in product design and management.</p>
			<p><a href="/bootcamp/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>