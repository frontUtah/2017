<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Schedule - Front UX & Product Management Case Study Conference, 6-7 June 2019';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');


function print_schedulerow($day, $slot) {
	$time_slots = get_conference_timeslots($day);
	$talk = get_talk($day, $slot);
	$speaker = get_speaker($talk['speaker']);
	
	if(!is_null($speaker)) {
		echo '
							<a href="/conference/speaker/' . $speaker['slug'] . '"">
								<dl>
									<dt class="time">' . $time_slots[$slot]['time'] . ' ' . $time_slots[$slot]['meridian'] . '</dt>
									<dd class="' . $speaker['discipline'] . '">
										<img src="/images/' . $speaker['photo'] . '">
										<h4>' . $talk['title'] . '</h4>
										<p><strong>' . $speaker['first'] . ' ' . $speaker['last'] . '</strong> <br> ' . $speaker['title'] . ' <br> ' . $speaker['company'] . '</p>
									</dd>
								</dl>
							</a>';
	} else {
		echo '
							<dl>
								<dt class="time">' . $time_slots[$slot]['time'] . ' ' . $time_slots[$slot]['meridian'] . '</dt>
								<dd class="">
									<img src="/images/frontpc18/instructor_missing.png">
									<h4>TBA</h4>
								</dd>
							</dl>';
	}
}

?>
	<main class="secondary product-schedule-front">
		<section class="hero">
			<h1>2019 schedule</h1>
		</section>
		<section class="schedule-breakdown">
			<h2>2018 schedule</h2>
			<div class="schedule-day">
				<h3>Thursday, 6 June 2019</h3>
				<ol class="timeline">
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">7:30 AM</dt>
							<dd class="food">
								<p>Breakfast and registration</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">9:00 AM</dt>
							<dd class="food">
								<p>Opening remarks</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(1, 1); ?>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(1, 2); ?>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">10:20 AM</dt>
							<dd class="food">
								<p>Break (drinks and snacks)</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(1, 3); ?>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(1, 4); ?>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">12:10 PM</dt>
							<dd class="food">
								<p>Lunch</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(1, 5); ?>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(1, 6); ?>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">2:50 PM</dt>
							<dd class="food">
								<p>Break (coffee)</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(1, 7); ?>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(1, 8); ?>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">4:40 PM</dt>
							<dd class="food">
								<p>Day 1 wrap-up</p>
							</dd>
						</dl>
					</li>
				</ol>
			</div>
			<div class="schedule-day">
				<h3>Friday, 7 June 2019</h3>
				<ol class="timeline">
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">7:30 AM</dt>
							<dd class="food">
								<p>Breakfast and registration</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">9:00 AM</dt>
							<dd class="food">
								<p>Day 2 kick-off</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(2, 1); ?>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(2, 2); ?>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">10:20 AM</dt>
							<dd class="food">
								<p>Break (drinks and snacks)</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(2, 3); ?>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(2, 4); ?>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">12:10 PM</dt>
							<dd class="food">
								<p>Lunch</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(2, 5); ?>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(2, 6); ?>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">2:50 PM</dt>
							<dd class="food">
								<p>Break (coffee)</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(2, 7); ?>
					</li>
					<li class="timeslot two-hours">
						<?php print_schedulerow(2, 8); ?>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">4:40 PM</dt>
							<dd class="food">
								<p>Closing remarks</p>
							</dd>
						</dl>
					</li>
				</ol>
			</div>
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

require('../includes/footer.php');

?>