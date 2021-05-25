<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$speaker = get_speaker($uri_parts[2]);
$talks = get_talks($speaker['slug']);

$title = $speaker['first'] . ' ' . $speaker['last'] . ' - Front UX & Product Management Case Study Conference, 29 Sep - 1 Oct 2021';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="secondary product-workshops-page">
		<section class="hero">
			<h1>Speakers</h1>
		</section>
		<section class="individual-instructor">
			<h2 class="">Speakers</h2>
			<div class="instructor-profile">
				<div class="details">
					<div class="instructor">
						<div class="<?php echo strtolower($speaker['discipline']); ?>">
							<div class="instructor-photo">
								<img src="/images/<?php echo $speaker['photo']; ?>" alt="">
							</div>
						</div>
						<h4><?php echo $speaker['first'] . ' ' . $speaker['last'] ?></h4>
						<p class="title"><?php echo $speaker['title']; ?><br><?php echo $speaker['company']; ?></p>
					</div>
					<nav class="social-nav">
						<ul>

							<?php

							// twitter
							if(!empty($speaker['twitter'])) {
								echo '<li><a class="twitter" target="_blank" href="https://twitter.com/' . $speaker['twitter'] . '">Twitter</a></li>';
							}

							// linkedin
							if(!empty($speaker['linkedin'])) {
								echo '<li><a class="linkedin" target="_blank" href="' . $speaker['linkedin'] . '">LinkedIn</a></li>';
							}

							// instagram
							if(!empty($speaker['instagram'])) {
								echo '<li><a class="instagram" target="_blank" href="https://www.instagram.com/' . $speaker['instagram'] . '/">Instagram</a></li>';
							}

							?>
							
						</ul>
					</nav>
				</div>
				<div class="instructor-content">
					<?php

					if(count($talks) > 0) {
						foreach($talks as $course) {
							echo '
								<div class="course-description">
									<h3>' . $course['title'] . '</h3>
									<p>' . $course['description'] . '</p>
								</div>';
						}
					}

					?>
					<div class="about-instructor">
						<h3>About <?php echo $speaker['first'] ?></h3>
						<p><?php echo $speaker['bio'] ?></p>
					</div>
				</div>
			</div>
		</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>In it's 6th year, Front is a sell-out event, with  
				<strong>800 annual attendees from 8 countries and 34 states</strong> 
				across the US. Join us at the Front to share, learn, and be inspired 
				to create amazing products.</p>
			<p><a href="/conference/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>