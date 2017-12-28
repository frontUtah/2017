<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$instructor = get_instructor($uri_parts[2]);
$courses = get_courses($instructor['slug']);

$title = $instructor['first'] . ' ' . $instructor['last'] . ' - Front Salt Lake City 2018, 31 May - 1 June 2018';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="secondary product-bootcamp-page">
		<section class="hero">
			<h1>Instructors</h1>
		</section>
		<section class="individual-instructor">
			<h2 class="">Instructors</h2>
			<div class="instructor-profile">
				<div class="details">
					<div class="instructor <?php echo strtolower($instructor['discipline']); ?>">
						<div class="instructor-photo">
							<img src="/images/<?php echo $instructor['photo']; ?>" alt="">
						</div>
						<h4><?php echo $instructor['first'] . ' ' . $instructor['last'] ?></h4>
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
			<p>In 2017, Front Salt Lake City sold out with 650 attendees from 4 countries and 29 states across the US. Join us at the Front to share, learn, and be inspired to create amazing products.</p>
			<p><a href="/conference/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>