<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front UX & Product Management public workshops';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="product-workshops-public">
		<section class="hero">
			<h1>UX &amp; Product Management Public Workshops</h1>
			
			<!-- a href="http://www.pendo.io"><img id="broughtoyouby" src="/images/frontpc18/broughttoyouby_pendo.png" /></a -->
		</section>
		<section class="training-courses">
				<h2>Workshops for improving what matters</h2>
				<p>The industry is evolving and maturing at a rapid pace. Best-practices and new techniques seems to develop almost faster than we’re able to bring new products to market. As product managers and designers, it’s critical that we’re continually learning and refining our craft. Front is pleased to bring you  public workshops, taught by the industry’s forefront thought-leaders and instructors, to help you grow or kick-start your career.</p>
				<p>Join us again and again for new insights and experiences, throughout the year in major cities around the world. Each workshop will be kept to a small group of only 3-4 dozen. Breakfast and lunch will be provided. New courses, dates, and locations will be added regularly.</p>
		</section>
				
<?php
	
// sort by date
usort($workshops, function($a, $b) {
    // if we were on PHP 7+
    //return $a['timestamp'] <=> $b['timestamp'];
    
    return $b['order'] - $a['order'];
});

// separate into scheduled and unscheduled 
foreach($workshops as $workshop) {
	if(!empty($workshop['registration'])) {
		$scheduled_workshops[] = $workshop;
	} else {
		$unscheduled_workshops[] = $workshop;
	}
}

// function to print a workshop
function print_workshop($workshop) {
	$instructor = get_instructor($workshop['instructor']);
	
	echo '
				<ul class="public-workshop">
					<li class="theme-' . $workshop['discipline'] . '">
						<dl>
							<dd class="instructor ' . $workshop['discipline'] . '">
								<div class="instructor-photo">
									<img src="' . $instructor['photo'] . '">
								</div>
							</dd>
							<dd>
								<h4>' . $workshop['title'] . '</h4>
								<p class="name">by ' . $instructor['first'] . ' ' . $instructor['last'] . '</p>
								<p class="location"><span class="icon-location"></span>' . $workshop['location'] . '</p>';
								
	if(!empty($workshop['registration'])) {
		echo '								<p class="date-mobile"><span class="icon-location"></span>' . date('M d, Y', $workshop['timestamp']) . '</p>';
	}
	
	echo '								<p class="description">' . $workshop['description'] . '</p>';
								
	if(!empty($workshop['registration'])) {
		echo '								<a href="' . $workshop['registration'] . '" target="_blank" class="button button-small">Learn more</a>';
	} else {
		echo '								<a href="http://eepurl.com/dJBOZ6" target="_blank" class="button button-small">Coming soon. Notify me!</a>';
	}
	
	echo '
							</dd>';
							
	if(!empty($workshop['registration'])) {
		echo '							
							<dd class="date-desk">
								<span class="month">' . date('M', $workshop['timestamp']) . '</span><span class="day">' . date('d', $workshop['timestamp']) . '</span>
							</dd>';
	}

	echo '
						</dl>
					</li>
				</ul>';
}

?>

	
		<section class="public-workshops">
			<h2>Scheduled public workshops</h2>
			<div class="public-workshops-wrap">
				
			<?php
			
			if(count($scheduled_workshops) < 1) {
				echo '<p><em>No workshops scheduled at this time. Please check back soon.</em></p>';
			} else {
				foreach($scheduled_workshops as $scheduled_workshop) {
					print_workshop($scheduled_workshop);
				}
			}
			
			?>
			
			</div>
		</section>

		<section class="public-workshops">
			<h2>Upcoming public workshops</h2>
			<div class="public-workshops-wrap">
				
			<?php
			
			if(count($unscheduled_workshops) < 1) {
				echo '<p><em>No new workshops being considered at this time. Please check back soon.</em></p>';
			} else {
				foreach($unscheduled_workshops as $unscheduled_workshop) {
					print_workshop($unscheduled_workshop);
				}
			}
			
			?>
			
			</div>
		</section>
			
		<section class="photo-collage">
			<img src="/images/conf-collage-mobile.jpg" alt="" class="full mobile">
			<img src="/images/conf-collage-desktop.jpg" alt="" class="full desktop">
		</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>Reserve your seat now for the premier UX and Product Management training experience. Design your custom training program now. Whether you’re a beginner or seasoned professional, the Front UX & Product Management Workshops Series will take you and your team to the next level in product design and management.</p>
			<p><a href="/workshops/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>