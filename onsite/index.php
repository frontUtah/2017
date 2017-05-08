<?php

$title = 'Front - The product conference for UX designers and product managers';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="custom-training">
		<section class="hero">
			<h1>Custom onsite training</h1>
			<p>Let us to bring Front to you. Tell us about your organization's needs and we'll build a custom training solution to meet them.</p>
		</section>
		<section class="custom-training-about">
			<h2>Learning to learn, in context</h2>
			<p>Artifacts from your attempts to ship product likely cover the walls of your war rooms. You’re keenly aware of the competitive threats your feeling from the market. Your team’s strengths and weaknesses are pretty clear. The window to deliver value is likely closing in. Imagine an intensive, multi-day onsite training, customized specifically for your team, to build out a high-functioning, customer-left product organization.</p>
		</section>
		<section class="training-courses">
			<h2>Design your perfect training program</h2>
			<p>Whether you’re starting from ground zero or looking to fortify a team of seasoned professionals, we’ll work together with you to build a custom training solution that specifically delivers on your desired outcome. By bringing the courses to your team, you are able to control the pace, reach, and context, delivering much deeper and lasting results.</p>
			<ul class="course-groups">
				<li class="course-group ux">
					<dl>
						<dt>UX</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Intermediate</dd>
						<dd class="basic">Basic</dd>
					</dl>
				</li>
				<li class="course-group pm">
					<dl>
						<dt>Product Management</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Intermediate</dd>
						<dd class="basic">Basic</dd>
					</dl>
				</li>
				<li class="course-group research">
					<dl>
						<dt>Research</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Intermediate</dd>
						<dd class="basic">Basic</dd>
					</dl>
				</li>
				<li class="course-group leadership">
					<dl>
						<dt>Leadership</dt>
						<dd class="advanced">Advanced</dd>
						<dd class="intermediate">Intermediate</dd>
						<dd class="basic">Basic</dd>
					</dl>
				</li>
			</ul>
		</section>
		<section class="request-form">
			<h2>Request Training</h2>
			<form action="">
				<div class="input">
					<label for="name">Name</label>
					<input type="text" id="name" name="name">
				</div>
				<div class="input">
					<label for="company">Company</label>
					<input type="text" id="company" name="company">
				</div>
				<div class="input">
					<label for="email">Email</label>
					<input type="text" id="email" name="email">
				</div>
				<button type="submit">Submit</button>
			</form>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>