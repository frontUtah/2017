<?php
	
//header('location: /workshops');

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Consultants - Front UX & Product Management Onsite Training';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="secondary product-workshops-page workshops-instructors">
		<section class="hero">
			<h1>Consultants</h1>
		</section>
		<section class="instructors">
			<h2 class="">Consultants</h2>
			<ul class="instructor-list">

<?php

// randomize list
shuffle($consultants);

// spit them out
foreach($consultants as $consultant) {
	echo '<li class="instructor ' . $consultant['discipline'] . '">
					<a href="/onsite/consultant/' . $consultant['slug'] . '">
						<div class="instructor-photo">
							<img src="/images/' . $consultant['photo'] . '" alt="">
						</div>
						<h4>' . $consultant['first'] . ' ' . $consultant['last'] . '</h4>
						<p class="title">' . $consultant['title'] . '<br>' . $consultant['company'] . '</p>
					</a>
				</li>';

}

?>

			</ul>
		</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>In it's 5th year, Front is a sell-out event, with  
				<strong>1,000 annual attendees from 5 countries and 31 states</strong> 
				across the US. Join us at the Front to share, learn, and be inspired 
				to create amazing products.</p>
			<p><a href="/conference/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>