<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Talks - Front UX & Product Management Case Study Conference, 28-29 May 2020';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');



function print_talk($day, $slot) {
	$talk = get_talk($day, $slot);
	
	if(!empty($talk)) {
		echo '
			<dd class="instructor">';
					
				// ensure speaker is an array
				if(!is_array($talk['speaker'])) {
					$talk['speaker'] = array($talk['speaker']);
				}
			
				if(count($talk['speaker']) < 13) {
					foreach($talk['speaker'] as $position => $this_speaker) {
						// get speaker details
						$speaker = get_speaker($this_speaker);
							
						echo '<div class="instructor ' . $speaker['discipline'] . '">
								<div class="instructor-photo">
									<a href="/conference/speaker/' . $speaker['slug'] . '"><img src="/images/';
														
						// ensure photo exists
						if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/images/' . $speaker['photo'])) {
							echo $speaker['photo'];
						} else {
							echo 'instructor_missing.png';
						}
						
						echo '" alt="' . $speaker['first'] . ' ' . $speaker['last'] . '"></a>
										</div>
										<div>
											<a href="/conference/speaker/' . $speaker['slug'] . '">
												<h4>' . $speaker['first'] . ' ' . $speaker['last'] . '</h4>
												<p class="title">' . $speaker['title'] . '<br>' . $speaker['company'] . '</p>
											</a>
										</div>
									</div>';
					}
				}
							
				echo '
						</dd>
							<dd class="description">
								<h4>' . $talk['title'] . '</h4>
								<p>' . $talk['description'] . '</p>
							</dd>';
		} else {
			echo '
				<dd class="instructor"></dd>
				<dd class="description">
					<h4>TBD</h4>
				</dd>';
		}
}


?>

<main class="secondary product-workshops-page">
	<section class="hero">
		<h1>2019 talks and schedule</h1>
	</section>
	<section class="courses notabs">
		<h2 class="">2019 talks and schedule</h2>
		
		<div class="course-calendar">
			<div class="course-date">
				<h3>Thursday, 6 June 2019</h3>
				<ul class="days-courses">
					<li class="course">
						<dl>
							<dt class="time">7:30<span class="am-pm">AM</span></dt>
							<dd class="instructor"></dd>
							<dd class="description">
								<h4>Breakfast and registration</h4>
							</dd>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">9:10<span class="am-pm">AM</span></dt>
							<dd class="instructor"></dd>
							<dd class="description">
								<h4>Opening remarks</h4>
							</dd>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">9:10<span class="am-pm">AM</span></dt>
							<?php print_talk(1, 1); ?>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">9:45<span class="am-pm">AM</span></dt>
							<?php print_talk(1, 2); ?>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">10:20<span class="am-pm">AM</span></dt>
							<dd class="instructor"></dd>
							<dd class="description">
								<h4>Break (drinks and snacks)</h4>
							</dd>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">11:00<span class="am-pm">AM</span></dt>
							<?php print_talk(1, 3); ?>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">11:35<span class="am-pm">AM</span></dt>
							<?php print_talk(1, 4); ?>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">12:10<span class="am-pm">PM</span></dt>
							<dd class="instructor"></dd>
							<dd class="description">
								<h4>Lunch</h4>
							</dd>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">1:40<span class="am-pm">PM</span></dt>
							<?php print_talk(1, 5); ?>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">2:15<span class="am-pm">PM</span></dt>
							<?php print_talk(1, 6); ?>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">2:50<span class="am-pm">AM</span></dt>
							<dd class="instructor"></dd>
							<dd class="description">
								<h4>Break (drinks and snacks)</h4>
							</dd>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">3:30<span class="am-pm">PM</span></dt>
							<?php print_talk(1, 7); ?>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">4:05<span class="am-pm">PM</span></dt>
							<?php print_talk(1, 8); ?>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">4:40<span class="am-pm">AM</span></dt>
							<dd class="instructor"></dd>
							<dd class="description">
								<h4>Day 1 wrap-up</h4>
							</dd>
						</dl>
					</li>
				</ul>
			</div>
			<div class="course-date">
				<h3>Friday, 7 June 2019</h3>
				<ul class="days-courses">
					<li class="course">
						<dl>
							<dt class="time">7:30<span class="am-pm">AM</span></dt>
							<dd class="instructor"></dd>
							<dd class="description">
								<h4>Breakfast and registration</h4>
							</dd>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">9:10<span class="am-pm">AM</span></dt>
							<dd class="instructor"></dd>
							<dd class="description">
								<h4>Day 2 kick-off</h4>
							</dd>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">9:10<span class="am-pm">AM</span></dt>
							<?php print_talk(2, 1); ?>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">9:45<span class="am-pm">AM</span></dt>
							<?php print_talk(2, 2); ?>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">10:20<span class="am-pm">AM</span></dt>
							<dd class="instructor"></dd>
							<dd class="description">
								<h4>Break (drinks and snacks)</h4>
							</dd>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">11:00<span class="am-pm">AM</span></dt>
							<?php print_talk(2, 3); ?>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">11:35<span class="am-pm">AM</span></dt>
							<?php print_talk(2, 4); ?>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">12:10<span class="am-pm">PM</span></dt>
							<dd class="instructor"></dd>
							<dd class="description">
								<h4>Lunch</h4>
							</dd>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">1:40<span class="am-pm">PM</span></dt>
							<?php print_talk(2, 5); ?>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">2:15<span class="am-pm">PM</span></dt>
							<?php print_talk(2, 6); ?>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">2:50<span class="am-pm">AM</span></dt>
							<dd class="instructor"></dd>
							<dd class="description">
								<h4>Break (drinks and snacks)</h4>
							</dd>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">3:30<span class="am-pm">PM</span></dt>
							<?php print_talk(2, 7); ?>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">4:05<span class="am-pm">PM</span></dt>
							<?php print_talk(2, 8); ?>
						</dl>
					</li>
					
					<li class="course">
						<dl>
							<dt class="time">4:40<span class="am-pm">AM</span></dt>
							<dd class="instructor"></dd>
							<dd class="description">
								<h4>Closing remarks</h4>
							</dd>
						</dl>
					</li>
				</ul>
			</div>
		</div>
	</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>In it's 6th year, Front is a sell-out event, with  
				<strong>800 annual attendees from 8 countries and 34 states</strong> 
				across the US. Join us at the Front to share, learn, and be inspired 
				to create amazing products.</p>
			<p><a href="/conference/registration" class="button">Register</a></p>
		</section>
</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>