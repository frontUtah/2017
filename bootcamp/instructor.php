<?php

$title = 'Front - The product conference for UX designers and product managers';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

$instructor = get_instructor($uri_parts[2]);
$courses = get_courses($instructor['slug']);

?>
	<main class="product-bootcamp-page">
		<section class="hero">
			<h1>Instructors</h1>
		</section>
		<section class="individual-instructor">
			<h2 class="">Instructors</h2>
			<div class="instructor-profile">
				<div class="details">
					<div class="instructor pm">
						<div class="instructor-photo">
							<img src="/images/<?php echo $instructor['photo']; ?>" alt="">
						</div>
						<h4><?php echo $instructor['first'] . ' ' . $instructor['first'] ?></h4>
						<p class="title"><?php echo $instructor['title']; ?><br><?php echo $instructor['company']; ?></p>
					</div>
					<nav class="social-nav">
						<ul>

							<?php

							// twitter
							if(!empty($instructor['twitter'])) {
								echo '<li><a class="twitter" href="https://twitter.com/' . $instructor['twitter'] . '">Twitter</a></li>';
							}

							// linkedin
							if(!empty($instructor['linkedin'])) {
								echo '<li><a class="linkedin" href="' . $instructor['linkedin'] . '">LinkedIn</a></li>';
							}

							// instagram
							if(!empty($instructor['instagram'])) {
								echo '<li><a class="instagram" href="https://www.instagram.com/' . $instructor['instagram'] . '/">Instagram</a></li>';
							}

							?>
							
						</ul>
					</nav>
				</div>
				<div class="instructor-content">
					<div class="course-description">

						<?php

						if(count($courses) > 0) {
							foreach($courses as $course) {
								echo '<h3>' . $course['title'] . '</h3>';
								echo '<p>' . $course['description'] . '</p>';
							}
						}

						?>
					</div>
					<div class="about-instructor">
						<h3>About <?php echo $instructor['first'] ?></h3>
						<p><?php echo $instructor['bio'] ?></p>
					</div>
				</div>
			</div>
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