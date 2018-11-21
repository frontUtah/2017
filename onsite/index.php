<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front UX & Product Management Custom Onsite Training';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="product-workshops product-onsite">
		<section class="hero">
			<h1>UX &amp; Product Management Custom Onsite Training</h1>
			<p>
				<ul>
					<li>3 subjects • Dozens of trainings • any time or location</li>
					<li>12+ top industry consultants</li>
				</ul>
			</p>
			<p class="date-location">Name your date and we bring Front to you</p>
			<p><a href="/onsite/catalog" class="button">Book now</a></p>
		</section>
		<section class="training-courses">
				<h2>Full-day, custom workshops</h2>
				<p>Let us to bring Front to you. With years of experience running public 
					workshops, we're curating a catalog of the very best for your team. 
					Pick from dozens of trainings that have helped hundreds of companies 
					looking to tackle their product management, design, research, and 
					leadership challenges.</p>
				<p>Each workshop can be customized and tailored to the specific needs of your 
					team. Whether it's a small or large group, remote or in-person, our 
					catalog of industry-leading trainers and coaches will teach, train, 
					and inspire.</p>

		</section>
		<section class="instructor-preview">
			<h2>Consultants</h2>
			<ul class="instructor-list">

<?php

// randomize list
shuffle($consultants);

// grab first six
$consultants = array_slice($consultants, 0, 6);

// spit them out
foreach($consultants as $consultant) {
	echo '<li class="instructor ' . $consultant['discipline'] . '">
					<a href="/onsite/consultant/' . $consultant['slug'] . '">
						<div class="instructor-photo">
							<img src="/images/' . $consultant['photo'] . '" alt="">
						</div>
						<h4>' . $consultant['first'] . ' ' . $consultant['last'] . '</h4>
						<p class="title">' . $consultant['title'] . '<br>' . $consultant['company'] . '</p>
					</a>
				</li>';

}

?>

			</ul>
			<p>
				<a href="/onsite/catalog" class="button">View All</a>
			</p>
		</section>

		<section class="training-courses">
			<h2>Design your perfect training program</h2>
			<p>We’ve assembled a diverse group of consultants which have prepared a wide 
				range of basic and advanced courses on user experience design, product 
				management, research, and leadership. Design your custom training program, 
				selecting from this broad catalog of trainings.</p>
			<ul class="course-groups">
				<li class="course-group ux">
					<dl>
						<dt>UX</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Basics</dd>
						<!-- dd class="basic">Basic</dd -->
					</dl>
					<p>
						<a href="/onsite/catalog/ux" class="button">View training</a>
					</p>
				</li>
				<li class="course-group product-management">
					<dl>
						<dt>Product Management</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Basics</dd>
						<!-- dd class="basic">Basic</dd -->
					</dl>
					<p>
						<a href="/onsite/catalog/product-management" class="button">View training</a>
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
						<a href="/onsite/catalog/leadership" class="button">View training</a>
					</p>
				</li>
			</ul>
		</section>
			
		<section class="photo-collage">
			<img src="/images/conf-collage-mobile.jpg" alt="" class="full mobile">
			<img src="/images/conf-collage-desktop.jpg" alt="" class="full desktop">
		</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>Reserve your seat now for the premier UX and Product Management training experience. Design your custom training program now. Whether you’re a beginner or seasoned professional, the Front UX & Product Management Workshops Series will take you and your team to the next level in product design and management.</p>
			<p><a href="/workshops/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>