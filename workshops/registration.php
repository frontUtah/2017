<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Registration - Front UX & Product Management Workshop Series, 2-4 November 2022';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="secondary product-workshops-page workshops-registration">
		<section class="hero">
			<h1>Registration</h1>
		</section>
		<section class="registration-about">
			<h2>Registration</h2>
			<p class="about-registration-about">Seating is limited, but the value isn’t. Don’t 
				procrastinate. You don’t want to miss this. Front UX & Product Management 
				Workshop Series returns this November with more instructors, gourmet catered 
				food, and a beautiful venue, this time in the center of Salt Lake Valley. We’ve 
				discounted prices and are continuing our awesome group discounts so your entire 
				team can attend.</p>
		</section>
		
		<section class="pricing">
			<h2>Pricing</h2>
			
			<!-- EARLY BIRD -->

			<div class="prices">
				<dl class="pricing-types">
					<dt><div></div></dt>
					<dd class="early">
						Early bird pricing
						<small>25% off through 2 September 2022</small>
					</dd>
					<dd class="standard">
						Standard pricing
						<small>Starting 3 September 2022</small>
					</dd>
				</dl>
				<dl class="full">
					<dt><div>Full Workshop Series</div></dt>
					<dd class="early">$1,349</dd>
					<dd class="standard">$1,799</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (3-5)
							<small>10% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$1,214</dd>
					<dd class="standard">$1,619</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (6+)
							<small>20% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$1,079</dd>
					<dd class="standard">$1,439</dd>
				</dl>
			</div>
			
			<!-- STANDARD -->
			<!--
			<div class="prices">
				<dl class="full">
					<dt><div>Full Workshop Series</div></dt>
					<dd class="early">$1,799</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (3-5)
							<small>10% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$1,619</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (6+)
							<small>20% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$1,439</dd>
				</dl>
			</div>
			
			-->
			
			

			
			<div id="eventbrite-widget-container-188604369747"></div>
			
			<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
			
			<script type="text/javascript">
			    var exampleCallback = function() {
			        console.log('Order complete!');
			    };
			
			    window.EBWidgets.createWidget({
			        // Required
			        widgetType: 'checkout',
			        eventId: '188604369747',
			        iframeContainerId: 'eventbrite-widget-container-188604369747',
			
			        // Optional
			        iframeContainerHeight: 1000,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
			        onOrderComplete: exampleCallback  // Method called when an order has successfully completed
			    });
			</script>
			

			<!--
			
			<h5 class="soldout">SALES BEGIN SOON</h5>
			
			<p class="pricing-notes">The dates for the 2022 Workshop Series will be announced soon. We encourage you to join us 
				for our <a href="/conference">case study conference</a> in September and <a href="/mailinglist">join our 
				mailing list</a> to be notified when tickets to next year's workshops go on sale.</p>
				
			-->
			
			<!-- SOLD OUT 
			
			<h5 class="soldout">SOLD OUT</h5>
			
			<p class="pricing-notes">We're sorry, but the workshops are sold out. We wish there were more seats. We encourage you to join us 
				for our <a href="/conference">case study conference</a> in May and <a href="/mailinglist">join our 
				mailing list</a> to be notified when tickets to next year's workshops go on sale.</p>
				
			-->
			
		</section>


		<section class="accomodations">
			<h2>Hotel</h2>
			

			<!--
			<p class="about-accomodations"><em>We are working to secure a discounted rate at a preferred hotel.</em></p>
			-->

			<p class="about-accomodations">We have acquired discounted nightly rate of $145/night + tax (30% off)
				for a single king bed at the Salt Lake City Marriott University Park. We encourage you to register 
				early as these rates are only available for a limit number of rooms. Book your room 
				through the button below or by calling their front desk and asking for the “Front 
				Conference” group discount.</p>
				
			<div class="hotel">
				<div class="hotel-info">					
					
					<h3>Salt Lake City Marriott University Park</h3>
					<p>480 Wakara Way Salt Lake City, Utah 84108<p>
					<p>Reservations: 800.228.9290</p>
					<ul>
						<li>7 minutes from venue by car</li>
						<li>Free high-speed internet</li>
						<li>Fitness center</li>
						<li>Smoke-free hotel</li>
						<li>Complimentary on-site parking</li>
						<li>1 minute walk to hiking trails</li>
					</ul>
				</div>
				<div class="book-hotel">
					<p>Act quickly to get the conference discount rate of <strong>$145/night</strong> (30% off). Must be booked by 21 Oct 2022.</p>
					<p><a target="_blank" href="https://www.marriott.com/events/start.mi?id=1634653864656&key=GRP" class="button">Book now</a></p>
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
					<p><a href="">Ben Peck</a></p>
					<p><a href="mailto:ben@frontutah.com">ben@frontutah.com</a></p>
				</li>
			</ul>
		</section>
	</main>

<?php

require('../includes/footer.php');

?>