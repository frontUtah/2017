<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Instructors - Front Salt Lake City 2018, 31 May - 1 June 2018';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="secondary product-bootcamp-page">
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
						<h4>' . $instructor['first'] . ' ' . $instructor['last'] . '</h4>
						<p class="title">' . $instructor['title'] . '<br>' . $instructor['company'] . '</p>
					</a>
				</li>';

}

?>

			</ul>
			<p><em>+ 2 more instructors to be announced soon!</em></p>
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