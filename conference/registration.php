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
			<p class="about-registration-about">Instead of two separate events this year, the annual Case Study Conference and Workshop Series have been conbined into a single, large, multi-format event. We have also be expanding the schedule to include round tables, a welcome reception, yoga, a group meditation session, a service project, networking dinners, and an after-party. You don’t want to miss this. Take advantage of early bird pricing and our great discounts to bring your entire team. This will be the biggest, most engaging, and comprehensive conference yet. Join us for incredible insights, inspiration, and fun.</p>
		</section>
		
		<section class="pricing">
			<h2>Full event tickets</h2>
			
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
					<dt><div>Case Study Conference & Workshop Series</div></dt>
					<dd class="early">$1,725</dd>
					<dd class="standard">$2,299</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (3-5)
							<small>10% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$1,589</dd>
					<dd class="standard">$2,119</dd>
				</dl>
				<dl>
					<dt>
						<div>
							Group discount (6+)
							<small>20% off per ticket</small>
						</div>
					</dt>
					<dd class="early">$1,450</dd>
					<dd class="standard">$1,939</dd>
				</dl>
			</div>
			
			
			<h2>Workshop-only tickets</h2>
			
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
					<dt><div>Workshop Series</div></dt>
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
					<dd class="early">$1,219</dd>
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
			
			
			
			
			<h2>Conference-only tickets</h2>
			
			
			<!-- Early bird -->
			
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
					<dt><div>Case Study Conference</div></dt>
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
			        iframeContainerHeight: 1000,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
			        onOrderComplete: exampleCallback  // Method called when an order has successfully completed
			    });
			</script>
		</section>

		
		<a id="hotels"></a><section class="accomodations">
			<h2>Hotels</h2>

			<p class="about-accomodations">For those only attending the conference, we have acquired discounted nightly rate of $159-$199/night + tax for a single king bed or two queens, at the hotels <strong>Salt Lake City Marriott City Center</strong> and <strong>Salt Lake Marriott Downtown at City Creek</strong>. We encourage you to register early as these rates are only available for a limit number of rooms. Book your room through the links below or by calling their front desk and asking for the “Front Conference” group discount. Both hotels are right around the corner from the theater.<br /><br />For attending the workshops, we have acquired a discount of 
				15% off the nightly rate at the <strong>Hilton Salt Lake City Center</strong>, conveniently onsite at the venue. 
				Book your room online or by calling 801.328.2000 and asking 
				for the “Front Utah” conference discount.</p>
						
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
						<li>7 minute walk from conference</li>
					</ul>
				</div>
				<div class="book-hotel">
					<p>Act quickly to get the conference discount rate of <strong>$159/night</strong> (30% off).</p>
					<p><a target="_blank" href="https://www.marriott.com/events/start.mi?id=1582752880198&key=GRP" class="button">Book now</a></p>
				</div>
			</div>
			
			<div class="hotel">
				<div class="hotel-info">
					<h3>Salt Lake Marriott Downtown at City Creek</h3>
					<p>75 South West Temple, Salt Lake City, Utah 84101<p>
					<p>Front desk: 801.531.0800</p>
					<ul>
						<li>King or double queen beds</li>
						<li>Fitness center</li>
						<li>Complimentary WiFi</li>
						<li>Onsite and in-room dining services</li>
						<li>Smoke-free facility</li>
						<li>Covered parking</li>
						<li>5 minute walk from conference</li>
					</ul>
				</div>
				<div class="book-hotel">
					<p>Act quickly to get the conference discount rate of <strong>$199/night</strong> (25% off).</p>
					<p><a target="_blank" href="https://book.passkey.com/go/UTAHROOMS20" class="button">Book now</a></p>
				</div>
			</div>
			
				
			
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