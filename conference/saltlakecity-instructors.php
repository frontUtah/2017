<?php

$name = 'Speaker';

switch($_GET['slide']) {
	case 0:
		$name = 'Michelle Barber';
		break;
	case 1:
		$name = 'Mike Davidson';
		break;
	case 2:
		$name = 'Mia Blume';
		break;
	case 3:
		$name = 'Digogenes Brito';
		break;
	case 4:
		$name = 'Daniel Burka';
		break;
	case 5:
		$name = 'Amelie Lamont';
		break;
	case 6:
		$name = 'Taylor Palmer';
		break;
	case 7:
		$name = 'Josh Penrod';
		break;
	case 8:
		$name = 'Ellen Chisa';
		break;
	case 9:
		$name = 'Joseph Draschil';
		break;
	case 10:
		$name = 'Mariah Hay';
		break;
	case 11:
		$name = 'Kendall Hulet';
		break;
	case 12:
		$name = 'Tom Krcha';
		break;
	case 13:
		$name = 'Catherine Shyu';
		break;
	case 14:
		$name = 'Zachary Silvertson';
		break;
	case 15:
		$name = 'Teresa Torres';
		break;
	case 16:
		$name = 'Christi Wruck';
		break;
	case 17:
		$name = 'Vicky Thomas';
		break;
	case 18:
		$name = 'Victor Yocco';
		break;
	default:
		$name = 'Speaker';
}

$title = $name . ' - Front Salt Lake City, 9-10 May 2017';

require 'header.php'; 

?>

<script>
	var currentStep = <?php 
	if (isset($_GET['slide'])) {
		echo $_GET['slide'];
	} else { echo 0;}; ?>;
	
