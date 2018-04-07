<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Talks - Front UX & Product Management Case Study Conference, 31 May - 1 June 2018';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>

<main class="secondary product-bootcamp-page">
	<section class="hero">
		<h1>Talks</h1>
	</section>
	<section class="courses <?php echo $track; ?>">
		<h2 class="">Talks</h2>
		<div class="course-calendar">
			<div class="course-date">
				<h3>Thursday, 31 May 2018</h3>
				<ul class="days-courses">

					<?php

					function print_courses($track, $day) {
						$slots[1] = array('time' => '8:30', 'meridian' => 'AM');
						$slots[2] = array('time' => '1:30', 'meridian' => 'PM');
						
						if($day == 1) {
							$slots[3] = array('time' => '3:30', 'meridian' => 'PM');
						}

						foreach($slots as $slot => $slot_details) {
							$course = get_course($track, $day, $slot);
							$instructor = get_instructor($course['instructor']);

							if(!empty($course)) {
								echo '
												<li class="course">
													<dl>
														<dt class="time">' . $slot_details['time'] . ' <span class="am-pm">' . $slot_details['meridian'] . '</span></dt>
														<dd class="instructor ' . $instructor['discipline'] . '">
															<div class="instructor-photo">
																<a href="/bootcamp/instructor/' . $instructor['slug'] . '"><img src="/images/';
																
								// ensure photo exists
								if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/images/' . $instructor['photo'])) {
									echo $instructor['photo'];
								} else {
									echo 'instructor_missing.png';
								}
								
								echo '" alt=""></a>
															</div>
															<div>
																<a href="/bootcamp/instructor/' . $instructor['slug'] . '">
																	<h4>' . $instructor['first'] . ' ' . $instructor['last'] . '</h4>
																	<p class="title">' . $instructor['title'] . '<br>' . $instructor['company'] . '</p>
																	<p class="experience"><span class="label">' . $course['level'] . '</span></p>
																</a>
															</div>
														</dd>
														<dd class="description">
															<h4>' . $course['title'] . '</h4>
															<p>' . $course['description'] . '</p>
														</dd>
													</dl>
												</li>';
							} else {
								echo '
												<li class="course">
													<dl>
														<dt class="time">' . $slot_details['time'] . ' <span class="am-pm">' . $slot_details['meridian'] . '</span></dt>
														<dd class="description">
															<h4>TBD</h4>
														</dd>
													</dl>
												</li>';
							}
						}
					}

					echo print_courses($uri_parts[2], 1);

					?>

				</ul>
			</div>
			<div class="course-date">
				<h3>Friday, 1 June 2018</h3>
				<ul class="days-courses">
					<?php echo print_courses($uri_parts[2], 2); ?>
				</ul>
			</div>
		</div>
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