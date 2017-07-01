<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Courses - Front Park City 2018, 4-5 January 2018';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

// if no tab requested, redirect to the first
if(empty($uri_parts[2])) {
	$string = '<script type="text/javascript">';
    $string .= 'window.location = "http://' . $_SERVER['HTTP_HOST'] . '/bootcamp/courses/ux' . '"';
    $string .= '</script>';
    echo $string;
	die;
}

$track = $uri_parts[2];

$tabs[] = array('link' => 'ux', 'text' => 'UX');
$tabs[] = array('link' => 'pm', 'text' => 'Product Management');
$tabs[] = array('link' => 'research', 'text' => 'Research');
$tabs[] = array('link' => 'leadership', 'text' => 'Leadership');

?>

<main class="product-bootcamp-page">
	<section class="hero">
		<h1>Courses</h1>
	</section>
	<section class="courses <?php echo $track; ?>">
		<h2 class="">Courses</h2>
		<p class="about-courses">

<?php

switch($track) {
	case 'ux':
		echo 'User experience is everyone’s responsibility, but someone needs to own it. Every team needs an advocate with a keen eye and deep empathy. Learn how to harness the power of your team from these product design experts and evangelists.';
		break;
	case 'pm':
		echo 'Achieving greatness through influence. It’s a little like herding cats. Product Managers help their teams ship the right products to their users. These experienced leaders will share how they are innovating through continuous discovery and validation.';
		break;
	case 'research':
		echo 'The cross-functional team is crucial for effective product design. Delightful, user-focused products only come from organizations that listen, iterate, and learn at every level. Learn about collaboration and culture from other members of the team.';
		break;
	case 'leadership':
		echo 'Regardless of your place in the product team, strong leadership is a requirement for improving process and ultimately, the ability to deliver products and experiences which matter. ';
		break;
}

?>
			</p>

		<nav class="course-track-nav">
			<h4>Select Your Track</h4>
			<div class="track-options">
				<ul>
					<!--Mobile Order: Actual Order. Desktop Order: Class Names. Bless you Flexbox-->

					<?php

					// build tabs

					foreach($tabs as $key => $tab) {
						echo '<li class="order-' . ($key + 1)  . '">';

						if($tab['link'] == $track) {
							echo '<span class="active">' . $tab['text'] . '</span>';
						} else {
							echo '<a href="/bootcamp/courses/' . $tab['link'] . '">' . $tab['text'] . '</a>';
						}

						echo '</li>';
						echo "\n";
					}

					?>

				</ul>
			</div>
		</nav>

		<div class="course-calendar">
			<div class="course-date">
				<h3>Thursday, 4 January 2018</h3>
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
				<h3>Friday, 5 January 2018</h3>
				<ul class="days-courses">
					<?php echo print_courses($uri_parts[2], 2); ?>
				</ul>
			</div>
		</div>
	</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>Reserve your seat now for the premier UX and Product Management training experience. Design your custom training program now. Whether you’re a beginner or seasoned professional, the Front Park City workshop series will take you and your team to the next level in product design and management.</p>
			<p><a href="/bootcamp/registration" class="button">Register</a></p>
		</section>
</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>