</script>
		<main id="main" role="main">
			<div class="section-area slc_instructors">
				<div class="carousel">
					<div class="mask">
						<div class="slideset">
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/speaker-michelle-barber-new.jpg, /images/speaker-michelle-barber-new.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Michelle Barber</h1>
										<ul class="info-list">
											<li>Lead Designer</li>
											<li>FamilySearch</li>
										</ul>
										<ul class="social-network">
											
												<li><a href="https://www.linkedin.com/in/barberbelle/" class="icon-linkedin"></a></li>
												<li><a href="https://twitter.com/barberBelle" class="icon-twitter"></a></li>
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Michelle</h2>
												<p>CA designer and technologist at heart, Michelle found her way into User Experience Design about 10 years ago and loves the pairing of the two worlds. A wife and mother to four she knows the power of creating meaningful experiences in all that we do. In her spare time you can find her in the mountains, throwing parties or in the kitchen. </p>
											</div>
											<div class="col">
												<h2>Panel debate</h2>
												<p>Description coming soon.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/mike_davidson.jpg, /images/mike_davidson.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Mike Davidson</h1>
										<ul class="info-list">
											<li>VP of Design (formerly)</li>
											<li>Twitter</li>
										</ul>
										<ul class="social-network">
											
												
													<li><a href="https://www.linkedin.com/in/mikeindustries/" class="icon-linkedin"></a></li>
													<li><a href="https://twitter.com/mikeindustries" class="icon-twitter"></a></li>
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Mike</h2>
												<p>Mike most recently spent three years as Vice President of Design for Twitter. Prior to joining Twitter, Mike was Vice President at NBCNews.com, where he managed social news products and technologies. Earlier, he founded Newsvine, which was acquired by MSNBC, and spent several years as Art Director and Manager of Media Product Development for ESPN.com. Mike earned a B.A. in Business Administration from the University of Washington and studied Creative Advertising and Management at the University of Oxford.</p>
												<p>	Before the advent of web fonts, Mike invented and open-sourced sIFR, a technique which enabled thousands of individuals and organizations to use custom typography on the web.</p>
											</div>
											<div class="col">
													<h2>Who even cares about design and designers?</h2>
							                        <p>Of all the echo chambers in the world, the one labeled “Design” may be the most echo-y. And of the seven billion people on the planet, there are arguably very few who know what Design is, what a Designer does, or how things are made better because of them. Do Designers even know? Do they care? Does it matter? Really? </p>
							                        <p>Our panel of pundits will get into the nitty gritty of what Design is, who Designers are, and how (or IF) things can be made better by each.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
								<div class="slide">
									<div class="img-box">
										<div class="bg-stretch">
											<span data-srcset="/images/speaker-mia-blume.jpg, /images/speaker-mia-blume.jpg 2x"></span>
										</div>
									</div>
									<article class="content-block">

									<div class="container">
											<h1>Mia Blume</h1>
											<ul class="info-list">
												<li>Design Coach</li>
												<li>Design Leadership Coach</li>
											</ul>
											<ul class="social-network">

													<li><a href="https://www.linkedin.com/in/miablume/" class="icon-linkedin"></a></li>
													<li><a href="https://twitter.com/mialoira" class="icon-twitter"></a></li>

											</ul>
											<div class="two-columns">
												<div class="col">
													<h2>About Mia</h2>
													<p>Mia Blume is a design leadership coach and consultant. She advises companies on how to build useful, well-crafted products and shape healthy design organizations. Previously, Mia led teams at Pinterest, Square, and IDEO. She has designed at scale for both Fortune 500 companies and startups, developed international products, and built teams in rapid growth environments.</p>
												</div>
												<div class="col">
													<h2>Don’t Try to Design a Design Culture</h2>
												    <p>Design leaders often fail to truly change their company’s culture because they miss the challenge. You can’t directly design a design culture. In fact, you cannot design a culture at all.</p>
													<p>During a well-intentioned team revamp, a group of leaders gets into a room, creates a list of company values, and unveils them with posters on the wall. Then they wait. Or, they hires an executive from Apple because they want a culture like Apple’s, and then hope the new hire will make it so. But the culture rarely catches up to Apple or to the posters. Why? Because the leaders are only setting a vision for their culture. Vision is important, but it’s also the easy part. The hard part is changing the underlying organizational system so that desired behaviors emerge on their own. </p>
													<p>And that’s exactly what design leaders do have the power to shape: the system and the elements that constitute it. These include the physical environment, organizational structure (or lack of one), incentives, processes, tools, roles and relationships. When you focus on the parts of the system that you can actually design, you create the opportunity for a good culture to emerge. </p>
													<p>In this talk I’ll take a closer look how you can influence your culture in a lasting, sustainable way, including 7 tips I’ve found to be most effective for leaders growing a small startup team or improving an existing culture. </p>

													<h2>Who even cares about design and designers?</h2>
							                        <p>Of all the echo chambers in the world, the one labeled “Design” may be the most echo-y. And of the seven billion people on the planet, there are arguably very few who know what Design is, what a Designer does, or how things are made better because of them. Do Designers even know? Do they care? Does it matter? Really? </p>
							                        <p>Our panel of pundits will get into the nitty gritty of what Design is, who Designers are, and how (or IF) things can be made better by each.</p>
												</div>
											</div>
										</div>
									</article>
								</div>
							
								<div class="slide">
									<div class="img-box">
										<div class="bg-stretch">
											<span data-srcset="/images/speaker-diogenes-brito-large.jpg, /images/speaker-diogenes-brito-large.jpg 2x"></span>
										</div>
									</div>
									<article class="content-block">

									<div class="container">
											<h1>Diogenes Brito</h1>
											<ul class="info-list">
												<li>Product Designer</li>
												<li>Slack</li>
											</ul>
											<ul class="social-network">

													<li><a href="https://www.linkedin.com/in/diogenesbrito" class="icon-linkedin"></a></li>
													<li><a href="https://twitter.com/uxdiogenes" class="icon-twitter"></a></li>

											</ul>
											<div class="two-columns">
												<div class="col">
													<h2>About Diogenes</h2>
													<p>Diógenes is a digital product designer and engineer from New York, now based in San Francisco. He worked at Google, LinkedIn, and Squarespace before joining Slack in 2014. He was recently featured on Fast Company’s Most Creative People in Business list for 2016, and can be found dancing with San Francisco Bay Area salsa or hip hop dance teams in his off time.</p>
												</div>
												<div class="col">
													<h2>Design or Die Trying</h2>
													<p>Let's talk about shipping quality design work and communicating with your team when stakes are high, people have opinions, and you're not even sure you've found the best answers. We'll start with how designers can be most valuable to their team, and cover with how managing communication with your team can help you incorporate feedback into successful designs without loosing your voice.</p>
												</div>
											</div>
										</div>
									</article>
								</div>




								<div class="slide">
									<div class="img-box">
										<div class="bg-stretch">
											<span data-srcset="/images/speaker-daniel-burka.jpeg, /images/speaker-daniel-burka.jpeg 2x"></span>
										</div>
									</div>
									<article class="content-block">

									<div class="container">
											<h1>Daniel Burka</h1>
											<ul class="info-list">
												<li>Design Partner</li>
												<li>Google Ventures</li>
											</ul>
											<ul class="social-network">

													<li><a href="https://www.linkedin.com/in/dburka" class="icon-linkedin"></a></li>
													<li><a href="https://twitter.com/dburka" class="icon-twitter"></a></li>

											</ul>
											<div class="two-columns">
												<div class="col">
													<h2>About Daniel</h2>
													<p>Daniel is a design partner at GV, Google’s venture capital group. He works with the venture funds’ many portfolio companies to solve their design challenges. Daniel has had a varied career that included co-founding an agency (silverorange), design directing at startups (Digg and TinySpeck), and founding two startups (Pownce and Milk). When Milk was acquired by Google, Daniel ran a mobile-focused design team there before moving to GV where he gets to work on everything from robots to apps to wearable therapeutics.</p>
												</div>
												<div class="col">
													<h2>The moment of truth for design leadership</h2>
													<p>Design has been clamoring for a seat at the table for ages. And, all of the sudden it’s happening. Designers at startups and big companies alike are increasingly being brought into leadership discussions. In my job at GV, I see designers across a broad range of companies and I’m very worried that many designers are squandering their leadership opportunity. Let’s talk about how design is perceived by leaders and where design can truly help shape more beautiful companies.</p>

													<h2>Who even cares about design and designers?</h2>
							                        <p>Of all the echo chambers in the world, the one labeled “Design” may be the most echo-y. And of the seven billion people on the planet, there are arguably very few who know what Design is, what a Designer does, or how things are made better because of them. Do Designers even know? Do they care? Does it matter? Really? </p>
							                        <p>Our panel of pundits will get into the nitty gritty of what Design is, who Designers are, and how (or IF) things can be made better by each.</p>
												</div>
											</div>
										</div>
									</article>
								</div>
                                
                                
                                <div class="slide">
									<div class="img-box">
										<div class="bg-stretch">
											<span data-srcset="/images/speaker-amelie-lamont.jpg, /images/speaker-amelie-lamont.jpg 2x"></span>
										</div>
									</div>
									<article class="content-block">

									<div class="container">
											<h1>Amélie Lamont</h1>
											<ul class="info-list">
												<li>Product Designer</li>
												<li>The New York Times</li>
											</ul>
											<ul class="social-network">

													<li><a href="https://www.linkedin.com/in/alamont/" class="icon-linkedin"></a></li>
													<li><a href="https://twitter.com/amelielamont" class="icon-twitter"></a></li>

											</ul>
											<div class="two-columns">
												<div class="col">
													<h2>About Amelie</h2>
													<p>Amélie Lamont is a product designer(d) and writer based in Brooklyn, NY. She is currently employed at The New York Times as a product design lead, where she uses her background in cultural studies and design anthropology to build the Customer Product Design System.</p>
												</div>
												<div class="col">
													<h2>Who even cares about design and designers?</h2>
							                        <p>Of all the echo chambers in the world, the one labeled “Design” may be the most echo-y. And of the seven billion people on the planet, there are arguably very few who know what Design is, what a Designer does, or how things are made better because of them. Do Designers even know? Do they care? Does it matter? Really? </p>
							                        <p>Our panel of pundits will get into the nitty gritty of what Design is, who Designers are, and how (or IF) things can be made better by each.</p>
												</div>
											</div>
										</div>
									</article>
								</div>
								
								
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/taylor.jpg, /images/taylor.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Taylor Palmer</h1>
										<ul class="info-list">
											<li>Designer</li>
											<li>Lucid</li>
										</ul>
										<ul class="social-network">
											
												<li><a href="https://www.linkedin.com/in/taylor-palmer-6264a171" class="icon-linkedin"></a></li>
												<li><a href="https://twitter.com/_taylorpalmer" class="icon-twitter"></a></li>
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Taylor</h2>
												<p>Taylor is a UX designer for Lucid Software by day and self-taught coder by night. When he has time, he curates uxtools.co and attempts to write interesting blogs. He's an Oreo purist (please, no double-stuff), he listens to weird music, and he recently became a dad.</p>
											</div>
											<div class="col">
												<h2>Prototyping and the Realism Threshold</h2>
												<p>The design tools market has exploded in the past few years, and designers are often left scratching their heads and wondering which tools best fit their needs. In this talk, I propose that design tools should be chosen based on outcomes instead of features, and outline methods to create convincing prototypes for user testing purposes. I look to other industries to better understand the foundations behind prototyping and soliciting real feedback. I discuss three different kinds of prototypes and how the the Product Design team at Lucid Software crafts compelling experiences.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/josh.jpg, /images/josh.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Josh Penrod</h1>
										<ul class="info-list">
											<li>VP, UX</li>
											<li>Ancestry.com</li>
										</ul>
										<ul class="social-network">
											
												<li><a href="https://www.linkedin.com/in/penrod" class="icon-linkedin"></a></li>
												<li><a href="https://twitter.com/amishrobot" class="icon-twitter"></a></li>
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Josh</h2>
												<p>Josh Penrod is Vice President of User Experience at Ancestry.com, the global leader in family history and consumer genomics with over 20 billion historical records and 3 million people in its AncestryDNA network. He leads a team of designers, researchers, writers, and prototypers creating an experience that has enabled millions of people to find out more about who they are and where they come from. He co-created the famous Ancestry “shaky leaf” hints system and helped Ancestry grow their collection of family trees to 80 million trees and 8 billion connections. Josh is also co-holder of the patent, "SYSTEM AND METHOD FOR CREATING A FAMILY TREE DATA STRUCTURE,” a tree building system that accesses relationship data from social networking sites and in some embodiments, other data sites (so don’t try to encroach on my embodiments). While earning a degree in psychology, Josh played volleyball for Brigham Young University and was introduced to his hobby of collecting orthopedic surgeries. He was going to get a Ph.D., but got distracted by the Internet. Instead, he personally conducted thousands of hours of customer research and lead UX at FamilyLink, Russell Investments, and SportsHabitat.</p>
											</div>
											<div class="col">
												<h2>UX+PM=BFFs</h2>
												<p>Do you feel like your UX or Product partner is an ally or an obstacle? While both groups have similar goals and objectives, misunderstandings of over roles, responsibilities, and process can get in the way of effective collaboration. Drawing on a decade of experience working together, Josh Penrod, VP of User Experience at Ancestry, and Kendall Hulet, SVP of Product at Ancestry, will share war stories about their time together building successful, collaborative relationships between Product and UX while learning great (and not so great) ways to build, revamp, and kill products.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
							<!--
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/speaker-geoff-teehan.jpg, /images/speaker-geoff-teehan.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Geoff Teehan</h1>
										<ul class="info-list">
											<li>Product Design Director</li>
											<li>Facebook</li>
										</ul>
										<ul class="social-network">
											
												<li><a href="https://www.linkedin.com/in/geoffteehan/" class="icon-linkedin"></a></li>
												<li><a href="https://twitter.com/gt" class="icon-twitter"></a></li>
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Geoff Teehan</h2>
												<p>Geoff began his career in digital media in 1996, working as a designer for an Internet startup. He moved on to run his own design firm, building some of the first Flash sites on the web. He then joined Modem Media in 1999, where he worked as Associate Creative Director. During his tenure there he created effective and award-winning work for a variety of US and Canadian clients. </p>

