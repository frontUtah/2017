<?php

$title = 'Front - The product conference for UX designers and product managers';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="custom-training">
		<section class="hero">
			<h1>Custom onsite training</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
		</section>
		<section class="custom-training-about">
			<h2>Lorem ipsum dolor sit amet, consectetur</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
		</section>
		<section class="training-courses">
			<h2>Design your perfect training program</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
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