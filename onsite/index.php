<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front - Custom onsite UX & Product Management training';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<style type="text/css">
	.course-onsite{
		display: flex; 
		flex-direction: row;
		text-align: left;
	}
	.course-onsite .course-onsite-description:first-child {
		width: 60%;
		margin-right: 75px; 
	}
	.course-onsite .button {
		font-size: 18px;
		padding: 10px 30px;
		margin-top: 40px;
	}
	.course-onsite-description {
		
	}
	.course-onsite-description h3 {
		text-align: center;
	}
	.course-onsite-description h4 {
		font-size: 25px;
		font-weight: bold;
		color: #FD7C00;
	}
	.course-onsite-info {
		padding: 40px;
	}
	.course-onsite-info span {
		padding-right: 30px;
	}
	.course-onsite-instructors {
		display: flex; 
		flex-direction: row;
		padding-left: 0px; 
	}
	.course-onsite-instructors img{
		width: 125px;
		margin-right: 24px;
	}
	.course-onsite-instructors .course-onsite-instructors-info {
		color: #FD7C00;
	}
	.course-onsite-instructors .course-onsite-instructors-info h5 {
		font-size: 20px;
		font-weight: bold;
		color: #FD7C00;
	}
	.course-onsite-instructors .course-onsite-instructors-info p {
		font-size: 14px;
		font-weight: lighter;
		margin: 10px 0px;
	}
</style>
	<main class="custom-training secondary product-workshops-page workshops-courses">
		<section class="hero">
			<h1>Custom onsite training</h1>
			<p>Let us to bring Front to you. Tell us about your organization's needs and we'll build a custom training solution to meet them.</p>
		</section>
		<section class="courses">

			<!-- UX -->
			<div class="course-calendar course-onsite">
				<div class="course-onsite-description">
					<h3>UX Courses</h3>
					<div class="course-onsite-info">
						<h4>Storyboarding in Product Development</h4>
						<p><span>Size: <strong>25</strong></span><span>Length: <strong>One Week</strong></span><span>Cost: <strong>$50,000</strong></span></p>
						<p>"Why do so many teams fail to launch products on time? Why do budgets quickly creep beyond initial projections? Why do so many products launch and then, customers fail to adopt the product or feature? 
						<p>It’s because too often, teams jump right into designing and building before they establish their product story –– the deep understanding of how the product fits into people’s lives.</p>
						<p>Teams often let the weeds of the product details distract them from considering the user as a person. Discussion about people is quickly overshadowed by pixels and code.</p> 
						<p>Storyboarding is a critical activity to product development because it forces us to develop a deeper understanding of the people we are designing for. It forces us to establish the context, characters, and a clear language which creates an anchor that can ground the team and keep the focus on people."</p>
						<p><a href="#" class="button">Learn More</a></p>
					</div>
				</div>
				<div class="course-onsite-description" style="width: 40%">
					<h3>UX Instructors</h3>
					<div class="course-onsite-info course-onsite-instructors">
						<div><img src="/images/frontworkshops18/speaker_sarahdoody.jpg"></div>
						<div class="course-onsite-instructors-info">
							<h5>Sarah Doody</h5>
							<p>UX Designer + Product Consultant<br>
							Founder, The UX Notebook</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Product Management -->
			<div class="course-calendar course-onsite">
				<div class="course-onsite-description">
					<h3>UX Courses</h3>
					<div class="course-onsite-info">
						<h4>Design Sprint</h4>
						<p><span>Size: <strong>25</strong></span><span>Length: <strong>One Week</strong></span><span>Cost: <strong>$50,000</strong></span></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						<p><a href="#" class="button">Learn More</a></p>
					</div>
				</div>
				<div class="course-onsite-description" style="width: 40%">
					<h3>UX Instructors</h3>
					<div class="course-onsite-info course-onsite-instructors">
						<div><img src="https://www.frontutah.com/images/frontworkshops18/speaker_joelbeukelman.jpg"></div>
						<div class="course-onsite-instructors-info">
							<h5>Joel Beukelman</h5>
							<p>Product Designer<br>
							Google</p>
						</div>
					</div>
				</div>
			</div>


		</section>

		<section class="request-form">
			<form action="/onsite/request#success" method="post">
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
				<button type="submit" name="submit">Submit</button>
			</form>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>