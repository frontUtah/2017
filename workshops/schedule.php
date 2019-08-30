<?php

// off-season
//header('/workshops', true, 307);
//exit();

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Schedule - Front UX & Product Management Workshop Series, 7-8 November 2019';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');


function print_schedulerow($day, $slot) {
	$tracks = array('ux', 'product-management', 'research', 'leadership');
	
	$time_slots = get_workshopseries_timeslots($day);
	
	echo '
							<dl>
								<dt class="time">' . $time_slots[$slot]['time'] . ' ' . $time_slots[$slot]['meridian'] . '</dt>';
	
	foreach($tracks as $track) {
		$course = get_course($track, $day, $slot);
		$instructor = get_instructor($course['instructor']);
		
		echo '
								<dd class="product-management course" onclick="">';
								
								
		if($instructor) {
			echo '
									<div class="instructor-photo">
										<a href="/workshops/instructor/' . $instructor['slug'] . '"><img style="width: 50px" src="/images/';
										
											// ensure photo exists
											if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/images/' . $instructor['photo'])) {
												echo $instructor['photo'];
											} else {
												echo 'instructor_missing.png';
											}
											
											echo '" alt=""></a>
									</div>
									<a href="/workshops/instructor/' . $instructor['slug'] . '">
										<p><strong>' . $instructor['first'] . ' ' . $instructor['last'] . '</strong></p>
										<p>' . $course['title'] . '</p>
									</a>
								</dd>';
	}
	}
	
	echo '
							</dl>';
}


