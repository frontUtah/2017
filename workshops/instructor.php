<?php

// off-season
header('location: /workshops', true, 307);
exit();

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$instructor = get_instructor($uri_parts[2]);

// redirect if instructor doesn't exist
if(is_null($instructor)) {
	header('location: http://' . $_SERVER['SERVER_NAME'] . '/workshops/instructors');
	exit();
}

$courses = get_courses_by_instructor($instructor['slug']);

$title = $instructor['first'] . ' ' . $instructor['last'] . ' - Front UX & Product Management Workshop Series, 2-4 November 2022';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>

<main class="secondary product-workshops-page">
	<section class="hero">
		<h1>Instructors</h1>
	</section>
	<section class="individual-instructor">
		<h2 class="">Instructors</h2>
		<div class="instructor-profile">
			
			<!-- COLUMN 1 -->
			<div class="details">
				<div class="instructor">
					<div class="<?php echo strtolower($instructor['discipline']); ?>">
						<div class="instructor-photo">
							<img src="/images/<?php echo $instructor['photo']; ?>" alt="">
						</div>
						<h4><?php echo $instructor['first'] . ' ' . $instructor['last'] ?></h4>
						<p class="title"><?php echo $instructor['title']; ?><br><?php echo $instructor['company']; ?></p>
					</div>
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
			
			
			<!-- COLUMN 2 -->
			<div class="instructor-content">

				<?php

				if(count($courses) > 0) {
					foreach($courses as $course) {
						echo '<div class="course-description">';
							echo '<h3>' . $course['title'] . '</h3>';
							echo '<h4>' . get_workshop_day($course['day']) . ', at ' . get_time($course['day'], $course['slot']) . '</h4>';
							
							// if team taught, say so
							if(is_array($course['instructor']) && count($course['instructor']) > 1) {
								// get the other instructors
								$other_instructors = get_other_instructors($course['instructor'], $instructor['slug']);
								
								// say it
								echo '<h4 class="team_taught">Taught together with ';
								
								$other_instructors_count = count($other_instructors) - 1;
								
								foreach($other_instructors as $key => $other_instructor) {
									// get instrctor info
									$other_instructor_info = get_instructor($other_instructor);
									
									if($key > 0 && $key <= $other_instructors_count) {
										echo ', ';
									}
									
									if($key == $other_instructors_count && $other_instructors_count > 1) {
										echo ' and ';
									}
									
									// print name as link
									echo '<a href="/workshops/instructor/' . $other_instructor_info['slug'] . '">' . $other_instructor_info['first'] . ' ' . $other_instructor_info['last'] . '</a>';
									
									if($key == $other_instructors_count) {
										echo '.';
									}

								}
								
								echo '</h4>';
							}
						
							// recording for sale?
							/*
							if(isset($course['gumroad_product_id']) && !empty($course['gumroad_product_id'])) {
								echo '
									<div class="workshop-video-recording">
										<br>
										<script src="https://gumroad.com/js/gumroad.js"></script>
										<a class="button" href="https://gum.co/' . $course['gumroad_product_id'] . '?wanted=true" target="_blank">Pre-order a recording of this workshop</a>
									</div>';
							}
							*/
							
							echo '<p>' . $course['description'] . '</p>';
						echo '</div>';
					}
				}

				?>
				<div class="about-instructor">
					<h3>About <?php echo $instructor['first'] ?></h3>
					<p><?php echo $instructor['bio'] ?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="join-us">
		<h2>Join us at the Front!</h2>
		<p>Reserve your seat now for the premier UX and Product Management training experience. Design your custom training program now. Whether you’re a beginner or seasoned professional, the Front UX & Product Management Workshop Series will take you and your team to the next level in product design and management.</p>
		<p><a href="/workshops/registration" class="button">Register</a></p>
	</section>
</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>