<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front UX & Product Management on-demand workshops';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="product-workshops-public">
		<section class="hero">
			<h1>UX &amp; Product Management on-demand workshops</h1>
		</section>
		<section class="training-courses">
				<h2>Workshops for improving what matters</h2>
				<p>The industry is evolving and maturing at a rapid pace. Best-practices 
					and new techniques seems to develop almost faster than we’re able to 
					bring new products to market. As product managers, designers, and 
					leaders, it’s critical that we’re continually learning and refining 
					our craft.</p>
				<p>Front is pleased to bring you recordings of our workshops, 
					taught by the industry’s forefront thought-leaders and instructors, 
					to help you grow or kick-start your career. Stream them on-demand for new insights and experiences at your 
					own pace and convenience. New courses, dates, and locations will be added regularly.</p>
		</section>
	
		<section class="public-workshops">
			<!-- h2>Available for pre-order</h2 -->
				

			
			<script src="https://gumroad.com/js/gumroad-embed.js"></script>
			
			<div id="workshop_recordings">
			
			<?php

			foreach($courses as $course) {
				if(isset($course['gumroad_product_id']) && !empty($course['gumroad_product_id'])) {
					echo '
						<div class="workshop_recording">
							<div class="gumroad-product-embed" data-gumroad-product-id="' . str_replace(' ', '-', $course['gumroad_product_id']) . '" data-gumroad-params="">
								<a href="https://gumroad.com/' . $course['gumroad_product_id'] . '">Loading...</a>
							</div>
						</div>';
				}
			}
				
			?>
			
		</section>
			
		<section class="photo-collage">
			<img src="/images/conf-collage-mobile.jpg" alt="" class="full mobile">
			<img src="/images/conf-collage-desktop.jpg" alt="" class="full desktop">
		</section>
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>Reserve your seat now for the premier UX and Product Management 
				training experience. Design your custom training program now. 
				Whether you’re a beginner or seasoned professional, the Front 
				UX & Product Management Workshops Series will take you and your 
				team to the next level in product design and management.</p>
			<p><a href="/workshops/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>