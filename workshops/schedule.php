<?php

// off-season
/*
header('location: /workshops', true, 307);
exit();
*/

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Schedule - Front UX & Product Management Workshop Series, November 2021';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');


function print_schedulerow($day, $slot) {
	$time_slots = get_workshopseries_timeslots($day);
	
	echo '
							<dl>
								<dt class="time">' . $time_slots[$slot]['time'] . ' ' . $time_slots[$slot]['meridian'] . '</dt>';
	
	$courses_row = get_courses($day, $slot);
	
	ksort($courses_row);
	
	echo '
							<dd class="course">
								<p class="title">Workshops</p>
							</dd>';
	
	/*
	foreach($courses_row as $course) {
		echo '
								<dd class="course">';

		// if only single instructor, put into array, so that it works to loop for all
		if(!is_array($course['instructor'])) {
			$course['instructor'] = array($course['instructor']);
		}
							
		foreach($course['instructor'] as $this_instructor) {
			$instructor = get_instructor($this_instructor);
																
			if($instructor) {
				echo '
									<div class="instructor_details ' . $instructor['discipline'] . '">
										<div class="instructor-photo">
											<a href="/workshops/instructor/' . $instructor['slug'] . '"><img class="instructor-photo" src="/images/' . $instructor['photo'] . '" alt=""></a>
										</div>
										<p class="instructor-name">
											<a href="/workshops/instructor/' . $instructor['slug'] . '">' . $instructor['first'] . ' ' . $instructor['last'] . '</a>
										</p>
									</div>';
			}
		}
		
		echo '
									<p class="title">' . $course['title'] . '</p>
								</dd>';
	}
	*/
	
	echo '</dl>';
}


?>
	<main class="secondary product-workshops-page workshop-schedule">
		<section class="hero">
			<h1>Schedule</h1>
		</section>
		<section class="schedule-breakdown">
			<h2>Schedule</h2>
						
			<p class="about-schedule">There are four workshops per time-slot. Workshop are not assigned or pre-selected, 
				allowing you to choose those that interest you most or adjust as your schedule requires. Workshop may fill 
				up fast so we encourage attendees to arrive on time.</p>
			
			<div class="schedule-day">
				<ol class="timeline">
					<li class="">
						<dl>
							<dt class="time"></dt>
							<dd class="header">Alpine 1</dd>
							<dd class="header">Alpine 2</dd>
							<dd class="header">Topaz</dd>
							<dd class="header">Canyons</dd>
						</dl>
					</li>
				</ol>
			</div>
			
			<div class="schedule-day">
				<h3><?php echo get_workshop_day(1); ?></h3>
				<ol class="timeline">
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">3:00 PM</dt>
							<dd class="food">
								<p>Arrivals and early registration</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">5:30 PM</dt>
							<dd class="food">
								<p>Round tables</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">7:00 PM</dt>
							<dd class="food">
								<p>Opening reception</p>
							</dd>
						</dl>
					</li>
				</ol>
			</div>
			
			<div class="schedule-day">
				<h3><?php echo get_workshop_day(2); ?></h3>
				<ol class="timeline">
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">7:00 AM</dt>
							<dd class="food">
								<p>Yoga</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">7:30 AM</dt>
							<dd class="food">
								<p>Registration and breakfast</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot four-hours">
						<?php echo print_schedulerow(1, 1); ?>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">12:30 PM</dt>
							<dd class="food">
								<p>Hot Lunch</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot four-hours">
						<?php echo print_schedulerow(1, 2); ?>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">5:30 PM</dt>
							<dd class="food">
								<p>Service project</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">7:00 PM</dt>
							<dd class="food">
								<p>Networking dinners</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">8:00 PM</dt>
							<dd class="food">
								<p>After party</p>
							</dd>
						</dl>
					</li>
				</ol>
			</div>
			
			<div class="schedule-day">
				<h3><?php echo get_workshop_day(3); ?></h3>
				<ol class="timeline">
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">7:00 AM</dt>
							<dd class="food">
								<p>Group medication</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">7:30 AM</dt>
							<dd class="food">
								<p>Breakfast</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot four-hours">
						<?php echo print_schedulerow(2, 1); ?>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">12:30 PM</dt>
							<dd class="food">
								<p>Hot Lunch</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot four-hours">
						<?php echo print_schedulerow(2, 2); ?>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">5:30 PM</dt>
							<dd class="food">
								<p>Hi-fives and goodbyes</p>
							</dd>
						</dl>
					</li>
				</ol>
			</div>
		</section>

		
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>Reserve your seat now for the premier UX and Product Management training experience. Design your custom training program now. Whether you’re a beginner or seasoned professional, the Front UX & Product Management Workshop Series will take you and your team to the next level in product design and management.</p>
			<p><a href="/workshops/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require('../includes/footer.php');

?>