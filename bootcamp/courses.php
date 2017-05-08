<?php

$title = 'Front - The product conference for UX designers and product managers';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/data/instructors_pc18.php');
require($_SERVER['DOCUMENT_ROOT'] . '/data/courses_pc18.php');

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
		<p class="about-courses">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

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
						$slots[3] = array('time' => '3:30', 'meridian' => 'PM');

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
																<img src="/images/' . $instructor['photo'] . '" alt="">
															</div>
															<div>
																<h4>' . $instructor['first'] . ' ' . $instructor['last'] . '</h4>
																<p class="title">' . $instructor['title'] . '<br>' . $instructor['company'] . '</p>
																<p class="experience"><span class="label">' . $course['level'] . '</span></p>
															</div>
														</dd>
														<dd class="description">
															<h4>' . $course['title'] . '</h4>
															<p>' . $course['description'] . '</p>
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
				<h3>Wednesday, 5 January 2018</h3>
				<ul class="days-courses">
					<?php echo print_courses($uri_parts[2], 2); ?>
				</ul>
			</div>
		</div>
	</section>
	<section class="join-us">
		<h2>Join us at the Front!</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		<p><a href="" class="button">Register</a></p>
	</section>
</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>