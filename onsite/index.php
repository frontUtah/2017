<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front - Custom onsite UX & Product Management training';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>


<?php
	
function print_trainings($category) {
	$trainings = get_trainings($category);
	
	echo '
						<ul class="days-courses">';
	
	if(count($trainings) > 0) {
		foreach($trainings as $slug => $their_trainings) {
			$consultant = get_consultant($slug);
			
			echo '
							<li class="course">
								<dl>
									<dd class="instructor ' . $category . '">
										<div class="instructor-photo">
											<a href="/onsite/consultant/' . $consultant['slug'] . '"><img src="/images/';
																	
									// ensure photo exists
									if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/images/' . $consultant['photo'])) {
										echo $consultant['photo'];
									} else {
										echo 'instructor_missing.png';
									}
									
									echo '" alt=""></a>
										</div>
										<div>
											<a href="/onsite/consultant/' . $consultant['slug'] . '">
												<h4>' . $consultant['first'] . ' ' . $consultant['last'] . '</h4>
												<p class="title">' . $consultant['title'] . '<br>' . $consultant['company'] . '</p>
												<a href="/onsite/consultant/' . $consultant['slug'] . '" class="button button-small">Learn More</a>
											</a>
										</div>
									</dd>
									<dd class="description">';
									
									foreach($their_trainings as $training) {
										echo '									
											<h4><a href="/onsite/training/' . $training['slug'] . '">' . $training['title'] . '</a></h4>
											<p><strong>Size:</strong> ' . $training['capacity'] . ' &nbsp;&nbsp;•&nbsp;&nbsp; <strong>Length:</strong> ' . $training['length'] . ' &nbsp;&nbsp;•&nbsp;&nbsp; <strong>Price:</strong> $' . $training['price'] . '</p>
											<p>' . $training['description'] . '</p>';
									}
									
									echo '
									</dd>
								</dl>
							</li>';
		}
	} else {
		echo '			
							<li class="course"><em>No trainings available at this time.</em></li>';
	}
	
	echo '</ul>';
}
	
?>

<main class="custom-training">
	<section class="hero">
		<h1>Onsite training</h1>
		<p>Let us to bring Front to you. Tell us about your organization's needs and we'll find a training solution to meet them.</p>
	</section>
	<section class="courses" style="padding-top: 70px;	">
		<p class="about-courses">With years of experience running public workshops we've found the ones that will help you the most. Pick from dozens of trainings that have helped hundreds of companies look at tackling their product management, design and research problems differently.</p>
		<div class="course-calendar">
			
			<div class="course-date theme-ux">
				<h3>UX training</h3>
					<?php print_trainings('ux'); ?>
			</div>
			
			<div class="course-date theme-pm">
				<h3>Product Management training</h3>
					<?php print_trainings('pm'); ?>
			</div>
			
			<div class="course-date theme-research">
				<h3>Research training</h3>
					<?php print_trainings('research'); ?>
			</div>
			
			<div class="course-date theme-leadership">
				<h3>Leadership training</h3>
					<?php print_trainings('leadership'); ?>
			</div>
		</div>
	</section>
	<!--
	<section class="request-form">
		<form action="/onsite/request#success" method="post">
			<div class="input">
				<label for="name">Name</label>
				<input type="text" id="name" name="name">
			</div>
			<div class="input">
				<label for="company">Company</label>
				<input type="text" id="company" name="company">
			</div>
			<div class="input">
				<label for="email">Email</label>
				<input type="text" id="email" name="email">
			</div>
			<button type="submit" name="submit">Submit</button>
		</form>
	</section>
	-->
</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>