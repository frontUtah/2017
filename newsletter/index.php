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
				<h2>UX &amp; Product Management Newsletter</h2>
				<p>Join our email list and get ongoing recommendations for the best content on user experience, product management, and user research. We'll share where to find the most authentic real-world examples of how to solve current hard problems in our industry, down to earth realistic conversations with industry professionals of all levels of experience, as well as upcoming information about our events. </p>

				<p>Our goal is to help you focus on what’s most valuable out there today and keep you informed on upcoming Front training and conference events. To that effect, we have five sections in each edition: </p>
				<style type="text/css">
					ol.lined {
						max-width: 615px; 
						margin: auto;
						text-align: left;
					}
					ol.lined li {
						margin-left: 20px;
						font-size: .8em;
					}
					ol.lined li:before {
					  content: "—"; /* Insert content that looks like bullets */
					  margin-left: -20px;
					  padding-right: 8px;
					  color: #F37C20; /* Or a color you prefer */
					  font-weight: bold;
					}
				</style>

				<ol class="lined">
					<li>A spotlight that will feature a community article, individual, product, talk, or podcast</li>
					<li>Three articles on career development or your role building better products</li>
					<li>Upcoming workshops where you can practice process, design, or research methods</li>
					<li>User experience & product management job openings</li>
					<li>Updates to speaker announcements for the Front conference</li>
				</ol>
				      
			<div class="public-workshops-wrap">
				<!-- Begin Mailchimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
				<div id="mc_embed_signup">
				<form action="https://frontutah.us2.list-manage.com/subscribe/post?u=5a9bade195be7c98130573919&amp;id=e8d567ca7f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
					
				<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
				<div class="mc-field-group">
					<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
				</label>
					<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
				</div>
				<div class="mc-field-group">
					<label for="mce-FNAME">First Name </label>
					<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
				</div>
				<div class="mc-field-group">
					<label for="mce-LNAME">Last Name </label>
					<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
				</div>
				<p><a href="https://us2.campaign-archive.com/home/?u=5a9bade195be7c98130573919&id=e8d567ca7f" target="_blank" title="View previous campaigns">View previous campaigns.</a></p>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5a9bade195be7c98130573919_e8d567ca7f" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
				</form>
				</div>
				<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				<!--End mc_embed_signup-->
			</div>
		</section>

	

		
		
		<!--
		<section class="sponsors">
			<h2>Past sponsors</h2>
			<a href="http://www.pendo.io"><img id="premier" src="/images/sponsors/pendo.svg" /></a>
			<ul class="second_tier">
			  <li class="second_tier_sponsor"><a href="http://www.workfront.com"><img src="/images/sponsors/workfront.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="http://www.underbelly.is" target="_blank"><img src="/images/sponsors/underbelly.svg" /></a></li>
			  <li class="second_tier_sponsor"><a href="https://alphahq.com" target="_blank"><img src="/images/sponsors/alphahq.svg" /></a></li>
			</ul>
		</section>
		-->
			
		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>Reserve your seat now for the premier UX and Product Management training experience. Design your custom training program now. Whether you’re a beginner or seasoned professional, the Front UX & Product Management Workshops Series will take you and your team to the next level in product design and management.</p>
			<p><a href="/workshops/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>