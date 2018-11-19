<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');


// get consultant information
$consultant = get_consultant($uri_parts[2]);
$trainings = get_trainings_by_instructor($uri_parts[2]);

// redirect if instructor doesn't exist
if(is_null($consultant)) {
	header('location: http://' . $_SERVER['SERVER_NAME'] . '/onsite');
	exit();
}


$title = 'Front - Custom onsite UX & Product Management training';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>

<style type="text/css">
	.course-description h3:not(:first-child) {padding-top: 20px; border-top: 1px solid rgba(0,0,0,.09);}
</style>

<main class="secondary product-workshops-page">
	<section class="hero">
		<h1>Consultant</h1>
	</section>
	<section class="individual-instructor">
		<h2 class="">Consultants</h2>
		<div class="instructor-profile">
			<div class="details">
				<div class="instructor ux">
					<div class="instructor-photo">
						<img src="/images/<?php echo $consultant['photo']; ?>" alt="">
					</div>
					<h4><?php echo $consultant['first'] . ' ' . $consultant['last'] ?></h4>
					<p class="title"><?php echo $consultant['title']; ?><br><?php echo $consultant['company']; ?></p>
					<div class="about-instructor" style="margin-top: 50px;">
						<h3>About <?php echo $consultant['first'] ?></h3>
						<p><?php echo $consultant['bio'] ?></p>
					</div>
					<nav class="social-nav">
						<ul>
							<?php

							// twitter
							if(!empty($consultant['twitter'])) {
								echo '<li><a class="twitter" href="https://twitter.com/' . $consultant['twitter'] . '">Twitter</a></li>';
							}

							// linkedin
							if(!empty($consultant['linkedin'])) {
								echo '<li><a class="linkedin" href="' . $consultant['linkedin'] . '">LinkedIn</a></li>';
							}

							// instagram
							if(!empty($consultant['instagram'])) {
								echo '<li><a class="instagram" href="https://www.instagram.com/' . $consultant['instagram'] . '/">Instagram</a></li>';
							}

							?>						
						</ul>
					</nav>

				</div>
			</div>
			<div class="instructor-content">
				<div class="course-description">
					<?php

					if(count($trainings) > 0) {
						foreach($trainings as $slug => $their_trainings) {
								echo '<h3>' . $their_trainings['title'] . '</h3>';
								echo '<p><strong>Size:</strong> 10 - 50 &nbsp;&nbsp;•&nbsp;&nbsp; <strong>Length:</strong> One Day &nbsp;&nbsp;•&nbsp;&nbsp; <strong>Price:</strong> $' . $their_trainings['price'] . '</p>';
								echo '<p>' . $their_trainings['description'] . '</p>';
								echo '<p><a href="mailto:ben@benpeck.com?subject=Front Onsite Training Request: ' . $their_trainings['title'] . '" class="button button-small">Contact Us To Book</a></p>';
								
						}
					}

					?>
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