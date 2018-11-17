<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Front - Custom onsite UX & Product Management training';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>

<style type="text/css">
	.description h4:not(:first-child) {padding-top: 20px; border-top: 1px solid rgba(0,0,0,.09);}

	.button-small {
		font-size: 12px;
	    padding: 10px 20px;
	    letter-spacing: .18em;
	    margin-top: 18px;
	}
	.theme-pm {  }
	.theme-pm h3 { background-color: #006F9E !important; }
	.theme-pm h4 { color: #006F9E !important; }
	.theme-pm .title { color: #006F9E !important; }
	.theme-pm .button-small { background-color: #006F9E; }

	.theme-ux { background-color: #FD7C00; }

	.theme-research { background-color: #653789; }
	.theme-research h3 { background-color: #653789 !important; }
	.theme-research h4 { color: #653789 !important; }
	.theme-research .title { color: #653789 !important; }
	.theme-research .button-small { background-color: #653789; }

	.theme-leadership { background-color: #FFD01D; }
	.theme-leadership h3 { background-color: #FFD01D !important; }
	.theme-leadership h4 { color: #FFD01D !important; }
	.theme-leadership .title { color: #FFD01D !important; }
	.theme-leadership .button-small { background-color: #FFD01D; }
</style>
	<main class="custom-training">
		<section class="hero">
			<h1>Onsite training</h1>
			<p>Let us to bring Front to you. Tell us about your organization's needs and we'll find a training solution to meet them.</p>
		</section>
		<section class="courses" style="padding-top: 70px;	">
			<p class="about-courses">With years of experience running public workshops we've found the ones that will help you the most. Pick from dozens of trainings that have helped hundreds of companies look at tackling their product management, design and research problems differently.</p>
			<div class="course-calendar">
				<div class="course-date">
					<h3>UX Trainings</h3>
					<ul class="days-courses">					
						<li class="course">
							<dl>
								<dd class="instructor ux">
									<div class="instructor-photo">
										<a href="/workshops/instructor/joelbeukelman"><img src="/images/frontpc18/instructor_andrewbranch.jpg" alt=""></a>
									</div>
									<div>
										<a href="#">
											<h4>Andrew Branch</h4>
											<p class="title">Product Design Director<br>Rev.com</p>
											<a href="#" class="button button-small">Learn More</a>
											<!--<p class="experience"><span class="label">advanced</span></p>-->
										</a>
									</div>
								</dd>
								<dd class="description">
									<h4>Principles of UX/UI design</h4>
									<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
									<p>Price: $7,000.00</p>
								</dd>
							</dl>
						</li>
						<li class="course">
							<dl>
								<dd class="instructor ux">
									<div class="instructor-photo">
										<a href="/onsite/consultant.php"><img src="/images/frontworkshops18/speaker_benpeck.jpg" alt=""></a>
									</div>
									<div>
										<a href="/onsite/consultant.php">
											<h4>Ben Peck</h4>
											<p class="title">Cofounder<br>Front</p>
											<a href="/onsite/consultant.php" class="button button-small">Learn More</a>
											<!--<p class="experience"><span class="label">basics</span></p>-->
										</a>
									</div>
								</dd>
								<dd class="description">
									<h4>Design Critiques Done Right</h4>
									<p>Showing our work at all different levels is a core part of being a designer. Running a critique with your team that’s effective and helpful all around for everyone isn’t an easy task when it comes to pushing everyone to be better but also being respectful. Come learn ways that you can improve these processes and make these gatherings enjoyable and exciting again. </p>
									<p>Price: $7,000.00</p>
									<h4>Revolution vs Evolution</h4>
									<p>Balancing the needs of the users, business, team and yourself is certainly a challenge. As designers we’re naturally wired to defend and create for the needs of the user. Business…wants to stay in business, and Development…wants to build amazing forward thinking technology while not drowning in its own debt. Lets talk about how we can build amazing products without coming to a stalemate with every conversation. </p>
									<p>Price: $7,000.00</p>
								</dd>
							</dl>
						</li>
						<li class="course">
							<dl>
								<dd class="instructor ux">
									<div class="instructor-photo">
										<a href="#"><img src="/images/frontpc18/instructor_garthbraithwaite.jpg" alt=""></a>
									</div>
									<div>
										<a href="#">
											<h4>Garth Braithwaite</h4>
											<p class="title">Sr. Computer Scientist<br>Adobe</p>
											<a href="#" class="button button-small bg-pm">Learn More</a>
											<!--<p class="experience"><span class="label">advanced</span></p>-->
										</a>
									</div>
								</dd>
								<dd class="description">
									<h4>How to Establish and Maintain a Design System</h4>
									<p>As teams and products grow it can become complicated to maintain consistency across all properties, additionally, there is often a duplication of initial work for each product starting from scratch. By establishing and maintaining a company-wide design language and design system implementation, teams are better equipped to ensure consistency, reduce duplication of work, and improve overall design and code quality.</p>

									<p>In this workshop, you will get hands-on experience with initial ideation and planning of a design system, as well as designing initial tokens, components, assets, and usage guidelines. Along the way, we'll discuss common pitfalls and pain points associated with organizing a design system and establishing it throughout a company.</p>
									<p>Price: $7,000.00</p>
								</dd>
							</dl>
						</li>
						<li class="course">
							<dl>
								<dd class="instructor ux">
									<div class="instructor-photo">
										<a href="#"><img src="/images/frontworkshops18/speaker_sarahdoody.jpg" alt=""></a>
									</div>
									<div>
										<a href="#">
											<h4>Sarah Doody</h4>
											<p class="title">UX + PM Consultant<br>Founder, The UX notebook</p>
											<a href="#" class="button button-small">Learn More</a>
											<!--<p class="experience"><span class="label">intermediate</span></p>-->
										</a>
									</div>
								</dd>
								<dd class="description">
									<h4>Storyboarding in Product Development</h4>
									<p>Why do so many teams fail to launch products on time? Why do budgets quickly creep beyond initial projections? Why do so many products launch and then, customers fail to adopt the product or feature?</p> 

									<p>It’s because too often, teams jump right into designing and building before they establish their product story –– the deep understanding of how the product fits into people’s lives.</p> 

									<p>Teams often let the weeds of the product details distract them from considering the user as a person. Discussion about people is quickly overshadowed by pixels and code.</p> 

									<p>Storyboarding is a critical activity to product development because it forces us to develop a deeper understanding of the people we are designing for. It forces us to establish the context, characters, and a clear language which creates an anchor that can ground the team and keep the focus on people.</p>
									<p>Price: $7,000.00</p>
								</dd>
							</dl>
						</li>
					</ul>
				</div>
				<div class="course-date theme-pm">
					<h3>Product Mangement Trainings</h3>
					<ul class="days-courses">
						<li class="course">
							<dl>
								<dd class="instructor ux">
									<div class="instructor-photo">
										<a href="/workshops/instructor/benpeck"><img src="/images/frontworkshops18/speaker_benpeck.jpg" alt=""></a>
									</div>
									<div>
										<a href="#">
											<h4>Ben Peck</h4>
											<p class="title">Cofounder<br>Front</p>
											<a href="#" class="button button-small">Learn More</a>
											<!--<p class="experience"><span class="label">basics</span></p>-->
										</a>
									</div>
								</dd>
								<dd class="description">
									<h4>Revolution vs Evolution</h4>
									<p>Balancing the needs of the users, business, team and yourself is certainly a challenge. As designers we’re naturally wired to defend and create for the needs of the user. Business…wants to stay in business, and Development…wants to build amazing forward thinking technology while not drowning in its own debt. Lets talk about how we can build amazing products without coming to a stalemate with every conversation. </p>
									<p>Price: $7,000.00</p>
								</dd>
							</dl>
						</li>
						<li class="course">
							<dl>
								<dd class="instructor ux">
									<div class="instructor-photo">
										<a href="/workshops/instructor/krisparies"><img src="/images/frontworkshops18/speaker_vickythomas.jpg" alt=""></a>
									</div>
									<div>
										<a href="/workshops/instructor/krisparies">
											<h4>Vicky Thomas</h4>
											<p class="title">Dir of Product Manangement<br>Vivint Smart Home</p>
											<a href="#" class="button button-small">Learn More</a>
											<!--<p class="experience"><span class="label">advanced</span></p>-->
										</a>
									</div>
								</dd>
								<dd class="description">
									<h4>Teamwork Makes the Dream Work</h4>
									<p>World-class product teams are greater than the sum of their parts—but how does that happen? Sometimes you’re lucky, and if you put a cross-functional team into a small room, they spit out magic. More often, though, product teams struggle to work together effectively, spending more time bumping into each other than actually building product. PMs, UX designers, and executives all try to drive definition, engineering isn’t brought in early enough, and QA sees a story for the first time when they test it.</p>

									<p>In this workshop, Vicky will share methods and models of working together that have transformed her teams at Adobe, Lucid Software, and Vivint Smart Home. As a participant, you’ll get hands-on practice writing OKRs, crafting the perfect one-pager, navigating the project cycle from wireframes to defined JIRA tickets, breaking down dev work for estimation, and building roadmaps that work. You’ll leave the session with tools and templates that you can implement right away, and an understanding of how to build the single most important capability of any product team.</p>
									<p>Price: $7,000.00</p>
									<h4>Demistifying Jobs to Be Done</h4>
									<p>Jobs to Be Done sound great in theory, but are ripe with pitfalls when you actually go to apply them. It's really hard to craft jobs that are specific enough to be actionable, but high-level enough to describe the root of the problem you customer needs to solve. In this workshop, you'll learn techniques for modifying Clayton Christensen's popular JTBD framework so that they actually help you get closer to a real roadmap.</p>
									<p>Price: $7,000.00</p>
									<h4>Creating Product Vision from Scratch</h4>
									<p>So you need a product vision...now what? This workshop is all about creating product vision and strategy from the ground up. We'll talk about the different components of an effective product vision and strategy, and how to create them. You'll leave the workshop with a gameplan to create these things for your team in 2 weeks or less.</p>
									<p>Price: $9,750.00</p>
									<h4>Outcome-driven Roadmapping</h4>
									<p>What do OKRs, Roadmaps, and Resource Planning have in common? They're all necessary, but mostly hated, practices in modern product teams. In this workshop, we'll learn how to use these tools together to create compelling plans for your team that garner support and resources from executives without sacrificing your team's agile autonomy.</p>
									<p>Price: $7,000.00</p>
								</dd>
							</dl>
						</li>				
					</ul>
				</div>
				<div class="course-date theme-research">
					<h3>Research Trainings</h3>
					<ul class="days-courses">
						<li class="course">
							<dl>
								<dd class="instructor ux">
									<div class="instructor-photo">
										<a href="/workshops/instructor/joelbeukelman"><img src="/images/frontpc18/instructor_andrewbranch.jpg" alt=""></a>
									</div>
									<div>
										<a href="#">
											<h4>Andrew Branch</h4>
											<p class="title">Product Design Director<br>Rev.com</p>
											<a href="#" class="button button-small">Learn More</a>
											<!--<p class="experience"><span class="label">advanced</span></p>-->
										</a>
									</div>
								</dd>
								<dd class="description">
									<h4>Continuous User Research</h4>
									<p>Most product teams are doing user research, but they still aren't doing it often enough, when they do it it takes too long, and it is more expensive than it needs to be. This workshop will help change that. Andrew will help you learn how you can build tests and get results in hours intstead of days or weeks and how to build a continuous testing strategy at your organization.</p>
									<p>Price: $7,000.00</p>
								</dd>
							</dl>
						</li>
						<li class="course">
							<dl>
								<dd class="instructor ux">
									<div class="instructor-photo">
										<a href="/workshops/instructor/mattbryan"><img src="/images/frontworkshops18/speaker_sarahdoody.jpg" alt=""></a>
									</div>
									<div>
										<a href="#">
											<h4>Sarah Doody</h4>
											<p class="title">UX + PM Consultant<br>Founder, The UX notebook</p>
											<a href="#" class="button button-small">Learn More</a>
											<!--<p class="experience"><span class="label">intermediate</span></p>-->
										</a>
									</div>
								</dd>
								<dd class="description">
									<h4>Rapid User Research & Usability Testing</h4>
									<p>Finally get your team to see how easy it can be do to research so you can understand your users. In this workshop we'll practice user interviews and usability testing. You'll have a toolkit for doing research on your own.</p>

									<p>Many teams talk about doing research, but not enough teams actually do research. One main reason for this is lack of buy in from stakeholders and executives. Another reason is because research is perceived as being expense and time consuming. In this workshop, we’ll walk through the entire research process and understand how to get buy in and how to conduct smart, effective user research.</p> 

									<p>The workshop will consist of a brief overview of why research matters so that you can have more informed discussions with team mates and colleagues who don’t buy into research. Then, we’ll take a deep dive into the research process as well as practice doing research on each other based on a mock project that you’ll learn about in the workshop.</p>
									<p>Price: $7,000.00</p>
								</dd>
							</dl>
						</li>				
					</ul>
				</div>
				<div class="course-date theme-leadership">
					<h3>Leadership Trainings</h3>
					<ul class="days-courses">
						<li class="course">
							<dl>
								<dd class="instructor ux">
									<div class="instructor-photo">
										<a href="/workshops/instructor/krisparies"><img src="/images/frontconference18/speaker_natebarrett.jpg" alt=""></a>
									</div>
									<div>
										<a href="/workshops/instructor/krisparies">
											<h4>Nate Barrett</h4>
											<p class="title">VP of Product & Design<br>Canopy</p>
											<a href="#" class="button button-small">Learn More</a>
											<!--<p class="experience"><span class="label">advanced</span></p>-->
										</a>
									</div>
								</dd>
								<dd class="description">
									<h4>Motivating Product Teams Through a Culture of Aligned Autonomy</h4>
									<p>Product builders are driven by understanding and experiencing customer pain and building experiences to ease and remove that pain. We know our customers better than anyone in our organization. Unfortunately, many organizations have leadership that gets in the way with too much process and hierarchy. Learn how a culture of autonomy flips traditional organizational thinking on its head with a focus on product outcomes, servant leadership and bottom up thinking.</p>
									<p>Price: $7,000.00</p>
								</dd>
							</dl>
						</li>
						<li class="course">
							<dl>
								<dd class="instructor ux">
									<div class="instructor-photo">
										<a href="/workshops/instructor/krisparies"><img src="/images/frontworkshops18/speaker_gibsonbiddle.jpg" alt=""></a>
									</div>
									<div>
										<a href="/workshops/instructor/krisparies">
											<h4>Gibsen Biddle</h4>
											<p class="title">Product Consultant<br>Previously Chegg & Netflix</p>
											<a href="#" class="button button-small">Learn More</a>
											<!--<p class="experience"><span class="label">advanced</span></p>-->
										</a>
									</div>
								</dd>
								<dd class="description">
									<h4>Hacking Your Product Leader Career</h4>
									<p>In this workshop, Gib describes his hypothesis-driven approach to career advancement -- what he calls “career hacking.”  This workshop describes:</p>
									<ul>
										<li>the technical skills of a product leader</li>
										<li>the functional leadership skills required as you advance your career</li>
										<li>how to define, experiment, and measure “career hypotheses”</li>
										<li>how to  identify your “superpowers” as a product leader, then</li>
										<li>how to isolate the skills you’ll need to develop to advance your career. </li>
									</ul> 

									<p>Gib will also dive deep into a few areas of product management and leadership.  He’ll illustrate:</p>
									<ul>
										<li>how to use the GLEe, DHM and GEM models to form a cogent product strategy</li>
										<li>how to embrace consumer science to make “wicked hard” product decisions, and finally</li>
										<li>how to develop the leadership skills you’ll need to communicate an inspired vision of the future.</li>
									</ul>

									<p>Gib’s workshops are highly interactive with a great mix of presentation, mini-cases, and introspection, all of which work together to jumpstart your career.</p>
									<p>Price: $13,000.00</p>
									<h4>Product Strategy Workshop</h4>
									<p>This workshop focuses on helping product leaders and product-focused CEOs develop their company’s overall product strategy, and to define the product strategy for each “pod” or “swimming lane” within larger product organizations.</p>

									<p>The workshop has a highly interactive, step-by-step approach which introduces different tools, models, and frameworks, followed by the application of these ideas to each participant’s product. In the workshop, Gib Introduces four models:</p>
									<ul>
										<li>The GLEe model, describing what you will “Get big on,” how you will “Lead from there,” then eventually, “Expand to dent the universe.”</li>
										<li>The DHM model, defining your hypotheses, or product strategies, for how you will “Delight customers, in Hard-to-copy, Margin-enhancing ways.”</li>
										<li>A framework for defining metrics that measure both customer and shareholder value.</li>
										<li>The GEM model, clarifying how you will prioritize Growth, Engagement, and Monetization.</li>
									</ul>

									<p>At the end of the workshop, Gib will show how these models work together to define a four-quarter, rolling product roadmap that pulls together product strategies, metrics, and tactics. The workshop ends with highly interactive case studies, demonstrating how Gib utilized quarterly product strategy meetings at both Netflix and Chegg to put a strategy into action, or as he puts it, “make wicked hard decisions about people, product, and the business.”</p>
									<p>Price: $13,000.00</p>
								</dd>
							</dl>
						</li>
						<li class="course">
							<dl>
								<dd class="instructor ux">
									<div class="instructor-photo">
										<a href="/workshops/instructor/krisparies"><img src="/images/frontworkshops18/speaker_vickythomas.jpg" alt=""></a>
									</div>
									<div>
										<a href="/workshops/instructor/krisparies">
											<h4>Vicky Thomas</h4>
											<p class="title">Dir of Product Manangement<br>Vivint Smart Home</p>
											<a href="#" class="button button-small">Learn More</a>
											<!--<p class="experience"><span class="label">advanced</span></p>-->
										</a>
									</div>
								</dd>
								<dd class="description">
									<h4>Developing Executive Presence</h4>
									<p>Have you ever been told that you need to be more strategic", or that you need to work on your ""executive presence""? What does that even mean? These skills can be elusive for early-career PMs, but they're totally learnable. In this workshop, we'll break down what it takes to be good at these things, and even get some hands-on practice developing them.</p>

									<p>This workshop is perfect for high-potential junior PMs (or any early-career employee) who need a little bit of polish to prepare them for their next roles.</p>
									<p>Price: $7,000.00</p>
									<h4>Tactics for Creating High-performance Culture</h4>
									<p>Every team can be high-performing...some of them just need to be unlocked. In this workshop, you'll learn the most important elements of high-performing teams, and how to help your team get there. Vicky will share specific examples that have worked (and not worked) as she's created high-performing cultures at Adobe, Lucid Software, and Vivint Smart Home. Topics include psychological safety, diversity & inclusion, and being a multiplier.</p>
									<p>Price: $7,000.00</p>
									<h4>Outcome-driven Roadmapping</h4>
									<p>What do OKRs, Roadmaps, and Resource Planning have in common? They're all necessary, but mostly hated, practices in modern product teams. In this workshop, we'll learn how to use these tools together to create compelling plans for your team that garner support and resources from executives without sacrificing your team's agile autonomy.</p>
									<p>Price: $7,000.00</p>
								</dd>
							</dl>
						</li>				
					</ul>
				</div>
			</div>
		</section>
		<!--
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
		-->
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>