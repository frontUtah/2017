<?php

// off-season
header('location: /workshops', true, 307);
exit();

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Courses - Front UX & Product Management Workshop Series, 8-10 November 2021';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>

<main class="secondary product-workshops-page workshops-courses">
	<section class="hero">
		<h1>Courses</h1>
	</section>
	<section class="courses <?php echo $track; ?>">
		<h2 class="">Courses</h2>


		<div class="course-calendar">
			<div class="course-date">
				<h3><?php echo get_workshop_day(1); ?></h3>
				<ul class="days-courses">

					<?php

					function print_courses($day) {
						$slots = get_workshopseries_timeslots($day);

						foreach($slots as $slot => $slot_details) {
							$courses = get_courses($day, $slot);
							
							shuffle($courses);
							
							foreach($courses as $course) {
								if(!empty($course)) {
									echo '
													<li class="course">
														<dl>
															<dt class="time">' . $slot_details['time'] . ' <span class="am-pm">' . $slot_details['meridian'] . '</span></dt>
															<dd class="instructor team">';
								
								// if only single instructor, put into array, so that it works to loop for all
								if(!is_array($course['instructor'])) {
									$course['instructor'] = array($course['instructor']);
								}
													
								foreach($course['instructor'] as $this_instructor) {
									$instructor = get_instructor($this_instructor);
									
									echo '
																<div class="instructor_details ' . $instructor['discipline'] . '">
																	<div class="instructor-photo">
																		<a href="/workshops/instructor/' . $instructor['slug'] . '"><img src="/images/';
																		
										// ensure photo exists
										if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/images/' . $instructor['photo'])) {
											echo $instructor['photo'];
										} else {
											echo 'instructor_missing.png';
										}
										
										echo '" alt=""></a>
																	</div>
																	<div>
																		<a href="/workshops/instructor/' . $instructor['slug'] . '">
																			<h4>' . $instructor['first'] . ' ' . $instructor['last'] . '</h4>
																			<p class="title">' . $instructor['title'] . '<br>' . $instructor['company'] . '</p>
																			<p class="experience"><span class="label">' . $course['level'] . '</span></p>
																		</a>
																	</div>
																</div>';
								}
								
								echo '
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
					}

					echo print_courses(1);

					?>

				</ul>
			</div>
			<div class="course-date">
				<h3><?php echo get_workshop_day(2); ?></h3>
				<ul class="days-courses">
					<?php echo print_courses(2); ?>
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