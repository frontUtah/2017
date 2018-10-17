<?php
	
//header('location: /workshops');

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Onsite - Front UX & Product Management Workshop Series, 8-9 November 2018';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>

<main class="secondary product-workshops-page workshops-courses">
	<section class="hero">
		<h1>Onsite</h1>
	</section>
	<section class="courses <?php echo $workshop; ?>">
		<h2 class="">Onsite Training</h2>
		

		<div class="course-calendar">
			<div class="course-date">
				<h3>Thursday, 8 November 2018</h3>
				<ul class="days-courses">

					<?php

					function print_onsites($workshop) {

						foreach($slots as $slot => $slot_details) {
							$onsite = get_onsites($workshop);
							$consultant = get_consultant($onsite['consultant']);

							if(!empty($onsite)) {
								echo '
												<li class="course">
													<dl>
														<dd class="consultant ' . $consultant['discipline'] . '">
															<div class="consultant-photo">
																<a href="/onsite/consultant/' . $consultant['slug'] . '"><img src="/images/';
																
								// ensure photo exists
								if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/images/' . $consultant['photo'])) {
									echo $consultant['photo'];
								} else {
									echo 'consultant.png';
								}
								
								echo '" alt=""></a>
															</div>
															<div>
																<a href="/onsite/consultant/' . $consultant['slug'] . '">
																	<h4>' . $consultant['first'] . ' ' . $consultant['last'] . '</h4>
																	<p class="title">' . $consultant['title'] . '<br>' . $consultant['company'] . '</p>
																</a>
															</div>
														</dd>
														<dd class="description">
															<h4>' . $onsite['title'] . '</h4>
															<p>' . $onsite['description'] . '</p>
														</dd>
													</dl>
												</li>';
							} else {
								echo '
												<li class="course">
													<dl>
														<dd class="description">
															<h4>TBD</h4>
														</dd>
													</dl>
												</li>';
							}
						}
					}

					echo print_onsites($uri_parts[2], 1);

					?>

				</ul>
			</div>
			<div class="course-date">
				<h3>Friday, 9 November 2018</h3>
				<ul class="days-courses">
					<?php echo print_onsites($uri_parts[2], 2); ?>
				</ul>
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