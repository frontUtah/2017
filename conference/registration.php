<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Registration - Front UX & Product Management Case Study Conference, 28-29 May 2020';

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
			<p class="about-registration-about">Front UX & Product Management Case Study Conference returns in 2019 to the spacious and stunning Eccles Theater in downtown Salt Lake City. You don’t want to miss this. Take advantage of early bird pricing and our great discounts to bring your entire team. This will be the biggest, most engaging, and comprehensive conference yet. Join us for incredible insights, inspiration, and fun.</p>
		</section>
		
		<section class="pricing">
			<h2>Pricing</h2>
			
			
			<!-- Early bird -->
			
			<div class="prices">
				<dl class="pricing-types">
					<dt><div></div></dt>
					<dd class="early">
						Early bird pricing
						<small>30% off through 27 March 2020</small>
					</dd>
					<dd class="standard">
						Standard pricing
						<small>Starting 28 March 2020</small>
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
			
			<div id="eventbrite-widget-container-64259032496"></div>

			<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
			
			<script type="text/javascript">
			    var exampleCallback = function() {
			        console.log('Order complete!');
			    };
			
			    window.EBWidgets.createWidget({
			        // Required
			        widgetType: 'checkout',
			        eventId: '64259032496',
			        iframeContainerId: 'eventbrite-widget-container-64259032496',
			
			        // Optional
			        iframeContainerHeight: 875,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
			        onOrderComplete: exampleCallback  // Method called when an order has successfully completed
			    });
			</script>
		</section>

		
		<a id="hotels"></a><section class="accomodations">
			<h2>Hotels</h2>
			<p><em>We are in the process of negotiating a group rate at a hotel next to the venue. Rates and registration details will be posted as soon as they become available.</em></p>
			<!--
			<p class="about-accomodations">We have acquired a discounted nightly rate of $130/night + tax for a single king bed or two queens, at the hotel below. We encourage you to register early as these rates are only available for a limit number of rooms until May 15th. Book your room by calling their front desk and asking for the “Front Conference” group discount. The hotel is within two blocks (8 minute walk) from the theater.</p> 
			
			<div class="hotel">
				<div class="hotel-info">
					<h3>Salt Lake City Marriott City Center</h3>
					<p>220 South State Street, Salt Lake City, Utah 84111 USA<p>
					<p>Reservations: 888.236.2427</p>
					<ul>
						<li>King or double queen beds</li>
						<li>Complimentary fitness center</li>
						<li>Complimentary high-speed internet</li>
						<li>Onsite and in-room dining services</li>
						<li>Heated outdoor pool</li>
						<li>Smoke-free facility</li>
						<li>5 minute walk from conference</li>
					</ul>
				</div>
				<div class="book-hotel">
					<p>Act quickly to get the conference discount rate of <strong>$199/night</strong> (13% off).</p>
					<p><a target="_blank" href="https://www.marriott.com/events/start.mi?id=1549586151032&key=GRP" class="button">Book Now</a></p>
				</div>
			</div>

			<div class="hotel">
				<div class="hotel-info">
					<h3>Salt Lake Plaza Hotel Temple Square</h3>
					<p>122 S Temple, Salt Lake City, UT 84101<p>
					<p>Front desk: (801) 521-0130</p>
					<ul>
						<li>King or double queen beds</li>
						<li>Lowest Rate Guaranteedr</li>
						<li>Complimentary WiFi</li>
						<li>Library Book Exchange</li>
						<li>Enclosed Parking</li>
						<li>Complimentary airport shuttle</li>
						<li>Outdoor seasonal pool</li>
						<li>Indoor jacuzzi®</li>
						<li>Exercise room</li>
						<li>Covered parking</li>
						<li>8 minute walk from conference</li>
					</ul>
				</div>
				<div class="book-hotel">
					<p>Act quickly to get the conference discount rate of <strong>$130/night</strong> (15% off). Deposit required to book.</p>
					<p><a target="_blank" href="#" class="button">Call Now</a></p>
				</div>
				
				-->
			</div>
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
					<p><a href="">Wade Shearer</a></p>
					<p><a href="mailto:wade@frontutah.com">wade@frontutah.com</a></p>
				</li>
			</ul>
		</section>
	</main>

<?php

require('../includes/footer.php');

?>