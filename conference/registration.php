<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Registration - Front UX & Product Management Case Study Conference, Spring 2023';

$meta['twitter']['card'] = "Early bird passes are $500, that's 30% off if you purchase before April 1st. It gets even better if you bring your team. Tickets are only $450 each for groups of 10+, which is 35% off on the full price passes.";
$meta['twitter']['site'] = '@front';
$meta['twitter']['title'] = $title;
$meta['twitter']['image'] = 'https://www.frontutah.com/images/social/front_social_conference.jpg';

$meta['opengraph']['title'] = 'Front - The product conference for UX designers and product managers';
$meta['opengraph']['type'] = 'article';
$meta['opengraph']['url'] = 'http://www.frontutah.com/conference/';
$meta['opengraph']['image'] = 'https://www.frontutah.com/images/social/front_social_conference.jpg';
$meta['opengraph']['description'] = "Early bird passes are $500, that's 30% off if you purchase before April 1st. It gets even better if you bring your team. Tickets are only $450 each for groups of 10+, which is 35% off on the full price passes.";
$meta['opengraph']['site_name'] = 'Front Conference';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="secondary product-conference-registration">
		<section class="hero">
			<h1>Registration</h1>
		</section>

		<section class="notice" style="background: black; color: white">
  			<h2 style="color: #FD7C00">2022 conference cancelled</h2>
			<p style="margin-bottom: 30px">With the pandemic and current economy’s effect on the travel and conference industry, we have found ourselves in a situation where we are unable to hold a conference this Spring of the quality and scope we have promised. While we have found great speakers with exciting stories, we will have to bring them back another day. Please register for our <a href="/workshops">workshops in November</a> and subscribe to our email list below to get announcements about when Front UX & Product Management Case Study Conference will be back in 2023.</p>

			
			<!-- Begin Mailchimp Signup Form -->
			
			<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">

			<div id="mc_embed_signup">
			<form action="https://frontutah.us2.list-manage.com/subscribe/post?u=5a9bade195be7c98130573919&amp;id=e8d567ca7f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
			    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5a9bade195be7c98130573919_e8d567ca7f" tabindex="-1" value=""></div>
			    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			    </div>
			</form>
			</div>

			<!--End mc_embed_signup-->
		</section>
		
		<section class="registration-about">
			<h2>Registration</h2>
			<p class="about-registration-about">
			Front UX & Product Management Case Study Conference returns in 2022 to the spacious and stunning Eccles Theater in downtown Salt Lake City. You don’t want to miss this. Take advantage of early bird pricing and our great discounts to bring your entire team. This will be the biggest, most engaging, and comprehensive conference yet. Join us for incredible insights, inspiration, and fun.
	 	</section>
		



		<section class="pricing">
			<h2>Pricing</h2>
			
			
			<!-- Early bird -->
			
			<div class="prices">
				<dl class="pricing-types">
					<dt><div></div></dt>
					<dd class="early">
						Early bird pricing
						<small>30% off <!--through 4 March 2022--></small>
					</dd>
					<dd class="standard">
						Standard pricing
						<small>After early bird<!--Starting 5 March 2022--></small>
					</dd>
				</dl>
				<dl class="full">
					<dt><div>Full Conference</div></dt>
					<dd class="early">$500</dd>
					<dd class="standard">$700</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (5-9)
							<small>5% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$475</dd>
					<dd class="standard">$665</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (10+)
							<small>10% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$450</dd>
					<dd class="standard">$630</dd>
				</dl>
			</div>
			
			<!-- Standard -->
			<!--
			
			<div class="prices">
				<dl class="full">
					<dt><div>Full Conference</div></dt>
					<dd class="early">$700</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (5-9)
							<small>5% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$665</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (10+)
							<small>10% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$630</dd>
				</dl>
			</div>
			-->
			
			
			
			<!--
			<div id="eventbrite-widget-container-184315822587"></div>
			
			<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
			
			<script type="text/javascript">
			    var exampleCallback = function() {
			        console.log('Order complete!');
			    };
			
			    window.EBWidgets.createWidget({
			        // Required
			        widgetType: 'checkout',
			        eventId: '184315822587',
			        iframeContainerId: 'eventbrite-widget-container-184315822587',
			
			        // Optional
			        iframeContainerHeight: 1000,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
			        onOrderComplete: exampleCallback  // Method called when an order has successfully completed
			    });
			</script>
			-->
			
		</section>

		
		<a id="hotels"></a><section class="accomodations">
			<h2>Hotels</h2>

			<p class="about-accomodations"><em>We are working to secure a discounted rate at a preferred hotel.</em></p>
			<!--

			<p class="about-accomodations">We have acquired discounted nightly rate of $159/night + tax (20% off) for a single king at the Salt Lake City Marriott City Center. We encourage you to register early as these rates are only available for a limit number of rooms. Book your room through the button below or by calling their front desk and asking for the “Front Utah" group discount.</p> 
			
			<div class="hotel">
				<div class="hotel-info">
					<h3>Salt Lake City Marriott City Center</h3>
					<p>220 South State Street, Salt Lake City, Utah 84111 USA<p>
					<p>Reservations: 866.961.8700</p>
					<ul>
						<li>King or double queen beds</li>
						<li>Complimentary fitness center</li>
						<li>Complimentary high-speed internet</li>
						<li>Onsite and in-room dining services</li>
						<li>Heated outdoor pool</li>
						<li>Smoke-free facility</li>
						<li>6 minute walk from conference</li>
					</ul>
				</div>
				<div class="book-hotel">
					<p>Act quickly to get the conference discount rate of <strong>$159/night</strong> (30% off). Must be booked by 16 Mar 2022.</p>
					<p><a target="_blank" href="https://www.marriott.com/events/start.mi?id=1634675728834&key=GRP" class="button">Book now</a></p>
				</div>
			</div>
			

			-->
		</section>

		
		<section class="contact-us">
			<h2>Contact Us</h2>
			<ul>
				<li>
					<p>Registration questions:</p>
					<p><a href="mailto:registration@frontutah.com">registration@frontutah.com</a></p>
					<p><a href="tel:8013681971">801.368.1971</a></p>
				</li>
				<li>
					<p>Hotel booking questions:</p>
					<p><a href="mailto:registration@frontutah.com">registration@frontutah.com</a></p>
					<p><a href="tel:8013681971">801.368.1971</a></p>
				</li>
				<li>
					<p>Sponsorship inquiries:</p>
					<p><a href="mailto:wade@frontutah.com">wade@frontutah.com</a></p>
					<p><a href="tel:8013681971">801.368.1971</a></p>
				</li>
			</ul>
		</section>
	</main>

<?php

require('../includes/footer.php');

?>