<p>Geoff founded Teehan+Lax with his business Partner Jon Lax in 2002. He has been designing digital products there ever since. He and his company have been featured in countless publications and is often referred to as one of the premier product design firms in the world. In 2014, Teehan+Lax was named the Net Awards Agency of the Year.</p>

<p>Geoff currently leads a cross-functional team consisting of designers, engineers and planners that has help shape products for Google, Medium, Yahoo, Prismatic, Flipboard, YouTube, Kifi, Virgin, Shipwire, Nuvango, Weather Network, LG, Globe and Mail, Blackberry, Readability and more. </p>

<p>Throughout his career, he has received international acclaim for his work, winning Cannes Lions, ADDY awards, and CMA RSVP awards. He has also received top honours from W3, The WebAwards, MITX, Flash in the Can, Marketing Magazine, and the Advertising & Design Club of Canada. </p>

<p>Geoff has received the honour of representing Canada as a Jury member for many top tier award shows like Cannes Lions, Clio, One Show, D&AD and the London International Awards. </p>

<p>He speaks regularly at conferences, most recently he gave keynotes at HOW, Forge and Valiocon.</p>
											</div>
											<div class="col">
												<h2>Panel Debate</h2>
												<p>Description coming soon.</p>
											</div>
										</div>
									</div>
								</article>
							
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/talin.jpg, /images/talin.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1></h1>
										<ul class="info-list">
											<li>UX Lead</li>
											<li>Adobe</li>
										</ul>
										<ul class="social-network">
											
												<li><a href="https://www.linkedin.com/in/talinwadsworth" class="icon-linkedin"></a></li>
												<li><a href="https://twitter.com/MrTalin" class="icon-twitter"></a></li>
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Talin</h2>
												<p>Talin Wadsworth is the lead product designer for Adobe’s Project Comet, a new design tool for UX/UI and mobile app design. As part of XD, Adobe’s internal design team, Talin has led many 1.0 product initiatives, including the launch of Creative Cloud and Adobe Sketch for the iPad. He is obsessed with design, RISOgraph printing, and the monthly trading card series he produces for his team. </p>
											</div>
											<div class="col">
												<h2>Product vs. Design</h2>
												<p>If you want to lead and build great products, should you be a UX designer? Or a product manager? Does it matter? Join Tom Krcha and Talin Wadsworth from the Adobe XD team as they share case studies and real world experience of getting #$&! done at Adobe. Learn about defining a vision, testing prototypes, building teams, and shipping products that help define the future of digital experiences.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
						</div>-->
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/ellen.jpg, /images/ellen.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Ellen Chisa</h1>
										<ul class="info-list">
											<li>VP, Product</li>
											<li>Lola Travel</li>
										</ul>
										<ul class="social-network">
											
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Chisa</h2>
												<p>Ellen Chisa is the VP of Product of Lola, an app that provides personal hotel recommendations and service for all things related to travel. Chisa joined Lola in May 2015, after several years as a product manager for Kickstarter and Microsoft.  Chisa is passionate about good Product Management education. She has instructed in Product Management and Design at Olin College, General Assembly, and Startup Institute. She also developed an independent framework for how to think about getting better in Product. Chisa is a graduate of the Franklin W. Olin College of Engineering with a B.S. in Electrical & Computer Engineering, and is currently on sabbatical from Harvard Business School, after completing her first year.  She currently resides in Boston, Massachusetts.</p>
											</div>
											<div class="col">
												<h2>Balance: Prioritizing your roadmap across product stages</h2>
												<p>Every Product Manager is faced with a never ending list of inputs - team member suggestions, executive emails, countless dashboards, and everything coming out of user research. Deciding what goes first on the roadmap feels more like art than science. This is a framework developed to figure out which types of projects make the most sense at each point in time. Ellen illustrates each type of project (art, users, metrics, and team) with one or more specific case studies from her work at Lola, Kickstarter, and Microsoft. This talk can help you re-evaluate how you prioritize your own roadmap, or provide a basis for training new PMs that are joining your team.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
                            
                            
                            <div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/speaker-joseph-draschil.jpg, /images/speaker-joseph-draschil.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Joseph Draschil</h1>
										<ul class="info-list">
											<li>VP, Product and UX</li>
											<li>DirectScale</li>
										</ul>
										<ul class="social-network">
											
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Joseph</h2>
												<p>Joseph is passionate about creating transformational experiences for customers and users. “There is nothing more rewarding than finding and validating urgent, pervasive user problems and then leading cross-functional teams of product managers, designers, and developers in discovering and delivering innovative product solutions that result in customer elation and business impact,” he says. He is a proponent of Lean Startup, Customer Development, Design Thinking, and Agile Software Development in a continuous discovery and delivery product development process. His specialties include entrepreneurship, innovation, new product development, setting product vision & strategy, developing employees, building a high-performing creative culture and cross-departmental execution. He currently serves as Vice President of Product and User Experience at DirectScale and is a an organizer of Product Hive, a non-profit community of 2,500 designers and product managers in Utah.</p>
											</div>
											<div class="col">
												<h2>Panel Debate</h2>
												<p>Description coming soon.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
							
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/mariah.jpg, /images/mariah.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Mariah Hay</h1>
										<ul class="info-list">
											<li>VP of UX</li>
											<li>Pluralsight</li>
										</ul>
										<ul class="social-network">
											
												<li><a href="https://www.linkedin.com/in/mariahhay" class="icon-linkedin"></a></li>
												<li><a href="https://twitter.com/mariahhay?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="icon-twitter"></a></li>
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Mariah</h2>
												<p>Mariah Hay is the VP of User Experience for Pluralsight, an online subscription based education provider for the technology community. As a thought leader in human-centered design and user experience strategy, Mariah enjoys working with teams whose goal is to craft excellence for the end user. Her experience with industrial and interaction design teams serving high-level stakeholders reflects her personal goals of directing business through design excellence from the ground up. Her expertise in implementing human-centered design product practices at the enterprise level stems from over a decade of tenure in the industry including serving as Professor of Design Management at Savannah College of Art and Design, Directing UX for Universal Mind, and serving as Director of User Experience AMC Health. Mariah holds an MFA in Industrial Design from Savannah College of Art and Design.</p>
											</div>
											<div class="col">
												<h2>The PM Misconception: Why Everyone and No One is Prepared to Manage Product</h2>
												<p>It’s an exciting time to be in tech, but the pathway to a Product Management position remains shrouded in a fog of mystery. Job descriptions are unclear, roles vary from company to company, and there are few educational programs available to shed some light on what set of skills are needed. So what is someone looking to make a transition to a job like this to do? Today Mariah will tackle pinning down what knowledge is needed for a role that is “ambiguous by nature,” and talk about why many people and companies lack understanding of the true scope of the role. Using case studies, Mariah will illustrate the true value a PM brings to both would-be practitioners and team leaders who are interested in learning more about the skills and knowledge needed to be a successful Product Manager. </p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/speaker-kendall-hulet.jpg, /images/speaker-kendall-hulet.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Kendall Hulet</h1>
										<ul class="info-list">
											<li>VP, Product</li>
											<li>Ancestry.com</li>
										</ul>
										<ul class="social-network">
											
											
												<li><a href="https://www.linkedin.com/in/kendallhulet?authType=name&authToken=7sGf&trk=prof-sb-browse_map-name" class="icon-linkedin"></a></li>
												<li><a href="https://twitter.com/khulet" class="icon-twitter"></a></li>
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Kendall</h2>
												<p>Kendall Hulet is the Senior Vice President of Product Management at Ancestry. He joined Ancestry in 2003 and has held progressively senior roles in product development and management.  During his tenure, he was deeply involved in some of the most popular innovations at Ancestry, including the “Shaky Leaf” hinting system that has delivered over five billion discoveries; the Ancestry Family Tree system that has led to the creation of over 70 million family trees containing six billion profiles; the creation of the award winning Ancestry mobile app and the product development of AncestryDNA, which is now the largest consumer genomics database in the world with over three million customers  based on 5 years of 100%+ year-over-year growth.  During Kendall’s tenure, Ancestry has grown from 250K paying subscribers to over 2.4 million, which culminated in Ancestry’s recent purchase at a valuation of $2.6 billion.  Prior to joining Ancestry, Kendall worked in product marketing at Monster.com.  He holds an M.B.A. from The Wharton School at the University of Pennsylvania and a B.S. in Information Systems from Brigham Young University, where he graduated cum laude with university honors.</p>
											</div>
											<div class="col">
												<h2>UX+PM=BFFs</h2>
												<p>Do you feel like your UX or Product partner is an ally or an obstacle? While both groups have similar goals and objectives, misunderstandings of over roles, responsibilities, and process can get in the way of effective collaboration. Drawing on a decade of experience working together, Josh Penrod, VP of User Experience at Ancestry, and Kendall Hulet, SVP of Product at Ancestry, will share war stories about their time together building successful, collaborative relationships between Product and UX while learning great (and not so great) ways to build, revamp, and kill products.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/tom.jpg, /images/tom.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Tom Krcha</h1>
										<ul class="info-list">
											<li>Senior Product Manager</li>
											<li>Adobe</li>
										</ul>
										<ul class="social-network">
											
												<li><a href="https://www.linkedin.com/in/tomkrcha" class="icon-linkedin"></a></li>
												<li><a href="https://twitter.com/tomkrcha" class="icon-twitter"></a></li>
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Tom</h2>
												<p>Tom Krcha is a Senior Product Manager and co-founder of Adobe XD (Experience Design CC). Based in San Francisco, Tom is a sought-after speaker, having presented at industry conferences across North America, Europe, and Asia. Over the course of his 17-year career in design and development, he has worked on several popular games, apps, and websites. Before joining Adobe, Tom worked for interactive studios, streaming companies, and telco providers.</p>
											</div>
											<div class="col">
												<h2>Product vs. Design</h2>
												<p>If you want to lead and build great products, should you be a UX designer? Or a product manager? Does it matter? Join Tom Krcha and Talin Wadsworth from the Adobe XD team as they share case studies and real world experience of getting #$&! done at Adobe. Learn about defining a vision, testing prototypes, building teams, and shipping products that help define the future of digital experiences.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/speaker-catherine-shyu.jpg, /images/speaker-catherine-shyu.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Catherine Shyu</h1>
										<ul class="info-list">
											<li>Product Manager</li>
											<li>FullContact</li>
										</ul>
										<ul class="social-network">
											
												<li><a href="https://www.linkedin.com/in/catherineshyu" class="icon-linkedin"></a></li>
												<li><a href="https://twitter.com/cthrin" class="icon-twitter"></a></li>
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Catherine</h2>
												<p>Catherine is a Product Manager at FullContact, a contact management app and data solutions provider for professionals, teams and businesses. Previously she was a Product Manager on SendGrid’s marketing campaigns product and Product Marketing at BandPage (acq. Google). Catherine is passionate about pushing the product management space forward, and writes about product management in her spare time as well as organizes Colorado Product. She has a double BA in Economics and in Media Studies from UC Berkeley.</p>
											</div>
											<div class="col">
												<h2>Goldilocks Pricing: How to Find the Price that’s Just Right</h2>
												<p>Picking the right price for a product is notoriously hard. There are many challenges and potential pitfalls, such as: the amount of resources required to build support for pricing and billing, the possibility of leaving money on the table (or unintentionally turning potential customers away), and the difficulty of testing and iterating on a price once it’s live. At the same time, the infrastructure required to test different pricing has historically been costly. This case study will bring pricing out of the dark and into the light, and help you hypothesize and test different prices in a lightweight way. Along the way, Catherine will share methods and lessons learned from her experience setting the price for FullContact’s new product.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/speaker-zach-sivertson.jpg, /images/speaker-zach-sivertson.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Zach Sivertson</h1>
										<ul class="info-list">
											<li>Director, Product Management</li>
											<li>Symantec</li>
										</ul>
										<ul class="social-network">
											
												<li><a href="https://www.linkedin.com/in/zacharysivertson/" class="icon-linkedin"></a></li>
												<li><a href="https://twitter.com/zachsivertson" class="icon-twitter"></a></li>
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Zach</h2>
												<p>Zach Sivertson is the Director of Product Management at Symantec – the world’s largest cyber security company. There he handles product strategy and roadmap for a suite of market leading network security products that are deployed in 86% of the Fortune Global 2000. Since joining Symantec, he has led many initiatives, including the launch of new 1.0 products which now contribute over $100M in annual product bookings. Zach loves entrepreneurship and assists various angel groups and secondary funds in performing due diligence for tech companies.</p>

