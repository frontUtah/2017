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
					<!--<dd class="early">
						SUPER Early bird pricing
						<small>40% off through 16 Dev 2023</small>
					</dd>-->
					<dd class="standard">
						Early bird pricing
						<small>30% off through 24 Feb 2023</small>
					</dd>
					<dd class="standard">
						Standard pricing
						<small>After early bird Starting 24 Feb 2023</small>
					</dd>
				</dl>
				<dl class="full">
					<dt><div>Full Conference</div></dt>
					<!--<dd class="early">$400</dd>-->
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
					<!--<dd class="early">$380</dd>-->
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
					<!--<dd class="early">$360</dd>-->
					<dd class="early">$450</dd>
					<dd class="standard">$630</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Student discount
							<small>50% off per ticket</small>
						</div>
					</dt>
					<!--<dd class="early">$200</dd>-->
					<dd class="early">$250</dd>
					<dd class="standard">$350</dd>
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
			
			
			
			
			<div id="eventbrite-widget-container-429535621607"></div>

			<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>

			<script type="text/javascript">
			    var exampleCallback = function() {
			        console.log('Order complete!');
			    };

			    window.EBWidgets.createWidget({
			        // Required
			        widgetType: 'checkout',
			        eventId: '429535621607',
			        iframeContainerId: 'eventbrite-widget-container-429535621607',

			        // Optional
			        iframeContainerHeight: 1000,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
			        onOrderComplete: exampleCallback  // Method called when an order has successfully completed
			    });
			</script>
			
			
		</section>

		
		<a id="hotels"></a><section class="accomodations">
			<h2>Hotels</h2>

			<!--<p class="about-accomodations"><em>We are working to secure a discounted rate at a preferred hotel.</em></p>-->
			

			<p class="about-accomodations">We have acquired discounted nightly rate of $159/night + tax (30% off) for a single king at the Salt Lake City Marriott City Center. We encourage you to register early as these rates are only available for a limit number of rooms. Book your room through the button below or by calling their front desk and asking for the “Front Utah" group discount.</p> 
			
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
					<p>Act quickly to get the conference discount rate of <strong>$159/night</strong> (30% off). Must be booked by 16 Mar 2023.</p>
					<p><a target="_blank" href="https://www.marriott.com/events/start.mi?id=1634675728834&key=GRP" class="button">Book now</a></p>
				</div>
			</div>
			

			
		</section>

		
		<section class="contact-us">
			<h2>Contact Us</h2>
			<ul>
				<li>
					<p>Registration questions:</p>
					<p><a href="mailto:registration@frontutah.com">registration@frontutah.com</a></p>
					<p><a href="tel:8013681971">801.428.9354</a></p>
				</li>
				<li>
					<p>Hotel booking questions:</p>
					<p><a href="mailto:registration@frontutah.com">registration@frontutah.com</a></p>
					<p><a href="tel:8013681971">801.428.9354</a></p>
				</li>
				<li>
					<p>Sponsorship inquiries:</p>
					<p><a href="mailto:ben@frontutah.com">ben@frontutah.com</a></p>
					<p><a href="tel:8013681971">801.428.9354</a></p>
				</li>
			</ul>
		</section>
	</main>

<?php

require('../includes/footer.php');

?>