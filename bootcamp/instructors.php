<?php

$title = 'Front - The product conference for UX designers and product managers';

require('../includes/header.php');

?>
	<main class="product-bootcamp-page">
		<section class="hero">
			<h1>Instructors</h1>
		</section>
		<section class="instructors">
			<h2 class="">Instructors</h2>
			<ul class="instructor-list">

<?php

// randomize list
shuffle($instructors);

// spit them out
foreach($instructors as $instructor) {
	echo '<li class="instructor ' . $instructor['discipline'] . '">
					<a href="/bootcamp/instructor/' . $instructor['slug'] . '">
						<div class="instructor-photo">
							<img src="/images/' . $instructor['photo'] . '" alt="">
						</div>
						<h4>' . $instructor['name'] . '</h4>
						<p class="title">' . $instructor['title'] . '<br>' . $instructor['company'] . '</p>
					</a>
				</li>';

}

?>

			</ul>
		</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<p><a href="" class="button">Register</a></p>
		</section>
	</main>

<?php

require('../includes/footer.php');

?>