<p>Before Symantec, Zach has held product positions at Blue Coat Systems (Sold to Symantec for $4.6B), WorkFront & Aplifi (sold to iPipeline). He also ran I.T. operations at Sentry West Insurance, as well as started TagaText - a SaaS application that reduces no shows for doctors and dentist. Zach holds an M.B.A from Westminster as well as a B.S. in Information Systems from the University of Utah.  </p>

<p>Zach loves mountain biking and spending time with his wife and two sons.</p>
											</div>
											<div class="col">
												<h2>Panel Debate</h2>
												<p>Description coming soon.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/speaker-teresa-torres.jpg, /images/speaker-teresa-torres.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Teresa Torres</h1>
										<ul class="info-list">
											<li>Product Discovery Coach</li>
											<li>Product Talk</li>
										</ul>
										<ul class="social-network">
											
												<li><a href="https://www.linkedin.com/in/teresatorres" class="icon-linkedin"></a></li>
												<li><a href="https://twitter.com/ttorres?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="icon-twitter"></a></li>
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Teresa</h2>
												<p>Product Talk is written by Teresa Torres. Teresa is a product discovery coach who helps teams adopt user-centered, hypothesis-driven product development practices. She works with companies of all sizes on integrating user research, experimentation, and the right analytics into the product development process resulting in better product decisions. Recent clients include Allstate, Capital One, The Guardian, and Snagajob. Before becoming a coach, Teresa spent the majority of her career leading product and design teams at early-stage internet companies. Most recently, Teresa was VP of Products at AfterCollege, an Internet startup that helps college students find their first job. She was CEO of Affinity Circles, an online community provider for university alumni associations and a social recruiting service used by Fortune 500 companies. She also held product and design roles at Become.com and HighWire Press. Teresa has a BS in Symbolic Systems from Stanford University and an MS in Learning and Organizational Change from Northwestern University.</p>
											</div>
											<div class="col">
												<h2>Adopting Continuous Product Discovery Practices Across the Enterprise</h2>
												<p>Continuous product discovery is the next evolution in how to build products that customers care about. This case study will highlight how one organization is adopting continuous product discovery practices across the enterprise. It will explore the transformation by the leadership team, by product teams, and by each of the individuals that make up those teams. For companies considering adopting continuous product discovery practices, this case study will give you a blueprint for how to reinforce this transformation and will include gotchas to look out for as you adopt this change. </p>
											</div>
										</div>
									</div>
								</article>
							</div>
                            
                            
                            <div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/speaker-christi-wruck.jpg, /images/speaker-christi-wruck.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Christi Wruck</h1>
										<ul class="info-list">
											<li>Sr. Product Manager</li>
											<li>Instructure</li>
										</ul>
										<ul class="social-network">
											
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Christi</h2>
												<p>Christi is currently a Product Manager at Instructure, previously at Vivint. She is a User Experience focused Software Product Manager who enjoys the process of researching, designing and validating innovative solutions that differentiate the product in the marketplace. She is an out-of-the-box thinker who loves to collaborate with a team to create useful and beautiful software solutions. </p>
											</div>
											<div class="col">
												<h2>Panel Debate</h2>
												<p>Description coming soon.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/speaker-vicky-thomas.jpg, /images/speaker-vicky-thomas.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Vicky Thomas</h1>
										<ul class="info-list">
											<li>Product Manager</li>
											<li>Lucid</li>
										</ul>
										<ul class="social-network">
											
												<li><a href="https://www.linkedin.com/in/vicky-thomas-2b6a259" class="icon-linkedin"></a></li>
												<li><a href="https://twitter.com/__vickyt" class="icon-twitter"></a></li>
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Vicky</h2>
												<p>Vicky Thomas is the Sr. Product Manager for Smart Assistant at Vivint Smart Home. Prior to joining Vivint, Vicky served as Lead Product Manager at Lucid Software, makers of top-ranked productivity apps Lucidchart and Lucidpress, and as a Product Manager at Adobe, where she was responsible for simplifying the implementation process for Adobe Analytics. She is passionate about bringing new ideas to life with teams of exceptional people.</p>

												<p>Vicky holds an S.B. in Aerospace Engineering from the Massachusetts Institute of Technology, with a certificate in Advanced Engineering Leadership from the Gordon-MIT Engineering Leadership Program. She is the President of the MIT Alumni Club of Utah, and an active volunteer in Utah’s STEM education ecosystem. Vicky has received numerous awards for her industry and community impact, including a 2015 Women Tech Award from the Women Tech Council.</p>
											</div>
											<div class="col">
												<h2>That Time I Wasted 2 Months of Dev Work: When and How to Use Data Effectively</h2>
												<p>We’ve all been told to be data-driven, and we know that opinions and intuition are no substitute for good metrics. But what does it really mean to be data-driven when the rubber hits the road? What good are a/b tests if the user base is too small to reach statistical significance? Are year-over-year or month-over-month comparisons ever appropriate? Does qualitative user research have a place in a world of cohort reports and conversion rate graphs? And how can I get my team involved to build data into our culture? In this talk, Vicky will share her experiences leveraging data to build Lucidpress, Lucid Software’s design & layout web app. From user interviews to Design Sprints to multivariate testing, the Lucidpress team has used a wide variety of tools to optimize their product for its 2M+ users. Through real-life examples (like the time they burned 2 months of development time that amounted to nothing), Vicky will share what she’s learned about when and how to use data effectively.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
							
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/victor_large.png, /images/victor_large.png 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>Victor Yocco</h1>
										<ul class="info-list">
											<li>UX Researcher</li>
											<li>EY-Intuitive</li>
										</ul>
										<ul class="social-network">
											
												<li><a href="https://www.linkedin.com/in/victor-yocco-7256166" class="icon-linkedin"></a></li>
												<li><a href="https://twitter.com/VictorYocco" class="icon-twitter"></a></li>
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About Victor</h2>
												<p>Victor is a Research Director at EY Intuitive, a Philadelphia based UX design studio. He writes and speaks about user research and the application of psychology to design. Victor is the author of Design for the Mind: Seven Psychological Principles of Persuasive Design. He has written for A List Apart, Smashing Magazine, UX Booth, Vox.com and many other publications. Victor received his PhD from The Ohio State University, where his research focused on psychology and communication in museums, science centers, and zoos. </p>
											</div>
											<div class="col">
												<h2>Singing in Tune: Efficient and Effective Research and Strategy Projects</h2>
												<p>We need user research to create good user experiences. We also need to maximize each opportunity we have to conduct user research. Research can be a hard sell even when budgets and timelines aren't tight. Victor will walk through the purpose, process, and people needed to carry out efficient and effective research and strategy projects. These projects help inform the vision and strategy of your product. Next time a stakeholder suggests cutting the research, you'll sing a tune so sweet they’ll beg for more.</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							
							<!--
							<div class="slide">
								<div class="img-box">
									<div class="bg-stretch">
										<span data-srcset="/images/_____.jpg, /images/_____-2x.jpg 2x"></span>
									</div>
								</div>
								<article class="content-block">
								
								<div class="container">
										<h1>____name____</h1>
										<ul class="info-list">
											<li>____title____</li>
											<li>__company___</li>
										</ul>
										<ul class="social-network">
											
											
										</ul>
										<div class="two-columns">
											<div class="col">
												<h2>About ___firstname__</h2>
												<p>_____bio______</p>
											</div>
											<div class="col">
												<h2>___talktitle___</h2>
												<p>___talk_description___</p>
											</div>
										</div>
									</div>
								</article>
							</div>
							-->

							
							
							
						</div>
					</div>
					<a class="btn-prev" href="#"></a>
					<a class="btn-next" href="#"></a>
				</div>
			</div>
		</main>
		
<?php require 'footer.php'; ?>