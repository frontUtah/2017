<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Registration - Front UX & Product Management Case Study Conference, 6-7 June 2019';

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
			
			<div class="prices">
				<dl class="pricing-types">
					<dt><div></div></dt>
					<dd class="early">
						Early bird pricing
						<small>30% off until 31 March 2019</small>
					</dd>
					<dd class="standard">
						Standard pricing
						<small>Starting 1 April 2019</small>
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
			
			<!-- <p><a target="_blank" href="https://frontconference2019.eventbrite.com" class="button">Register</a></p> -->
			
			<div id="eventbrite-widget-container-47175925463"></div>

			<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
			
			<script type="text/javascript">
			    var exampleCallback = function() {
			        console.log('Order complete!');
			    };
			
			    window.EBWidgets.createWidget({
			        // Required
			        widgetType: 'checkout',
			        eventId: '47175925463',
			        iframeContainerId: 'eventbrite-widget-container-47175925463',
			
			        // Optional
			        iframeContainerHeight: 1225,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
			        onOrderComplete: exampleCallback  // Method called when an order has successfully completed
			    });
			</script>
		</section>

		<!--
		<section class="accomodations">
			<h2>Hotel</h2>
			<p class="about-accomodations">We have acquired a discounted nightly rate of $179/night + tax for a single king bed or two queens, at Salt Lake City Marriott City Center. We encourage you to register early as these rates are only guaranteed until 9 May 2019. Book your room online or by calling 888.236.2427 and asking for the “Front” group discount. The hotel is a block and a half (5 minute walk) from the theater.</p>
			<div class="hotel">
				<div class="hotel-info">
					<h3>Salt Lake City Marriott City Center</h3>
					<p>220 South State Street, Salt Lake City, Utah 84111 USA<p>
					<p>Front desk: 801.961.8700</p>
					<p>Reservations: 855.537.5305</p>
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
					<p>Act quickly to get the conference discount rate of <strong>$179/night</strong> (20% off).</p>
					<p><a target="_blank" href="http://www.marriott.com/meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=FRONT%20Utah%5Eslccc%60frufrua%60179.00%60USD%60false%605%605/30/18%606/2/18%605/9/18&app=resvlink&stop_mobi=yes" class="button">Book Now</a></p>
				</div>
			</div>
		</section>
		-->

		
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