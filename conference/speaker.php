<?php

$title = 'Front - The product conference for UX designers and product managers';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

$speaker = get_speaker($uri_parts[2]);
$sessions = get_sessions($speaker['slug']);

?>
	<main class="product-bootcamp-page">
		<section class="hero">
			<h1>Instructors</h1>
		</section>
		<section class="individual-instructor">
			<h2 class="">Instructors</h2>
			<div class="instructor-profile">
				<div class="details">
					<div class="instructor <?php echo $speaker['discipline']; ?>">
						<div class="instructor-photo">
							<img src="/conference/images/<?php echo $speaker['photo']; ?>" alt="">
						</div>
						<h4><?php echo $speaker['first'] . ' ' . $speaker['last'] ?></h4>
						<p class="title"><?php echo $speaker['title']; ?><br><?php echo $speaker['company']; ?></p>
					</div>
					<nav class="social-nav">
						<ul>

							<?php

							// twitter
							if(!empty($speaker['twitter'])) {
								echo '<li><a class="twitter" href="https://twitter.com/' . $speaker['twitter'] . '">Twitter</a></li>';
							}

							// linkedin
							if(!empty($speaker['linkedin'])) {
								echo '<li><a class="linkedin" href="' . $speaker['linkedin'] . '">LinkedIn</a></li>';
							}

							// instagram
							if(!empty($speaker['instagram'])) {
								echo '<li><a class="instagram" href="https://www.instagram.com/' . $speaker['instagram'] . '/">Instagram</a></li>';
							}

							?>
							
						</ul>
					</nav>
				</div>
				<div class="instructor-content">
					<div class="course-description">

						<?php

						if(count($sessions) > 0) {
							foreach($sessions as $session) {
								echo '<h3>' . $session['title'] . '</h3>';
								echo '<p>' . $session['description'] . '</p>';
							}
						}

						?>
					</div>
					<div class="about-instructor">
						<h3>About <?php echo $speaker['first'] ?></h3>
						<p><?php echo $speaker['bio'] ?></p>
					</div>
				</div>
			</div>
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