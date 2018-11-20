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
				<div class="instructor <?php echo strtolower($consultant['discipline']); ?>">
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
			<div class="instructor-content theme-<?php echo strtolower($consultant['discipline']); ?>">
				<div class="course-description">
					<?php

					if(count($trainings) > 0) {
						foreach($trainings as $slug => $training) {
								echo '<h3><a href="/onsite/training/' . $training['slug'] . '">' . $training['title'] . ' &nbsp;&nbsp; &xrarr;</a></h3>';
								echo '<p><strong>Size:</strong> ' . $training['capacity'] . ' &nbsp;&nbsp;•&nbsp;&nbsp; <strong>Length:</strong> ' . $training['length'] . ' &nbsp;&nbsp;•&nbsp;&nbsp; <strong>Price:</strong> $' . $training['price'] . '</p>';
								
								echo '<p><strong>Subjects:</strong> ';
			
								$count = count($training['subjects']);
								foreach($training['subjects'] as $key => $subject) {
									echo training_subject($subject);
			
									if($key < $count - 1) {
										echo ', ';
									}
								}
			
								echo '</p>';								

								echo '<p>' . $training['description'] . '</p>';
								echo '<p><a class="bookTrainingButton button button-small">Contact Us To Book</a></p>';
								
								echo '
									<div class="bookTrainingForm">
										<form action="/onsite/book.php" method="post" class="bookTrainingForm_form" id="bookTrainingForm_' . $training['slug'] . '">
											<div class="input">
												<label for="name">Name</label>
												<input type="text" id="name" name="name">
											</div>
											<div class="input">
												<label for="company">Company</label>
												<input type="text" id="company" name="company">
											</div>
											<div class="input">
												<label for="email">Email</label>
												<input type="text" id="email" name="email">
											</div>
											<div class="input">
												<label for="email">Tell us about your team and goals</label>
												<textarea id="message" name="message"></textarea>
											</div>
											<button type="submit" name="submit" class="button button-small">Submit</button>
											<input type="hidden" name="training" value="' . $training['title'] . '" />
											<input type="hidden" name="consultant" value="' . $consultant['first'] . ' ' . $consultant['last'] . '" />
										</form>
									</div>';
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