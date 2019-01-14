<?php
	
//header('location: /workshops');

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Instructors - Front UX & Product Management Workshop Series, 8-9 November 2018';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="secondary product-workshops-page workshops-instructors">
		<section class="hero">
			<h1>Past instructors</h1>
		</section>
		<section class="instructors">
			<h2 class="">Past instructors</h2>
			<ul class="instructor-list">

<?php

// randomize list
shuffle($instructors);

// spit them out
foreach($instructors as $instructor) {
	echo '<li class="instructor ' . $instructor['discipline'] . '">
					<a href="/workshops/instructor/' . $instructor['slug'] . '">
						<div class="instructor-photo">
							<img src="/images/' . $instructor['photo'] . '" alt="">
						</div>
						<h4>' . $instructor['first'] . ' ' . $instructor['last'] . '</h4>
						<p class="title">' . $instructor['title'] . '<br>' . $instructor['company'] . '</p>
					</a>
				</li>';

}

?>

			</ul>
			<!-- <p><em>+ 2 more instructors to be announced soon!</em></p> -->
		</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>Reserve your seat now for the premier UX and Product Management training 
				experience. Design your custom training program now. Whether you’re a 
				beginner or seasoned professional, the Front Park City workshop series 
				will take you and your team to the next level in product design and management.</p>
			<p><a href="/workshops/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>