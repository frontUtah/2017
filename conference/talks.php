<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Talks - Front UX & Product Management Case Study Conference, 28-29 May 2020';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>

<main class="secondary product-workshops-page">
	<section class="hero">
		<h1>2019 talks</h1>
	</section>
	<section class="courses notabs">
		<h2 class="">2019 talks</h2>
		
		<div class="course-calendar">
			<div class="course-date">
				<h3>Thursday, 6 June 2019</h3>
				<ul class="days-courses">

					<?php

					function print_courses($day) {
						$slots[1] = array('time' => '9:10', 'meridian' => 'AM');
						$slots[2] = array('time' => '9:45', 'meridian' => 'AM');
						$slots[3] = array('time' => '11:00', 'meridian' => 'AM');
						$slots[4] = array('time' => '11:35', 'meridian' => 'AM');
						$slots[5] = array('time' => '1:40', 'meridian' => 'PM');
						$slots[6] = array('time' => '2:15', 'meridian' => 'PM');
						$slots[7] = array('time' => '3:30', 'meridian' => 'PM');
						$slots[8] = array('time' => '4:05', 'meridian' => 'PM');

						foreach($slots as $slot => $slot_details) {
							$talk = get_talk($day, $slot);

							if(!empty($talk)) {
								echo '
									<li class="course">
										<dl>
											<dt class="time">' . $slot_details['time'] . ' <span class="am-pm">' . $slot_details['meridian'] . '</span></dt>
											<dd class="instructors">';
									
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

					echo print_courses(1);

					?>

				</ul>
			</div>
			<div class="course-date">
				<h3>Friday, 7 June 2019</h3>
				<ul class="days-courses">
					<?php echo print_courses(2); ?>
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