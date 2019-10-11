<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front UX & Product Management newsletter';

/*
$meta['twitter']['card'] = "Front is the product conference for UX designers and product managers. It's a practitioner’s conference. Attendees come for an education, real world, from-the-trenches case studies, and hands-on training from their peers. It's four days of learning and growth, providing answers to deep organizational questions and insights into how to validate and solve the right problems in the right way.";
$meta['twitter']['site'] = '@front';
$meta['twitter']['title'] = $title;
$meta['twitter']['image'] = 'https://www.frontutah.com/images/workshops2019/earlybird.jpg';

$meta['opengraph']['title'] = 'Front - The product conference for UX designers and product managers';
$meta['opengraph']['type'] = 'article';
$meta['opengraph']['url'] = 'http://www.frontutah.com';
$meta['opengraph']['image'] = 'https://www.frontutah.com/images/workshops2019/earlybird.jpg';
$meta['opengraph']['description'] = "Front is the product conference for UX designers and product managers. It's a practitioner’s conference. Attendees come for an education, real world, from-the-trenches case studies, and hands-on training from their peers. It's four days of learning and growth, providing answers to deep organizational questions and insights into how to validate and solve the right problems in the right way.";
$meta['opengraph']['site_name'] = 'Front Conference';
*/

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="newsletter">
		<section class="hero">
			
		</section>
		<section class="training-courses">
				<h2>Front news and announcements</h2>
				<p>Join our news and announcement email list for updates on upcoming events and early bird pricing. This is a fairly low volume list. We respect your attention and are very deliberate about the frequency and content of each message. This is the very best way to lean about scheduled speakers and instructors and receive reminders about deadlines.</p>
				      
			<div class="public-workshops-wrap">
				<!-- Begin Mailchimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					   #mc_embed_signup form {
						   text-align: center !important;
					   }
				</style>
				<div id="mc_embed_signup">
				<form action="https://frontutah.us2.list-manage.com/subscribe/post?u=5a9bade195be7c98130573919&amp;id=78b2b3728d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
					<label for="mce-EMAIL">Enter your email address to subscribe</label>
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
				    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5a9bade195be7c98130573919_78b2b3728d" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
				</form>
				</div>
				
				<!--End mc_embed_signup-->
			</div>
		</section>

	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>