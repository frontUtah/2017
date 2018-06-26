<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Speakers - Front UX & Product Management Case Study Conference, 6-7 June 2019';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="secondary product-speakers-front">
		<section class="hero">
			<h1>Speakers</h1>
		</section>
		<section class="instructors">
			<h2 class="">Speakers</h2>
			<ul class="instructor-list">

<?php

// randomize list
shuffle($speakers);

// spit them out
foreach($speakers as $speaker) {
	echo '<li class="instructor ' . $speaker['discipline'] . '">
					<a href="/conference/speaker/' . $speaker['slug'] . '">
						<div class="instructor-photo">
							<img src="/images/' . $speaker['photo'] . '" alt="">
						</div>
						<h4>' . $speaker['first'] . ' ' . $speaker['last'] . '</h4>
						<p class="title">' . $speaker['title'] . '<br>' . $speaker['company'] . '</p>
					</a>
				</li>';

}

?>

			</ul>
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