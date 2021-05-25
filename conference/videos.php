<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$speaker = get_speaker($uri_parts[2]);
$talks = get_talks($speaker['slug']);

$title = $speaker['first'] . ' ' . $speaker['last'] . ' - Front UX & Product Management Case Study Conference, 29 Sep - 1 Oct 2021';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="secondary product-speakers-front">
		<section class="hero">
			<h1>Five years of exceptional case studies</h1>
		</section>
		<!--
		<section class="personal-stories">
			<h2>Highlight Reels</h2>
			<ul class="story-cards">
				<li>
					<a href="https://www.youtube.com/watch?v=mV0lp5cJpBo"><div href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="card-image recap-video"><img src="/images/home-bg/home-bg-bhavika-chris.jpg" alt=""></div></a>
					<h3>2018 Highlights Conference</h3>
					<p><a href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="recap-video">Watch Now </a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=mV0lp5cJpBo"><div href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="card-image recap-video"><img src="/images/frontworkshops18/uolp.jpg" alt=""></div></a>
					<h3>2018 Highlights Workshops</h3>
					<p><a href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="recap-video">Watch Now </a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E"><div href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E" class="card-image recap-video"><img src="/images/home-bg-10.jpg" alt=""></div></a>
					<h3>2017 Highlights Conference</h3>
					<p><a href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E" class="recap-video">Watch Now </a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=mV0lp5cJpBo"><div href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="card-image recap-video"><img src="/images/home-bg/home-bg-bhavika-chris.jpg" alt=""></div></a>
					<h3>2017 Highlights Workshops</h3>
					<p><a href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="recap-video">Watch Now </a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=QkOzNF492xY"><div href="https://www.youtube.com/watch?v=QkOzNF492xY" class="card-image recap-video"><img src="/images/home-bg-10.jpg" alt=""></div></a>
					<h3>2016 Highlights Conference</h3>
					<p><a href="https://www.youtube.com/watch?v=QkOzNF492xY" class="recap-video">Watch Now</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=xOlXgrL8m2M"><div href="https://www.youtube.com/watch?v=xOlXgrL8m2M" class="card-image recap-video"><img src="/images/frontconference18/cover_rayna_wiles.jpg" alt=""></div></a>
					<h3>2015 Highlights Conference</h3>
					<p><a href="https://www.youtube.com/watch?v=xOlXgrL8m2M" class="recap-video">Watch Now</a></p>
				</li>
			</ul>
		</section>
	-->
		<section class="personal-stories">
			<h2>2019</h2>
			<ul class="story-cards">
				<li>
					<div href="https://www.youtube.com/watch?v=Eo8HK2L5tRU" class="card-image recap-video"><img src="/images/frontconference19/danielle_green.jpg" alt=""></div>
					<h3>Danielle Green</h3>
					<p><a href="https://www.youtube.com/watch?v=Eo8HK2L5tRU" class="recap-video">Scrapping your scrappy research process for scale</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=leQ9J-U0y1c" class="card-image recap-video"><img src="/images/frontconference19/emily_campbell.jpg" alt=""></div>
					<h3>Emily Campbell</h3>
					<p><a href="https://www.youtube.com/watch?v=leQ9J-U0y1c" class="recap-video">Designing for impact: The shape and strategy of design maturity</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=o4YseYT95qM" class="card-image recap-video"><img src="/images/frontconference19/frank_yoo.jpg" alt=""></div>
					<h3>Frank Yoo</h3>
					<p><a href="https://www.youtube.com/watch?v=o4YseYT95qM" class="recap-video">Gen 2</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=Bc7_Av7Z7DI" class="card-image recap-video"><img src="/images/frontconference19/jeff_whitlock.jpg" alt=""></div>
					<h3>Jeff Whitlock</h3>
					<p><a href="https://www.youtube.com/watch?v=Bc7_Av7Z7DI" class="recap-video">Slaying Giants</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=XvUnLs8j3tY" class="card-image recap-video"><img src="/images/frontconference19/lauren_treasure.jpg" alt=""></div>
					<h3>Lauren Treasure</h3>
					<p><a href="https://www.youtube.com/watch?v=XvUnLs8j3tY" class="recap-video">The strange alliance</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=FikKv8ZIBQU" class="card-image recap-video"><img src="/images/frontconference19/mark_rawlins.jpg" alt=""></div>
					<h3>Mark Rawlins</h3>
					<p><a href="https://www.youtube.com/watch?v=FikKv8ZIBQU" class="recap-video">The business value of design</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=QIhqbB_Hn1k" class="card-image recap-video"><img src="/images/frontconference19/nate_walkingshaw.jpg" alt=""></div>
					<h3>Nate Walkingshaw</h3>
					<p><a href="https://www.youtube.com/watch?v=QIhqbB_Hn1k" class="recap-video">Organizational design: Going from features to experiences</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=bTUo8897wwM" class="card-image recap-video"><img src="/images/frontconference19/cindy_chang.jpg" alt=""></div>
					<h3>Cindy Chang</h3>
					<p><a href="https://www.youtube.com/watch?v=bTUo8897wwM" class="recap-video">Designing a modular onboarding system</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=coieiRlinJs" class="card-image recap-video"><img src="/images/frontconference19/vlad_magdalin.jpg" alt=""></div>
					<h3>Vlad Magdalin</h3>
					<p><a href="https://www.youtube.com/watch?v=coieiRlinJs" class="recap-video">Who will build the next million products?</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=opwJPuTsMrg" class="card-image recap-video"><img src="/images/frontconference19/thor_ernstsson.jpg" alt=""></div>
					<h3>Thor Ernstsson</h3>
					<p><a href="https://www.youtube.com/watch?v=opwJPuTsMrg" class="recap-video">The incumbents dilemma</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=_N0hoKlOpUI" class="card-image recap-video"><img src="/images/frontconference19/tanya_koshy.jpg" alt=""></div>
					<h3>Tanya Koshy</h3>
					<p><a href="https://www.youtube.com/watch?v=_N0hoKlOpUI" class="recap-video">How We Used Fast Customer Feedback to Build a Product for Fast Customer Feedback</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=tMXPBr6m1Ws" class="card-image recap-video"><img src="/images/frontconference19/samantha_warren.jpg" alt=""></div>
					<h3>Samantha Warren</h3>
					<p><a href="https://www.youtube.com/watch?v=tMXPBr6m1Ws" class="recap-video">Blind spots and bents: Designing around your product biases</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=UvzoWmhxDTg" class="card-image recap-video"><img src="/images/frontconference19/matt_strom.jpg" alt=""></div>
					<h3>Matt Ström</h3>
					<p><a href="https://www.youtube.com/watch?v=UvzoWmhxDTg" class="recap-video">Designing Change</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=lL_Mo6F2u44" class="card-image recap-video"><img src="/images/frontconference19/maggie_crowley.jpg" alt=""></div>
					<h3>Maggie Crowley</h3>
					<p><a href="https://www.youtube.com/watch?v=lL_Mo6F2u44" class="recap-video">Your product is only as good as your teamwork</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=go-QozWjc9M" class="card-image recap-video"><img src="/images/frontconference19/kim_williams.jpg" alt=""></div>
					<h3>Kim Williams</h3>
					<p><a href="https://www.youtube.com/watch?v=go-QozWjc9M" class="recap-video">Radical collaboration and trust; breaking down silos and building products at scale</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=uOM8cf0RqNA" class="card-image recap-video"><img src="/images/frontconference19/wade_shearer.jpg" alt=""></div>
					<h3>Wade Shearer</h3>
					<p><a href="https://www.youtube.com/watch?v=uOM8cf0RqNA" class="recap-video">Letting go of process and accepting controlled chaos</a></p>
				</li>
			</ul>
		</section>
		
		<section class="personal-stories">
			<h2>2018</h2>
			<ul class="story-cards">
				<li>
					<div href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="card-image recap-video"><img src="/images/frontconference18/cover_benjamin_evans.jpg" alt=""></div>
					<h3>Benjamin Evans</h3>
					<p><a href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="recap-video">The challenge of designing for everyone </a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E" class="card-image recap-video"><img src="/images/frontconference18/cover_vicki_tan.jpg" alt=""></div>
					<h3>Vicki Tan</h3>
					<p><a href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E" class="recap-video">Designing with Intuition </a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=QkOzNF492xY" class="card-image recap-video"><img src="/images/frontconference18/cover_cameron_moll.jpg" alt=""></div>
					<h3>Cameron Moll</h3>
					<p><a href="https://www.youtube.com/watch?v=QkOzNF492xY" class="recap-video">When we align</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=xOlXgrL8m2M" class="card-image recap-video"><img src="/images/frontconference18/cover_rayna_wiles.jpg" alt=""></div>
					<h3>Rayna Wiles</h3>
					<p><a href="https://www.youtube.com/watch?v=xOlXgrL8m2M" class="recap-video">Researching as a facilitator</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=gCLahVvDFPY" class="card-image recap-video"><img src="/images/frontconference18/cover_chris_bhavika.jpg" alt=""></div>
					<h3>Chris Mayfield & Bhavika Shah</h3>
					<p><a href="https://www.youtube.com/watch?v=gCLahVvDFPY" class="recap-video">How to survive as a designer or PM in the era of the algorithm</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=SW-h5UcjLIE" class="card-image recap-video"><img src="/images/frontconference18/cover_amanda_richardson.jpg" alt=""></div>
					<h3>Amanda Richardson</h3>
					<p><a href="https://www.youtube.com/watch?v=SW-h5UcjLIE" class="recap-video">Getting data right, A case study in how we did it wrong</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=v3-UOrtvrDU" class="card-image recap-video"><img src="/images/frontconference18/cover_nate_barrett.jpg" alt=""></div>
					<h3>Nate Barrett</h3>
					<p><a href="https://www.youtube.com/watch?v=v3-UOrtvrDU" class="recap-video">Motivating product teams through a culture of autonomy</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=_407PAQQ8qY" class="card-image recap-video"><img src="/images/frontconference18/cover_ben_peck.jpg" alt=""></div>
					<h3>Ben Peck</h3>
					<p><a href="https://www.youtube.com/watch?v=_407PAQQ8qY" class="recap-video">Strong opinions loosely held, design rules versus guidelines </a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=lEJmBWNhSLY" class="card-image recap-video"><img src="/images/frontconference18/cover_ciara_peter.jpg" alt=""></div>
					<h3>Ciara Peter</h3>
					<p><a href="https://www.youtube.com/watch?v=lEJmBWNhSLY" class="recap-video">Consumer Product Strategies for Enterprises </a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=-cLnpc5pyX0" class="card-image recap-video"><img src="/images/frontconference18/cover_brian_adrienne.jpg" alt=""></div>
					<h3>Brian Crofts & Adrienne Gajownik</h3>
					<p><a href="https://www.youtube.com/watch?v=-cLnpc5pyX0" class="recap-video">The modern product team</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=33NTMVqomF8" class="card-image recap-video"><img src="/images/frontconference18/cover_aryel_cianflone.jpg" alt=""></div>
					<h3>Aryel Cianflone</h3>
					<p><a href="https://www.youtube.com/watch?v=33NTMVqomF8" class="recap-video">How to speed up research</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=K0RuGSbkkWg" class="card-image recap-video"><img src="/images/frontconference18/cover_stephen_eli.jpg" alt=""></div>
					<h3>Stephen Olmstead & Eli Woolery</h3>
					<p><a href="https://www.youtube.com/watch?v=K0RuGSbkkWg" class="recap-video">Principles & practice</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=0HWImxhnrpc" class="card-image recap-video"><img src="/images/frontconference18/cover_josh_tim.jpg" alt=""></div>
					<h3>Josh Brewer & Tim Van Damme</h3>
					<p><a href="https://www.youtube.com/watch?v=0HWImxhnrpc" class="recap-video">Designers designing for designers</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=AIfiV2vr5Xk" class="card-image recap-video"><img src="/images/frontconference18/cover_andrea_moore.jpg" alt=""></div>
					<h3>Andi Moore</h3>
					<p><a href="https://www.youtube.com/watch?v=AIfiV2vr5Xk" class="recap-video">Making the leap to IoT</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=1Ct_edixvCU" class="card-image recap-video"><img src="/images/frontconference18/cover_panel_day_1.jpg" alt=""></div>
					<h3>Benjamin Evans, Ciara Peter, Aryel Cianflone, and Vicki Tan</h3>
					<p><a href="https://www.youtube.com/watch?v=1Ct_edixvCU" class="recap-video">Q&A panel with morning speakers</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=uksUovzmscw" class="card-image recap-video"><img src="/images/frontconference18/cover_panel_day_2.jpg" alt=""></div>
					<h3>Amanda Richardson, Cameron Moll, Rayna Wiles, and Andi Moore</h3>
					<p><a href="https://www.youtube.com/watch?v=uksUovzmscw" class="recap-video">Q&A panel with morning speakers</a></p>
				</li>
			</ul>
		</section>

		<section class="personal-stories">
			<h2>2017</h2>
			<ul class="story-cards">
				<li>
					<div href="https://www.youtube.com/watch?v=lz-XDTqGMwU" class="card-image recap-video"><img src="/images/frontslc17/title_danielburka.jpg" alt=""></div>
					<h3>Daniel Burka</h3>
					<p><a href="https://www.youtube.com/watch?v=lz-XDTqGMwU" class="recap-video">The moment of truth for design leadership</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=BEyJxK0LEzo" class="card-image recap-video"><img src="/images/frontslc17/title_vickythomas.jpg" alt=""></div>
					<h3>Vicky Thomas</h3>
					<p><a href="https://www.youtube.com/watch?v=BEyJxK0LEzo" class="recap-video">That Time I Wasted 2 Months of Dev Work: When and How to Use Data Effectively</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=YFJeMLhYdzo" class="card-image recap-video"><img src="/images/frontslc17/title_diogenesbrito.jpg" alt=""></div>
					<h3>Diogenes Brito</h3>
					<p><a href="https://www.youtube.com/watch?v=YFJeMLhYdzo" class="recap-video">Design or Die Trying</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=el7Y8NtlcJI" class="card-image recap-video"><img src="/images/frontslc17/title_josh_kendall.jpg" alt=""></div>
					<h3>Josh Penrod & Kendall Hulet</h3>
					<p><a href="https://www.youtube.com/watch?v=el7Y8NtlcJI" class="recap-video">UX+PM=BFFs</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=bA5VT11cxVc" class="card-image recap-video"><img src="/images/frontslc17/title_mariahhay.jpg" alt=""></div>
					<h3>Mariah Hay</h3>
					<p><a href="https://www.youtube.com/watch?v=bA5VT11cxVc" class="recap-video">The PM Misconception: Why Everyone and No One is Prepared to Manage Product</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=0VHDMiE0Le0" class="card-image recap-video"><img src="/images/frontslc17/title_tom_alex.jpg" alt=""></div>
					<h3>Alex Poterek & Tom Krcha</h3>
					<p><a href="https://www.youtube.com/watch?v=0VHDMiE0Le0" class="recap-video">Product vs. Design</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=a0Kj2MySM1c" class="card-image recap-video"><img src="/images/frontslc17/title_taylorpalmer.jpg" alt=""></div>
					<h3>Taylor Palmer</h3>
					<p><a href="https://www.youtube.com/watch?v=a0Kj2MySM1c" class="recap-video">Prototyping and the Realism Threshold</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=a2HidFrzYIA" class="card-image recap-video"><img src="/images/frontslc17/title_teresatorres.jpg" alt=""></div>
					<h3>Teresa Torres</h3>
					<p><a href="https://www.youtube.com/watch?v=a2HidFrzYIA" class="recap-video">Adopting Continuous Product Discovery Practices Across the Enterprise</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=fq-FnI1vCjU" class="card-image recap-video"><img src="/images/frontslc17/title_victoryocco.jpg" alt=""></div>
					<h3>Victor Yocco</h3>
					<p><a href="https://www.youtube.com/watch?v=fq-FnI1vCjU" class="recap-video">Singing in Tune: Efficient and Effective Research and Strategy Projects</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=7zu072fSQmg" class="card-image recap-video"><img src="/images/frontslc17/title_miablume.jpg" alt=""></div>
					<h3>Mia Blume</h3>
					<p><a href="https://www.youtube.com/watch?v=7zu072fSQmg" class="recap-video">Don’t Try to Design a Design Culture</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=NLDsdaN6nZE" class="card-image recap-video"><img src="/images/frontslc17/title_catherineshyu.jpg" alt=""></div>
					<h3>Catherine Shyu</h3>
					<p><a href="https://www.youtube.com/watch?v=NLDsdaN6nZE" class="recap-video">Goldilocks Pricing: How to Find the Price that’s Just Right</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=udobV6mIGjg" class="card-image recap-video"><img src="/images/frontslc17/title_ellenchisa.jpg" alt=""></div>
					<h3>Ellen Chisa</h3>
					<p><a href="https://www.youtube.com/watch?v=udobV6mIGjg" class="recap-video">Balance: Prioritizing your roadmap across product stages</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=ju9ZREO_i0M" class="card-image recap-video"><img src="/images/frontslc17/title_panel_b.jpg" alt=""></div>
					<h3>Product Debate at Front 2017</h3>
					<p><a href="https://www.youtube.com/watch?v=ju9ZREO_i0M" class="recap-video">Ideas, decisions, and roadmaps </a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=Dz10n5BZBQY" class="card-image recap-video"><img src="/images/frontslc17/title_panel_a.jpg" alt=""></div>
					<h3>Design debate at Front 2017</h3>
					<p><a href="https://www.youtube.com/watch?v=Dz10n5BZBQY" class="recap-video">Who even cares about design & designers?</a></p>
				</li>
			</ul>
		</section>


		<section class="personal-stories">
			<h2>2016 videos</h2>
			<ul class="story-cards">
				<li>
					<div href="https://www.youtube.com/watch?v=LlKesCuHL0U" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-keenan-cummings.png" alt=""></div>
					<h3>Keenan Cummings</h3>
					<p><a href="https://www.youtube.com/watch?v=LlKesCuHL0U" class="recap-video">Product Vision and Storytelling</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=VNTW_9mFM7k" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-sian-townsend.png" alt=""></div>
					<h3>Sian Townsend</h3>
					<p><a href="https://www.youtube.com/watch?v=VNTW_9mFM7k" class="recap-video">Thinking Beyond Product</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=VTQXZyH4LGU" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-kyle-jacobsen.png" alt=""></div>
					<h3>Kyle Jacobson</h3>
					<p><a href="https://www.youtube.com/watch?v=VTQXZyH4LGU" class="recap-video">We screwed up and you are probably doing it too.</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=0pJ8xfTmbKo" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-bob-baxley.png" alt=""></div>
					<h3>Bob Baxley</h3>
					<p><a href="https://www.youtube.com/watch?v=0pJ8xfTmbKo" class="recap-video">Designing the Machine that Designs the Designs</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=qdMgC5-wXiE" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-garth-braithwaite.png" alt=""></div>
					<h3>Garth Braithwaite</h3>
					<p><a href="https://www.youtube.com/watch?v=qdMgC5-wXiE" class="recap-video">Sometimes You Suck</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=Hciv6q3pI6g" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-chris-willis.png" alt=""></div>
					<h3>Chris Willis</h3>
					<p><a href="https://www.youtube.com/watch?v=Hciv6q3pI6g" class="recap-video">Pushing your envelope: 5 things you need to know to become a design leader</a></p>
				</li>
				
				<li>
					<div href="https://www.youtube.com/watch?v=hnQaAwIumRA" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-shaun-moon.png" alt=""></div>
					<h3>Shaun Moon</h3>
					<p><a href="https://www.youtube.com/watch?v=hnQaAwIumRA" class="recap-video">Design and the Organization</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=kUbHvOOdlxM" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-sam-vanessa.png" alt=""></div>
					<h3>Vanessa Koch & Sam Goertler</h3>
					<p><a href="https://www.youtube.com/watch?v=kUbHvOOdlxM" class="recap-video">Last Things First: A Redesign Strategy That Actually Works</a></p>
				</li>
				
				<li>
					<div href="https://www.youtube.com/watch?v=CVpK9N24UaA" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-tracey-varnell.png" alt=""></div>
					<h3>Tracey Varnell</h3>
					<p><a href="https://www.youtube.com/watch?v=CVpK9N24UaA" class="recap-video">Collaborative Techniques for Product Leaders</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=KCTXdk26b_4" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-cap-watkins.png" alt=""></div>
					<h3>Cap Watkins</h3>
					<p><a href="https://www.youtube.com/watch?v=KCTXdk26b_4" class="recap-video">Design Everything</a></p>
				</li>
				
				<li>
					<div href="https://www.youtube.com/watch?v=_OHBFQcO7pE" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-stefan-walger.png" alt=""></div>
					<h3>Stefan Walger</h3>
					<p><a href="https://www.youtube.com/watch?v=_OHBFQcO7pE" class="recap-video">A mile in their shoes: Effective user research starts with empathy and observation</a></p>
				</li>
				
				<li>
					<div href="https://www.youtube.com/watch?v=RCAf94DvbGo" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-david-oldham.png" alt=""></div>
					<h3>David Oldham</h3>
					<p><a href="https://www.youtube.com/watch?v=RCAf94DvbGo" class="recap-video">If You Build It, Will They Come?</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=nGx-J0cjzZI" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-pluralsight-panel.jpg" alt=""></div>
					<h3>Cross-functional panel with Pluralsight</h3>
					<p><a href="https://www.youtube.com/watch?v=nGx-J0cjzZI" class="recap-video">Directed Discovery</a></p>
				</li>
				<li>
					<div href="https://www.youtube.com/watch?v=SoLuKkL_HsY" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-fullstory-panel.jpg" alt=""></div>
					<h3>Cross-functional panel with Fullstory</h3>
					<p><a href="https://www.youtube.com/watch?v=SoLuKkL_HsY" class="recap-video">Session Monitoring</a></p>
				</li>
			</ul>
		</section>


		<section>
			<h2>2015</h2>
			<ul class="past-talks-list">
				<li><strong>How to use motion to improve UI design</strong>, by Ben Cline</li>
				<li><strong>UX 101: Usability Testing. Learn how to plan, facilitate, and analyze your own usability tests</strong>, by Cori Jones</li>
				<li><strong>Modern toolsets for prototyping dynamic and interactive prototypes.</strong>, by Joe Reni</li>
				<li><strong>How to Validate Demand with a Prototype</strong>, by Steven Cohn</li>
				<li><strong>Cohesive UX</strong>, by Cameron Moll</li>
				<li><strong>The root of all evil</strong>, by Marty Cagan</li>
				<li><strong>Tourists are poor product designers: Why empathy requires experience</strong>, by Wade Shearer</li>
				<li><strong>Panel discussion with the DayOne App team</strong>, by Paul Mayne and DayOne App team</li>
				<li><strong>Designing for Incremental Release</strong>, by Dave Smith</li>
				<li><strong>Off The Garden Path - Confirming What Matters Most</strong>, by Clayton Farr</li>
				<li><strong>Battle of the Sexes</strong>, by Lauren Gray</li>
				<li><strong>Shaping organizations to deliver great user experiences</strong>, by Peter Merholz</li>
				<li><strong>How to eat an elephant - finding design success on large-scale design projects.</strong>, by Matt Snyder</li>
				<li><strong>It’s Always Happy Hour Somewhere - The Future of Product Design Organizations</strong>, by Jay Fichialos</li>
				<li><strong>Leadership by Design: Begin an enterprise experience revolution.</strong>, by Archana Thiagarajan</li>
				<li><strong>Designing the Product vs. Designing the Experience</strong>, by Gilbert Lee</li>
				<li><strong>How Do I Work That Way! Inspiring organizations to change</strong>, by Nate Walkingshaw</li>
				<li><strong>4 common habits that kill the power of data</strong>, by Inga Johnson</li>
			</ul>
		</section>


		<section class="join-us">
			<h2>Join us at the Front!</h2>
			<p>In it's 6th year, Front is a sell-out event, with  
				<strong>800 annual attendees from 8 countries and 34 states</strong> 
				across the US. Join us at the Front to share, learn, and be inspired 
				to create amazing products.</p>
			<p><a href="/conference/registration" class="button">Register</a></p>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>