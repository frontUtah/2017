<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$sponsor = get_sponsor($uri_parts[2]);

$title = $sponsor['name'] . ' - Front UX & Product Management Case Study Conference, Spring 2023';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="secondary product-workshops-page">
		<section class="hero">
			<h1>Sponsors</h1>
		</section>
		<section class="individual-instructor">
			<h2 class="">Sponsors</h2>
			<div class="instructor-profile">
				<div class="details">
					<div class="instructor">
						<div class="">
							<div class="instructor-logo">
								<img src="/images/sponsors/<?php echo $sponsor['logo']; ?>" alt="" />
							</div>
						</div>
					</div>
				</div>
				<div class="instructor-content">
					<div class="course-description">
						<h3><?php echo $sponsor['name'] ?></h3>
						<p><?php echo $sponsor['message'] ?></p>
						<p><a href="<?php echo $sponsor['url'] ?>" class="button button-small" target="_blank">Check out <?php echo $sponsor['name'] ?></a></p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>In it's 7th year, Front is a sell-out event, with a 
				<strong>1,000 annual attendees from across the country 
				and around the world.</strong> Join us at the Front to 
				share, learn, and be inspired to create amazing products.</p>
			<p><a href="/conference/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>