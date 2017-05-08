<?php

$title = 'Front - The product conference for UX designers and product managers';

require('../includes/header.php');
require('../data/instructors_pc18.php');
require('../data/courses_pc18.php');

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
					<li class="course">
						<dl>
							<dt class="time">8:30 <span class="am-pm">AM</span></dt>
							<dd class="instructor ux">
								<div class="instructor-photo">
									<img src="/images/wade-large.jpg" alt="">
								</div>
								<div>
									<h4>Amelie Lamont</h4>
									<p class="title">Manager of UX<br>InfusionSoft</p>
									<p class="experience"><span class="label">Intermed</span></p>
								</div>
							</dd>
							<dd class="description">
								<h4>Remote User Testing: How to Test Your Designs From The Comfort of Your Herman Miller Aeron Chair</h4>
								<p>User research is fun. Driving, flying, biking or ubering to get to the user research? Less fun (Not to mention a huge time waster).</p>
								<p>As a firm believer in work-from-homing and the potential productivity boostage it can bring, and possessing an anthropological zeal for exploring my own inner introvert, I would like to share with you the skills, techniques, and tools necessary to make remote user testing as successful as in-person testing. In this workshop you can expect to take actual prototypes (either your own or examples provided) and work to plan, build, and perform both live and self-moderated (on-demand), remote, user testing campaigns.</p>
							</dd>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">9:30 <span class="am-pm">AM</span></dt>
							<dd class="instructor ux">
								<div class="instructor-photo">
									<img src="/images/wade-large.jpg" alt="">
								</div>
								<div>
									<h4>Amelie Lamont</h4>
									<p class="title">Manager of UX<br>InfusionSoft</p>
									<p class="experience"><span class="label">Intermed</span></p>
								</div>
							</dd>
							<dd class="description">
								<h4>Remote User Testing: How to Test Your Designs From The Comfort of Your Herman Miller Aeron Chair</h4>
								<p>User research is fun. Driving, flying, biking or ubering to get to the user research? Less fun (Not to mention a huge time waster).</p>
								<p>As a firm believer in work-from-homing and the potential productivity boostage it can bring, and possessing an anthropological zeal for exploring my own inner introvert, I would like to share with you the skills, techniques, and tools necessary to make remote user testing as successful as in-person testing. In this workshop you can expect to take actual prototypes (either your own or examples provided) and work to plan, build, and perform both live and self-moderated (on-demand), remote, user testing campaigns.</p>
							</dd>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">10:30 <span class="am-pm">AM</span></dt>
							<dd class="instructor ux">
								<div class="instructor-photo">
									<img src="/images/wade-large.jpg" alt="">
								</div>
								<div>
									<h4>Amelie Lamont</h4>
									<p class="title">Manager of UX<br>InfusionSoft</p>
									<p class="experience"><span class="label">Intermed</span></p>
								</div>
							</dd>
							<dd class="description">
								<h4>Remote User Testing: How to Test Your Designs From The Comfort of Your Herman Miller Aeron Chair</h4>
								<p>User research is fun. Driving, flying, biking or ubering to get to the user research? Less fun (Not to mention a huge time waster).</p>
								<p>As a firm believer in work-from-homing and the potential productivity boostage it can bring, and possessing an anthropological zeal for exploring my own inner introvert, I would like to share with you the skills, techniques, and tools necessary to make remote user testing as successful as in-person testing. In this workshop you can expect to take actual prototypes (either your own or examples provided) and work to plan, build, and perform both live and self-moderated (on-demand), remote, user testing campaigns.</p>
							</dd>
						</dl>
					</li>
				</ul>
			</div>
			<div class="course-date">
				<h3>Wednesday, 5 January 2018</h3>
				<ul class="days-courses">
					<li class="course">
						<dl>
							<dt class="time">8:30 <span class="am-pm">AM</span></dt>
							<dd class="instructor ux">
								<div class="instructor-photo">
									<img src="/images/wade-large.jpg" alt="">
								</div>
								<div>
									<h4>Amelie Lamont</h4>
									<p class="title">Manager of UX<br>InfusionSoft</p>
									<p class="experience"><span class="label">Intermed</span></p>
								</div>
							</dd>
							<dd class="description">
								<h4>Remote User Testing: How to Test Your Designs From The Comfort of Your Herman Miller Aeron Chair</h4>
								<p>User research is fun. Driving, flying, biking or ubering to get to the user research? Less fun (Not to mention a huge time waster).</p>
								<p>As a firm believer in work-from-homing and the potential productivity boostage it can bring, and possessing an anthropological zeal for exploring my own inner introvert, I would like to share with you the skills, techniques, and tools necessary to make remote user testing as successful as in-person testing. In this workshop you can expect to take actual prototypes (either your own or examples provided) and work to plan, build, and perform both live and self-moderated (on-demand), remote, user testing campaigns.</p>
							</dd>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">9:30 <span class="am-pm">AM</span></dt>
							<dd class="instructor ux">
								<div class="instructor-photo">
									<img src="/images/wade-large.jpg" alt="">
								</div>
								<div>
									<h4>Amelie Lamont</h4>
									<p class="title">Manager of UX<br>InfusionSoft</p>
									<p class="experience"><span class="label">Intermed</span></p>
								</div>
							</dd>
							<dd class="description">
								<h4>Remote User Testing: How to Test Your Designs From The Comfort of Your Herman Miller Aeron Chair</h4>
								<p>User research is fun. Driving, flying, biking or ubering to get to the user research? Less fun (Not to mention a huge time waster).</p>
								<p>As a firm believer in work-from-homing and the potential productivity boostage it can bring, and possessing an anthropological zeal for exploring my own inner introvert, I would like to share with you the skills, techniques, and tools necessary to make remote user testing as successful as in-person testing. In this workshop you can expect to take actual prototypes (either your own or examples provided) and work to plan, build, and perform both live and self-moderated (on-demand), remote, user testing campaigns.</p>
							</dd>
						</dl>
					</li>
					<li class="course">
						<dl>
							<dt class="time">10:30 <span class="am-pm">AM</span></dt>
							<dd class="instructor ux">
								<div class="instructor-photo">
									<img src="/images/wade-large.jpg" alt="">
								</div>
								<div>
									<h4>Amelie Lamont</h4>
									<p class="title">Manager of UX<br>InfusionSoft</p>
									<p class="experience"><span class="label">Intermed</span></p>
								</div>
							</dd>
							<dd class="description">
								<h4>Remote User Testing: How to Test Your Designs From The Comfort of Your Herman Miller Aeron Chair</h4>
								<p>User research is fun. Driving, flying, biking or ubering to get to the user research? Less fun (Not to mention a huge time waster).</p>
								<p>As a firm believer in work-from-homing and the potential productivity boostage it can bring, and possessing an anthropological zeal for exploring my own inner introvert, I would like to share with you the skills, techniques, and tools necessary to make remote user testing as successful as in-person testing. In this workshop you can expect to take actual prototypes (either your own or examples provided) and work to plan, build, and perform both live and self-moderated (on-demand), remote, user testing campaigns.</p>
							</dd>
						</dl>
					</li>
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

require('../includes/footer.php');

?>