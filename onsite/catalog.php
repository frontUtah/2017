<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Catalog - Front UX & Product Management Onsite Training';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

// if no tab requested, redirect to the first
if(empty($uri_parts[2])) {
	$string = '<script type="text/javascript">';
    $string .= 'window.location = "http://' . $_SERVER['HTTP_HOST'] . '/onsite/catalog/ux' . '"';
    $string .= '</script>';
    echo $string;
	die;
} else {
	$subject = $uri_parts[2];
}

$tabs[] = array('link' => 'ux', 'text' => 'UX');
$tabs[] = array('link' => 'product-management', 'text' => 'Product Management');
$tabs[] = array('link' => 'leadership', 'text' => 'Leadership');

?>

<main class="secondary product-workshops-page onsite-trainings">
	<section class="hero">
		<h1>Catalog</h1>
	</section>
	<section class="courses <?php echo $subject; ?>">
		<h2 class="">Catalog</h2>
		<p class="about-courses">With years of experience running public workshops, 
			we're curating a catalog of the very best for your team. Pick from dozens 
			of trainings that have helped hundreds of companies looking to tackle their 
			product management, design, research, and leadership challenges.</p>

		<nav class="course-track-nav">
			<h4>Browse by subject</h4>
			<div class="track-options" onclick="">
				<ul>
					<!--Mobile Order: Actual Order. Desktop Order: Class Names. Bless you Flexbox-->

					<?php

					// build tabs

					$t = '';

					foreach($tabs as $key => $tab) {
						$ti = '';
						
						$ti .= '<li class="order-' . ($key + 1)  . '">';

						if($tab['link'] == $subject) {
							$ti .= '<span class="active">' . $tab['text'] . '</span>';
						} else {
							$ti .= '<a href="/onsite/catalog/' . $tab['link'] . '">' . $tab['text'] . '</a>';
						}

						$ti .= '</li>';
						$ti .= "\n";
					
						if($tab['link'] == $subject) {
							$t = $ti . $t;
						} else {
							$t .= $ti;
						}
					}
					
					echo $t;

					?>

				</ul>
			</div>
		</nav>

		<div class="course-calendar">
			<div class="course-date theme-<?php echo $subject; ?>">
				<h3><?php echo training_subject($subject); ?> training</h3>
				
				<?php
				
				$trainings = get_trainings($subject);
				
				echo '
									<ul class="days-courses">';
				
				if(count($trainings) > 0) {
					foreach($trainings as $slug => $their_trainings) {
						$consultant = get_consultant($slug);
						
						echo '
										<li class="course">
											<dl>
												<dd class="instructor ' . $subject . '">
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
														<p>' . $training['summary'] . '</p>';
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
				
				?>
			</div>
		</div>
	</section>
</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>