?>
	<main class="secondary product-workshops-page workshop-schedule">
		<section class="hero">
			<h1>Schedule</h1>
		</section>
		<section class="schedule-breakdown">
			<h2>Schedule</h2>
			
			<!--
			<div class="schedule-day">
				<ol class="timeline">
					<li class="timeslot category">
						<dl>
							<dt class="time"></dt>
							<dd class="ux">
								<h4>UX</h4>
							</dd>
							<dd class="product-management">
								<h4>PM</h4>
							</dd>
							<dd class="research">
								<h4>Research</h4>
							</dd>
							<dd class="leadership">
								<h4>Leadership</h4>
							</dd>
						</dl>
					</li>
				</ol>
			</div>
			-->
						
			<p class="about-schedule">There are four workshops per time-slot. Workshop are not assigned or pre-selected, 
				allowing you to choose those that interest you most or adjust as your schedule requires. Workshop may fill 
				up fast so we encourage attendees to arrive on time.</p>
			
			<div class="schedule-day">
				<h3>Thursday, 7 November 2019</h3>
				<ol class="timeline">
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">7:30 AM</dt>
							<dd class="food">
								<p>Registration and hot breakfast</p>
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
					<li class="timeslot two-hours">
						<?php echo print_schedulerow(1, 2); ?>
					</li>
					<li class="timeslot two-hours">
						<?php echo print_schedulerow(1, 3); ?>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">5:30 PM</dt>
							<dd class="food">
								<p>Networking and unofficial after-party planning</p>
							</dd>
						</dl>
					</li>
				</ol>
			</div>
			<div class="schedule-day">
				<h3>Friday, 8 November 2019</h3>
				<ol class="timeline">
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">7:30 AM</dt>
							<dd class="food">
								<p>Hot breakfast</p>
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
		
		<!--
		<section class="schedule-breakdown">
			<h2>Schedule</h2>
			<div class="schedule-day">
				<ol class="timeline">
					<li class="timeslot category">
						<dl>
							<dt class="time"></dt>
							<dd class="ux">
								<h4>UX</h4>
								<p>Quinney Welcome Center Theater</p>
							</dd>
							<dd class="pm">
								<h4>PM</h4>
								<p>Quinney Welcome Center, Conference</p>
							</dd>
							<dd class="research">
								<h4>Research</h4>
								<p>Legacy Center, Lower</p>
							</dd>
							<dd class="leadership">
								<h4>Leadership</h4>
								<p>Legacy Center, Upper</p>
							</dd>
						</dl>
					</li>
				</ol>
			</div>
			<div class="schedule-day">
				<h3>Thursday, 4 January 2018</h3>
				<ol class="timeline">
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">7:30 AM</dt>
							<dd class="food">
								<p>Hot Breakfast and registration</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot four-hours">
						<dl>
							<dt class="time">8:30 AM</dt>
							<dd class="ux course" onclick="">
								<a href="/workshops/instructor/sarahdoody">
									<h4>Sarah Doody</h4>
									<p>Product storyboarding</p>
								</a>
							</dd>
							<dd class="pm course" onclick="">
								<a href="/workshops/instructor/virgiliapruthi">
									<h4>Virgilia Pruthi</h4>
									<p>Building and communicating roadmaps</p>
								</a>
							</dd>
							<dd class="research course" onclick="">
								<a href="/workshops/instructor/jayfichialos">
									<h4>Jay Fichialos</h4>
									<p>Product discovery</p>
								</a>
							</dd>
							<dd class="leadership course" onclick="">
								<a href="/workshops/instructor/richardbanfield">
									<h4>Richard Banfield</h4>
									<p>Best practices of high performing teams</p>
								</a>
							</dd>
						</dl>
					</li>
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">12:30 PM</dt>
							<dd class="food">
								<p>Hot Lunch</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot two-hours">
						<dl>
							<dt class="time">1:30 PM</dt>
							<dd class="ux course" onclick="">
								<a href="/workshops/instructor/jonathanshariat">
									<h4>Jonathan S.</h4>
									<p>Design ethics</p>
								</a>
							</dd>
							<dd class="pm course" onclick="">
								<a href="/workshops/instructor/johncutler">
									<h4>John Cutler</h4>
									<p>Alignment through mapping</p>
								</a>
							</dd>
							<dd class="research course" onclick="">
								<a href="/workshops/instructor/taylorpalmer">
									<h4>Taylor Palmer</h4>
									<p>Usability testing with prototypes</p>
								</a>
							</dd>
							<dd class="leadership course" onclick="">
								<a href="/workshops/instructor/bobbaxley">
									<h4>Bob Baxley</h4>
									<p>Design feedback</p>
								</a>
							</dd>
						</dl>
					</li>
					<li class="timeslot two-hours">
						<dl>
							<dt class="time">3:45 PM</dt>
							<dd class="ux course" onclick="">
								<a href="/workshops/instructor/jeffcarter">
									<h4>Jeff Carter</h4>
									<p>Micro interactions</p>
								</a>
							</dd>
							<dd class="pm course" onclick="">
								<a href="/workshops/instructor/kylejacobsen">
									<h4>Kyle & Josh</h4>
									<p>Metrics</p>
								</a>
							</dd>
							<dd class="research course" onclick="">
								<a href="/workshops/instructor/amandasmith">
									<h4>Amanda Smith</h4>
									<p>Growing a UX department</p>
								</a>
							</dd>
							<dd class="leadership course" onclick="">
								<a href="/workshops/instructor/danlawyer">
									<h4>Dan Lawyer</h4>
									<p>Finding & building executive presence</p>
								</a>
							</dd>
						</dl>
					</li>
				</ol>
			</div>
			<div class="schedule-day">
				<h3>Friday, 5 January 2018</h3>
				<ol class="timeline">
					<li class="timeslot one-hour">
						<dl>
							<dt class="time">7:30 AM</dt>
							<dd class="food">
								<p>Hot breakfast</p>
							</dd>
						</dl>
					</li>
					<li class="timeslot four-hours">
						<dl>
							<dt class="time">8:30 AM</dt>
							<dd class="ux course" onclick="">
								<a href="/workshops/instructor/laurengray">
									<h4>Lauren Gray</h4>
									<p>On-boarding</p>
								</a>
							</dd>
							<dd class="pm course" onclick="">
								<a href="/workshops/instructor/elainechao">
									<h4>Elaine Chao</h4>
									<p>Better listening, better products</p>
								</a>
							</dd>
							<dd class="research course" onclick="">
								<a href="/workshops/instructor/lorieich">
									<h4>Lori Eich</h4>
									<p>Early stage quant and qual validation</p>
								</a>
							</dd>
							<dd class="leadership course" onclick="">
								<a href="/workshops/instructor/mariahhay">
									<h4>Mariah Hay</h4>
									<p>Product leadership fundamentals</p>
								</a>
							</dd>
						</dl>
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
						<dl>
							<dt class="time">1:30 PM</dt>
							<dd class="ux course" onclick="">
								<a href="/workshops/instructor/chadheinrich">
									<h4>Chad Heinrich</h4>
									<p>Designing for growth, virality</p>
								</a>
							</dd>
							<dd class="pm course" onclick="">
								<a href="/workshops/instructor/natebarrett">
									<h4>Nate Barrett</h4>
									<p>Value proposition and vision</p>
								</a>
							</dd>
							<dd class="research course" onclick="">
								<a href="/workshops/instructor/andrewbranch">
									<h4>Andrew Branch</h4>
									<p>Lean user testing</p>
								</a>
							</dd>
							<dd class="leadership course" onclick="">
								<a href="/workshops/instructor/wadeshearer">
									<h4>Wade Shearer</h4>
									<p>Teaching your team to learn</p>
								</a>
							</dd>
						</dl>
					</li>
				</ol>
			</div>
		</section>
		-->
		
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>Reserve your seat now for the premier UX and Product Management training experience. Design your custom training program now. Whether you’re a beginner or seasoned professional, the Front UX & Product Management Workshop Series will take you and your team to the next level in product design and management.</p>
			<p><a href="/workshops/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require('../includes/footer.php');

?>