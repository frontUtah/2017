<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front UX & Product Management Custom Onsite Training';

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
											<h4><a href="/onsite/training/' . $training['slug'] . '">' . $training['title'] . ' &nbsp;&nbsp; &xrarr;</a></h4>
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
		<p class="about-courses">With years of experience running public workshops, we're curating a catalog of the very best for your team. Pick from dozens of trainings that have helped hundreds of companies looking to tackle their product management, design, research, and leadership challenges.</p>
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
</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>