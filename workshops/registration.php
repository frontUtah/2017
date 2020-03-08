<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Registration - Front UX & Product Management Workshop Series, 7-8 November 2019';

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
						<small>25% off through 11 September 2020</small>
					</dd>
					<dd class="standard">
						Standard pricing
						<small>Starting 12 September 2020</small>
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
							Group discount (6-7)
							<small>15% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$1,147</dd>
					<dd class="standard">$1,529</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (8+)
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
					<dd class="early">$1,199</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (3-5)
							<small>10% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$1,080</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (6-7)
							<small>15% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$1,020</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (8+)
							<small>20% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$960</dd>
				</dl>
			</div>
			
			-->
			
			<div id="eventbrite-widget-container-85934090177"></div>
			
			<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
			
			<script type="text/javascript">
			    var exampleCallback = function() {
			        console.log('Order complete!');
			    };
			
			    window.EBWidgets.createWidget({
			        // Required
			        widgetType: 'checkout',
			        eventId: '85934090177',
			        iframeContainerId: 'eventbrite-widget-container-85934090177',
			
			        // Optional
			        iframeContainerHeight: 1000,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
			        onOrderComplete: exampleCallback  // Method called when an order has successfully completed
			    });
			</script>

			
			
			<!-- SOLD OUT 
			
			<h5 class="soldout">SOLD OUT</h5>
			
			<p class="pricing-notes">We're sorry, but the workshops are sold out. We wish there were more seats. We encourage you to join us 
				for our <a href="/conference">case study conference</a> in May and <a href="/mailinglist">join our 
				mailing list</a> to be notified when tickets to next year's workshops go on sale.</p>
				
			-->
			
		</section>

		<section class="accomodations">
			<h2>Hotel</h2>			
			
			<p class="about-accomodations">We have acquired a discount of 
				15% off the nightly rate, conveniently onsite at the venue. 
				Book your room online or by calling 801.328.2000 and asking 
				for the “Front Workshop Series” conference discount.</p>
			<div class="hotel">
				<div class="hotel-info">
					
						
					
					<h3>Hilton Salt Lake City Center</h3>
					<p>255 South West Temple, Salt Lake City, Utah 84101<p>
					<p>Reservations: 801.328.2000</p>
					<ul>
						<li>Centrally located to downtown</li>
						<li>Surrounded by dining & shopping</li>
						<li>Fitness center</li>
						<li>Indoor pool and whirlpool</li>
						<li>Spencer's for Steaks and Chops</li>
						<li>Pet friendly with nearby dog park</li>
						<li>Avis Rental Cars in lobby</li>
						<li>Large suites and connecting rooms</li>
						<li>2 blocks from City Creek Mall</li>
						<li>2 blocks from Temple Square</li>
						<li>15-minute walk to hiking trails</li>
					</ul>
				</div>
				<div class="book-hotel">
					<p>Act quickly to get the conference discount rate of <strong>15% off</strong>. Availability is not guaranteed.</p>
					<p><a target="_blank" href="https://www3.hilton.com/en/hotels/utah/hilton-salt-lake-city-center-SLCCCHH/index.html" class="button">Book Now</a></p>
				</div>
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