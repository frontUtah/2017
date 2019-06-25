<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$speaker = get_speaker($uri_parts[2]);
$talks = get_talks($speaker['slug']);

$title = $speaker['first'] . ' ' . $speaker['last'] . ' - Front UX & Product Management Case Study Conference, 27-29 May 2020';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="secondary product-speakers-front">
		<section class="hero">
			<h1>Five Years of Exceptional Case Studies</h1>
		</section>
		<!--
		<section class="personal-stories">
			<h2>Highlight Reels</h2>
			<ul class="story-cards">
				<li>
					<a href="https://www.youtube.com/watch?v=mV0lp5cJpBo"><div href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="card-image recap-video"><img src="/images/home-bg/home-bg-bhavika-chris.jpg" alt=""></div></a>
					<h3>2018 Highlights Conference</h3>
					<p><a href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="arrow-link recap-video">Watch Now </a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=mV0lp5cJpBo"><div href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="card-image recap-video"><img src="/images/frontworkshops18/uolp.jpg" alt=""></div></a>
					<h3>2018 Highlights Workshops</h3>
					<p><a href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="arrow-link recap-video">Watch Now </a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E"><div href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E" class="card-image recap-video"><img src="/images/home-bg-10.jpg" alt=""></div></a>
					<h3>2017 Highlights Conference</h3>
					<p><a href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E" class="arrow-link recap-video">Watch Now </a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=mV0lp5cJpBo"><div href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="card-image recap-video"><img src="/images/home-bg/home-bg-bhavika-chris.jpg" alt=""></div></a>
					<h3>2017 Highlights Workshops</h3>
					<p><a href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="arrow-link recap-video">Watch Now </a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=QkOzNF492xY"><div href="https://www.youtube.com/watch?v=QkOzNF492xY" class="card-image recap-video"><img src="/images/home-bg-10.jpg" alt=""></div></a>
					<h3>2016 Highlights Conference</h3>
					<p><a href="https://www.youtube.com/watch?v=QkOzNF492xY" class="arrow-link recap-video">Watch Now</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=xOlXgrL8m2M"><div href="https://www.youtube.com/watch?v=xOlXgrL8m2M" class="card-image recap-video"><img src="/images/frontconference18/cover_rayna_wiles.jpg" alt=""></div></a>
					<h3>2015 Highlights Conference</h3>
					<p><a href="https://www.youtube.com/watch?v=xOlXgrL8m2M" class="arrow-link recap-video">Watch Now</a></p>
				</li>
			</ul>
		</section>
	-->
		<section class="personal-stories">
			<h2>2018 Videos</h2>
			<ul class="story-cards">
				<li>
					<a href="https://www.youtube.com/watch?v=mV0lp5cJpBo"><div href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="card-image recap-video"><img src="/images/frontconference18/cover_benjamin_evans.jpg" alt=""></div></a>
					<h3>Benjamin Evans</h3>
					<p><a href="https://www.youtube.com/watch?v=mV0lp5cJpBo" class="arrow-link recap-video">The challenge of designing for everyone </a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E"><div href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E" class="card-image recap-video"><img src="/images/frontconference18/cover_vicki_tan.jpg" alt=""></div></a>
					<h3>Vicki Tan</h3>
					<p><a href="https://www.youtube.com/watch?v=RkLQ2D1Jg9E" class="arrow-link recap-video">Designing with Intuition </a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=QkOzNF492xY"><div href="https://www.youtube.com/watch?v=QkOzNF492xY" class="card-image recap-video"><img src="/images/frontconference18/cover_cameron_moll.jpg" alt=""></div></a>
					<h3>Cameron Moll</h3>
					<p><a href="https://www.youtube.com/watch?v=QkOzNF492xY" class="arrow-link recap-video">When we align</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=xOlXgrL8m2M"><div href="https://www.youtube.com/watch?v=xOlXgrL8m2M" class="card-image recap-video"><img src="/images/frontconference18/cover_rayna_wiles.jpg" alt=""></div></a>
					<h3>Rayna Wiles</h3>
					<p><a href="https://www.youtube.com/watch?v=xOlXgrL8m2M" class="arrow-link recap-video">Researching as a facilitator</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=gCLahVvDFPY"><div href="https://www.youtube.com/watch?v=gCLahVvDFPY" class="card-image recap-video"><img src="/images/frontconference18/cover_chris_bhavika.jpg" alt=""></div></a>
					<h3>Chris Mayfield & Bhavika Shah</h3>
					<p><a href="https://www.youtube.com/watch?v=gCLahVvDFPY" class="arrow-link recap-video">How to survive as a designer or PM in the era of the algorithm</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=SW-h5UcjLIE"><div href="https://www.youtube.com/watch?v=SW-h5UcjLIE" class="card-image recap-video"><img src="/images/frontconference18/cover_amanda_richardson.jpg" alt=""></div></a>
					<h3>Amanda Richardson</h3>
					<p><a href="https://www.youtube.com/watch?v=SW-h5UcjLIE" class="arrow-link recap-video">Getting data right, A case study in how we did it wrong</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=v3-UOrtvrDU"><div href="https://www.youtube.com/watch?v=v3-UOrtvrDU" class="card-image recap-video"><img src="/images/frontconference18/cover_nate_barrett.jpg" alt=""></div></a>
					<h3>Nate Barrett</h3>
					<p><a href="https://www.youtube.com/watch?v=v3-UOrtvrDU" class="arrow-link recap-video">Motivating product teams through a culture of autonomy</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=_407PAQQ8qY"><div href="https://www.youtube.com/watch?v=_407PAQQ8qY" class="card-image recap-video"><img src="/images/frontconference18/cover_ben_peck.jpg" alt=""></div></a>
					<h3>Ben Peck</h3>
					<p><a href="https://www.youtube.com/watch?v=_407PAQQ8qY" class="arrow-link recap-video">Strong opinions loosely held, design rules versus guidelines </a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=lEJmBWNhSLY"><div href="https://www.youtube.com/watch?v=lEJmBWNhSLY" class="card-image recap-video"><img src="/images/frontconference18/cover_ciara_peter.jpg" alt=""></div></a>
					<h3>Ciara Peter</h3>
					<p><a href="https://www.youtube.com/watch?v=lEJmBWNhSLY" class="arrow-link recap-video">Consumer Product Strategies for Enterprises </a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=-cLnpc5pyX0"><div href="https://www.youtube.com/watch?v=-cLnpc5pyX0" class="card-image recap-video"><img src="/images/frontconference18/cover_brian_adrienne.jpg" alt=""></div></a>
					<h3>Brian Crofts & Adrienne Gajownik</h3>
					<p><a href="https://www.youtube.com/watch?v=-cLnpc5pyX0" class="arrow-link recap-video">The modern product team</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=33NTMVqomF8"><div href="https://www.youtube.com/watch?v=33NTMVqomF8" class="card-image recap-video"><img src="/images/frontconference18/cover_aryel_cianflone.jpg" alt=""></div></a>
					<h3>Aryel Cianflone</h3>
					<p><a href="https://www.youtube.com/watch?v=33NTMVqomF8" class="arrow-link recap-video">How to speed up research</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=K0RuGSbkkWg"><div href="https://www.youtube.com/watch?v=K0RuGSbkkWg" class="card-image recap-video"><img src="/images/frontconference18/cover_stephen_eli.jpg" alt=""></div></a>
					<h3>Stephen Olmstead & Eli Woolery</h3>
					<p><a href="https://www.youtube.com/watch?v=K0RuGSbkkWg" class="arrow-link recap-video">Principles & practice</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=0HWImxhnrpc"><div href="https://www.youtube.com/watch?v=0HWImxhnrpc" class="card-image recap-video"><img src="/images/frontconference18/cover_josh_tim.jpg" alt=""></div></a>
					<h3>Josh Brewer & Tim Van Damme</h3>
					<p><a href="https://www.youtube.com/watch?v=0HWImxhnrpc" class="arrow-link recap-video">Designers designing for designers</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=AIfiV2vr5Xk"><div href="https://www.youtube.com/watch?v=AIfiV2vr5Xk" class="card-image recap-video"><img src="/images/frontconference18/cover_andrea_moore.jpg" alt=""></div></a>
					<h3>Andi Moore</h3>
					<p><a href="https://www.youtube.com/watch?v=AIfiV2vr5Xk" class="arrow-link recap-video">Making the leap to IoT</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=1Ct_edixvCU"><div href="https://www.youtube.com/watch?v=1Ct_edixvCU" class="card-image recap-video"><img src="/images/frontconference18/cover_panel_day_1.jpg" alt=""></div></a>
					<h3>Benjamin Evans, Ciara Peter, Aryel Cianflone, and Vicki Tan</h3>
					<p><a href="https://www.youtube.com/watch?v=1Ct_edixvCU" class="arrow-link recap-video">Q&A panel with morning speakers</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=uksUovzmscw"><div href="https://www.youtube.com/watch?v=uksUovzmscw" class="card-image recap-video"><img src="/images/frontconference18/cover_panel_day_2.jpg" alt=""></div></a>
					<h3>Amanda Richardson, Cameron Moll, Rayna Wiles, and Andi Moore</h3>
					<p><a href="https://www.youtube.com/watch?v=uksUovzmscw" class="arrow-link recap-video">Q&A panel with morning speakers</a></p>
				</li>
			</ul>
		</section>

		<section class="personal-stories">
			<h2>2017 Videos</h2>
			<ul class="story-cards">
				<li>
					<a href="https://www.youtube.com/watch?v=lz-XDTqGMwU"><div href="https://www.youtube.com/watch?v=lz-XDTqGMwU" class="card-image recap-video"><img src="/images/frontslc17/title_danielburka.jpg" alt=""></div></a>
					<h3>Daniel Burka</h3>
					<p><a href="https://www.youtube.com/watch?v=lz-XDTqGMwU" class="arrow-link recap-video">The moment of truth for design leadership</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=BEyJxK0LEzo"><div href="https://www.youtube.com/watch?v=BEyJxK0LEzo" class="card-image recap-video"><img src="/images/frontslc17/title_vickythomas.jpg" alt=""></div></a>
					<h3>Vicky Thomas</h3>
					<p><a href="https://www.youtube.com/watch?v=BEyJxK0LEzo" class="arrow-link recap-video">That Time I Wasted 2 Months of Dev Work: When and How to Use Data Effectively</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=YFJeMLhYdzo"><div href="https://www.youtube.com/watch?v=YFJeMLhYdzo" class="card-image recap-video"><img src="/images/frontslc17/title_diogenesbrito.jpg" alt=""></div></a>
					<h3>Diogenes Brito</h3>
					<p><a href="https://www.youtube.com/watch?v=YFJeMLhYdzo" class="arrow-link recap-video">Design or Die Trying</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=el7Y8NtlcJI"><div href="https://www.youtube.com/watch?v=el7Y8NtlcJI" class="card-image recap-video"><img src="/images/frontslc17/title_josh_kendall.jpg" alt=""></div></a>
					<h3>Josh Penrod & Kendall Hulet</h3>
					<p><a href="https://www.youtube.com/watch?v=el7Y8NtlcJI" class="arrow-link recap-video">UX+PM=BFFs</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=bA5VT11cxVc"><div href="https://www.youtube.com/watch?v=bA5VT11cxVc" class="card-image recap-video"><img src="/images/frontslc17/title_mariahhay.jpg" alt=""></div></a>
					<h3>Mariah Hay</h3>
					<p><a href="https://www.youtube.com/watch?v=bA5VT11cxVc" class="arrow-link recap-video">The PM Misconception: Why Everyone and No One is Prepared to Manage Product</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=0VHDMiE0Le0"><div href="https://www.youtube.com/watch?v=0VHDMiE0Le0" class="card-image recap-video"><img src="/images/frontslc17/title_tom_alex.jpg" alt=""></div></a>
					<h3>Alex Poterek & Tom Krcha</h3>
					<p><a href="https://www.youtube.com/watch?v=0VHDMiE0Le0" class="arrow-link recap-video">Product vs. Design</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=a0Kj2MySM1c"><div href="https://www.youtube.com/watch?v=a0Kj2MySM1c" class="card-image recap-video"><img src="/images/frontslc17/title_taylorpalmer.jpg" alt=""></div></a>
					<h3>Taylor Palmer</h3>
					<p><a href="https://www.youtube.com/watch?v=a0Kj2MySM1c" class="arrow-link recap-video">Prototyping and the Realism Threshold</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=a2HidFrzYIA"><div href="https://www.youtube.com/watch?v=a2HidFrzYIA" class="card-image recap-video"><img src="/images/frontslc17/title_teresatorres.jpg" alt=""></div></a>
					<h3>Teresa Torres</h3>
					<p><a href="https://www.youtube.com/watch?v=a2HidFrzYIA" class="arrow-link recap-video">Adopting Continuous Product Discovery Practices Across the Enterprise</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=fq-FnI1vCjU"><div href="https://www.youtube.com/watch?v=fq-FnI1vCjU" class="card-image recap-video"><img src="/images/frontslc17/title_victoryocco.jpg" alt=""></div></a>
					<h3>Victor Yocco</h3>
					<p><a href="https://www.youtube.com/watch?v=fq-FnI1vCjU" class="arrow-link recap-video">Singing in Tune: Efficient and Effective Research and Strategy Projects</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=7zu072fSQmg"><div href="https://www.youtube.com/watch?v=7zu072fSQmg" class="card-image recap-video"><img src="/images/frontslc17/title_miablume.jpg" alt=""></div></a>
					<h3>Mia Blume</h3>
					<p><a href="https://www.youtube.com/watch?v=7zu072fSQmg" class="arrow-link recap-video">Don’t Try to Design a Design Culture</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=NLDsdaN6nZE"><div href="https://www.youtube.com/watch?v=NLDsdaN6nZE" class="card-image recap-video"><img src="/images/frontslc17/title_catherineshyu.jpg" alt=""></div></a>
					<h3>Catherine Shyu</h3>
					<p><a href="https://www.youtube.com/watch?v=NLDsdaN6nZE" class="arrow-link recap-video">Goldilocks Pricing: How to Find the Price that’s Just Right</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=udobV6mIGjg"><div href="https://www.youtube.com/watch?v=udobV6mIGjg" class="card-image recap-video"><img src="/images/frontslc17/title_ellenchisa.jpg" alt=""></div></a>
					<h3>Ellen Chisa</h3>
					<p><a href="https://www.youtube.com/watch?v=udobV6mIGjg" class="arrow-link recap-video">Balance: Prioritizing your roadmap across product stages</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=ju9ZREO_i0M"><div href="https://www.youtube.com/watch?v=ju9ZREO_i0M" class="card-image recap-video"><img src="/images/frontslc17/title_panel_b.jpg" alt=""></div></a>
					<h3>Product Debate at Front 2017</h3>
					<p><a href="https://www.youtube.com/watch?v=ju9ZREO_i0M" class="arrow-link recap-video">Ideas, decisions, and roadmaps </a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=Dz10n5BZBQY"><div href="https://www.youtube.com/watch?v=Dz10n5BZBQY" class="card-image recap-video"><img src="/images/frontslc17/title_panel_a.jpg" alt=""></div></a>
					<h3>Dedign debate at Front 2017</h3>
					<p><a href="https://www.youtube.com/watch?v=Dz10n5BZBQY" class="arrow-link recap-video">Who even cares about design & designers?</a></p>
				</li>
			</ul>
		</section>


		<section class="personal-stories">
			<h2>2016 Videos</h2>
			<ul class="story-cards">
				<li>
					<a href="https://www.youtube.com/watch?v=LlKesCuHL0U"><div href="https://www.youtube.com/watch?v=LlKesCuHL0U" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-keenan-cummings.png" alt=""></div></a>
					<h3>Keenan Cummings</h3>
					<p><a href="https://www.youtube.com/watch?v=LlKesCuHL0U" class="arrow-link recap-video">Product Vision and Storytelling</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=VNTW_9mFM7k"><div href="https://www.youtube.com/watch?v=VNTW_9mFM7k" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-sian-townsend.png" alt=""></div></a>
					<h3>Sian Townsend</h3>
					<p><a href="https://www.youtube.com/watch?v=VNTW_9mFM7k" class="arrow-link recap-video">Thinking Beyond Product</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=VTQXZyH4LGU"><div href="https://www.youtube.com/watch?v=VTQXZyH4LGU" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-kyle-jacobsen.png" alt=""></div></a>
					<h3>Kyle Jacobson</h3>
					<p><a href="https://www.youtube.com/watch?v=VTQXZyH4LGU" class="arrow-link recap-video">We screwed up and you are probably doing it too.</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=0pJ8xfTmbKo"><div href="https://www.youtube.com/watch?v=0pJ8xfTmbKo" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-bob-baxley.png" alt=""></div></a>
					<h3>Bob Baxley</h3>
					<p><a href="https://www.youtube.com/watch?v=0pJ8xfTmbKo" class="arrow-link recap-video">Designing the Machine that Designs the Designs</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=qdMgC5-wXiE"><div href="https://www.youtube.com/watch?v=qdMgC5-wXiE" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-garth-braithwaite.png" alt=""></div></a>
					<h3>Garth Braithwaite</h3>
					<p><a href="https://www.youtube.com/watch?v=qdMgC5-wXiE" class="arrow-link recap-video">Sometimes You Suck</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=Hciv6q3pI6g"><div href="https://www.youtube.com/watch?v=Hciv6q3pI6g" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-chris-willis.png" alt=""></div></a>
					<h3>Chris Willis</h3>
					<p><a href="https://www.youtube.com/watch?v=Hciv6q3pI6g" class="arrow-link recap-video">Pushing your envelope: 5 things you need to know to become a design leader</a></p>
				</li>
				
				<li>
					<a href="https://www.youtube.com/watch?v=hnQaAwIumRA"><div href="https://www.youtube.com/watch?v=hnQaAwIumRA" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-shaun-moon.png" alt=""></div></a>
					<h3>Shaun Moon</h3>
					<p><a href="https://www.youtube.com/watch?v=hnQaAwIumRA" class="arrow-link recap-video">Design and the Organization</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=kUbHvOOdlxM"><div href="https://www.youtube.com/watch?v=kUbHvOOdlxM" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-sam-vanessa.png" alt=""></div></a>
					<h3>Vanessa Koch & Sam Goertler</h3>
					<p><a href="https://www.youtube.com/watch?v=kUbHvOOdlxM" class="arrow-link recap-video">Last Things First: A Redesign Strategy That Actually Works</a></p>
				</li>
				
				<li>
					<a href="https://www.youtube.com/watch?v=CVpK9N24UaA"><div href="https://www.youtube.com/watch?v=CVpK9N24UaA" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-tracey-varnell.png" alt=""></div></a>
					<h3>Tracey Varnell</h3>
					<p><a href="https://www.youtube.com/watch?v=CVpK9N24UaA" class="arrow-link recap-video">Collaborative Techniques for Product Leaders</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=KCTXdk26b_4"><div href="https://www.youtube.com/watch?v=KCTXdk26b_4" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-cap-watkins.png" alt=""></div></a>
					<h3>Cap Watkins</h3>
					<p><a href="https://www.youtube.com/watch?v=KCTXdk26b_4" class="arrow-link recap-video">Design Everything</a></p>
				</li>
				
				<li>
					<a href="https://www.youtube.com/watch?v=_OHBFQcO7pE"><div href="https://www.youtube.com/watch?v=_OHBFQcO7pE" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-stefan-walger.png" alt=""></div></a>
					<h3>Stefan Walger</h3>
					<p><a href="https://www.youtube.com/watch?v=_OHBFQcO7pE" class="arrow-link recap-video">A mile in their shoes: Effective user research starts with empathy and observation</a></p>
				</li>
				
				<li>
					<a href="https://www.youtube.com/watch?v=RCAf94DvbGo"><div href="https://www.youtube.com/watch?v=RCAf94DvbGo" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-david-oldham.png" alt=""></div></a>
					<h3>David Oldham</h3>
					<p><a href="https://www.youtube.com/watch?v=RCAf94DvbGo" class="arrow-link recap-video">If You Build It, Will They Come?</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=nGx-J0cjzZI"><div href="https://www.youtube.com/watch?v=nGx-J0cjzZI" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-pluralsight-panel.jpg" alt=""></div></a>
					<h3>Cross-functional panel with Pluralsight</h3>
					<p><a href="https://www.youtube.com/watch?v=nGx-J0cjzZI" class="arrow-link recap-video">Directed Discovery</a></p>
				</li>
				<li>
					<a href="https://www.youtube.com/watch?v=SoLuKkL_HsY"><div href="https://www.youtube.com/watch?v=SoLuKkL_HsY" class="card-image recap-video"><img src="/images/frontslc16/front-speaker-fullstory-panel.jpg" alt=""></div></a>
					<h3>Cross-functional panel with Fullstory</h3>
					<p><a href="https://www.youtube.com/watch?v=SoLuKkL_HsY" class="arrow-link recap-video">Session Monitoring</a></p>
				</li>
			</ul>
		</section>


		<section>
			<h2>2015</h2>
			<ul class="past-talks-list">
				<li>
					<span class="ux-text">How to use motion to improve UI design</span>  -- Ben Cline
				</li>
				<li>
					<span class="ux-text">UX 101: Usability Testing. Learn how to plan, facilitate, and analyze your own usability tests.</span> -- Cori Jones
				</li>
				<li>
					<span class="ux-text">Modern toolsets for prototyping dynamic and interactive prototypes.</span> -- Joe Reni
				</li>
				<li>
					<span class="ux-text">How to Validate Demand with a Prototype</span> -- Steven Cohn
				</li>
				<li>
					<span class="ux-text">Cohesive UX</span> -- Cameron Moll
				</li>
				<li>
					<span class="ux-text">The root of all evil</span> -- Marty Cagan
				</li>
				<li>
					<span class="ux-text">Tourists are poor product designers: Why empathy requires experience</span> -- Wade Shearer
				</li>
				<li>
					<span class="ux-text">Panel discussion with the DayOne App team</span> -- Paul Mayne and DayOne App team
				</li>
				<li>
					<span class="ux-text">Designing for Incremental Release</span> -- Dave Smith
				</li>
				<li>
					<span class="ux-text">Off The Garden Path - Confirming What Matters Most</span> -- Clayton Farr
				</li>
				<li>
					<span class="ux-text">Battle of the Sexes</span> -- Lauren Gray
				</li>
				<li>
					<span class="ux-text">Shaping organizations to deliver great user experiences</span> -- Peter Merholz
				</li>
				<li>
					<span class="ux-text">How to eat an elephant - finding design success on large-scale design projects.</span> -- Matt Snyder
				</li>
				<li>
					<span class="ux-text">It’s Always Happy Hour Somewhere - The Future of Product Design Organizations</span> -- Jay Fichialos
				</li>
				<li>
					<span class="ux-text">Leadership by Design: Begin an enterprise experience revolution.</span> -- Archana Thiagarajan 
				</li>
				<li>
					<span class="ux-text">Designing the Product vs. Designing the Experience</span> -- Gilbert Lee
				</li>
				<li>
					<span class="ux-text">How Do I Work That Way! Inspiring organizations to change</span> -- Nate Walkingshaw
				</li>
				<li>
					<span class="ux-text">4 common habits that kill the power of data</span> -- Inga Johnson
				</li>
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