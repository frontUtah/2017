<?php

/*
 * Use '</br></br>' to separate paragraphs
 *
 * System supports instructors teaching more than one course.
 */

// USER EXPERIENCE

// Taylor Palmer & Lindsey Martin
$courses[] = array(
	'title' => 'How to Build a Design System in 3 Months',
	'description' => "Most design teams discovery their need for a Design System when they reach five or six designers. At that point, those designers are usually busy enough that it becomes difficult to find the time to establish an appropriate Design System. Any effort to establish one usually fades away in a long-forgotten Sketch file as each designer continues to cater to their own work.<br /><br />Lucid has always had a basic Design System, but never something robust enough to keep a dozen designers running in sync. As we upgraded our systems, we documented and improved our processes. Using a combination of Sketch or Figma, Google Docs, Spreadsheets, and Zeroheight, we'll take you step-by-step through our process for finally establishing a full Design System in just three months. We'll share our best practices for dividing resources, getting leadership buy-in, documenting principles, holding team approvals, and finally rolling it out to engineering teams. <br /><br />By the end of this session you will have tangible ways to tackle responsive components, consistent naming conventions, color palettes, grid systems, design principles, and detailed component specifications. You’ll also be armed with ideas, templates, documents, and a plan to finally finish your Design System.",
	'track' => 'ux',
	'day' => 2,
	'slot' => 2,
	'instructor' => array('taylorpalmer','lindseymartin'),
	'level' => 'intermediate',
	'room' => 2
);

// Vicki Tan
$courses[] = array(
	'title' => 'Designing for Humans',
	'description' => "As designers, we rely on wide toolkit that often includes visual design, UX/flows, interaction and motion, systems, research, strategy and so much more. While these are immensely valuable for creating functional and aesthetic designs, they may not always be sufficient in helping us get at the root of users’ needs.<br><br>In this workshop, Vicki will walk you through how you might add behavioral science to your workflow, to understand, prioritize, and tackle problems at hand. By understanding how users interpret information, make decisions, and how they choose to take action, we can deliver more effective and meaningful solutions.",
	'track' => 'ux',
	'day' => 1,
	'slot' => 3,
	'instructor' => 'vickitan',
	'level' => 'intermediate',
	'gumroad_product_id' => 'front-workshops-instructor-vickitan',
	'room' => 3
);

// Garth Braithwaite
$courses[] = array(
	'title' => 'How to Establish and Maintain a Design System',
	'description' => "As teams and products grow it can become complicated to maintain consistency across all properties, additionally, there is often a duplication of initial work for each product starting from scratch. By establishing and maintaining a company-wide design language and design system implementation, teams are better equipped to ensure consistency, reduce duplication of work, and improve overall design and code quality.<br><br.In this workshop, you will get hands-on experience with initial ideation and planning of a design system, as well as designing initial tokens, components, assets, and usage guidelines. Along the way, we'll discuss common pitfalls and pain points associated with organizing a design system and establishing it throughout a company.",
	'track' => 'ux',
	'day' => 1,
	'slot' => 1,
	'instructor' => 'garthdb',
	'level' => 'intermediate',
	'room' => 2
);

// Amish Desai
$courses[] = array(
	'title' => 'Discover, design, and deliver the greatest predictor of business success: LOVE',
	'description' => 'Today’s digital products and services require a focus on creating lasting value because they need to help customers achieve something meaningful. Over the course of this workshop, attendees will gain an understanding of the mechanics of creating a lovable experience by creating one for themselves.',
	'track' => 'ux',
	'day' => 2,
	'slot' => 1,
	'instructor' => 'amishdesai',
	'level' => 'intermediate',
	'room' => 4
);

// Bhargavi Kamakshivalli
$courses[] = array(
	'title' => 'Elevating design with strategy',
	'description' => "The traditional method of formulating business strategy is sequential, inflexible and often leads to user experiences that are based on outdated assumptions about consumer behavior and company potential. <br><br> Split into three sections(identify, test and design), this workshop with Bhargavi will help you engage in conversations around reframing the problem, discover tools to embrace ambiguity while being specific about the overarching outcomes that need to be achieved and templates to help construct design briefs and specifications with measurable impact. ",
	'track' => 'ux',
	'day' => 1,
	'slot' => 2,
	'instructor' => 'bhargavikamakshivalli',
	'level' => 'basics',
	'room' => 4
);


// PRODUCT MANGEMENT

// Dan Olsen
$courses[] = array(
	'title' => 'How to Achieve Product-Market Fit',
	'description' => "Everyone working on a product is trying to achieve the same goal: product-market fit. Although product-market fit is an important concept, it is not well defined and remains elusive for many product teams. <br><br> In this workshop, product management expert Dan Olsen will teach you a simple but effective process for achieving product-market fit. He will share the top advice from his book The Lean Product Playbook, including the Product-Market Fit Pyramid: an actionable model that breaks product-market fit down into 5 key elements. Dan will also explain the Lean Product Process, a 6-step methodology that guides you through how to:<br><br> 1. Determine your target customer <br><br> 2. Identify underserved customer needs <br><br> 3. Define your value proposition <br><br> 4. Specify your MVP feature set <br><br> 5. Create your MVP prototype <br><br> 6. Test your MVP with customers <br><br> This highly interactive working session will be filled with real-world examples, group exercises, and a comprehensive case study. You’ll leave this workshop with pragmatic advice and tools you can put to work the next day.",
	'track' => 'product-management',
	'day' => 1,
	'slot' => 1,
	'instructor' => 'danolsen',
	'level' => 'advanced',
	'room' => 1
);

// Jeff Whitlock
$courses[] = array(
	'title' => 'Be Less Wrong: Mental Models for Product Decision Making',
	'description' => "What features should we build? How should we implement them? When are they ready to ship? <br><br> Decision making is central to the job of every product leader. To be great product leaders, we all want to be right in every decision we make. But this isn’t possible. <br><br> We face too much uncertainty in our profession. Being wrong is inevitable. Furthermore, trying to be right all the time can lead us to defend our position and pre-existing beliefs. <br><br> Instead, we should try to be wrong less often. <br><br> This workshop will cover uncommon mental models (heuristics, frameworks, techniques, and thinking strategies) that product leaders can use to be less wrong. For each model, we’ll introduce the concept and then follow-up with case studies and exercises to practice using it to make decisions in your daily work.",
	'track' => 'product-management',
	'day' => 1,
	'slot' => 2,
	'instructor' => 'jeffwhitlock',
	'level' => 'intermediate',
	'room' => 2
);

// Chris Mayfield 
$courses[] = array(
	'title' => 'Decision making with Data: How to make informed decisions without taking the human out of the loop.',
	'description' => "As product practitioners we find insight through human centered practices. Many of these practices have historically leveraged qualitative methods. While there’s nothing new about balancing our qualitative work with quantitative data, we are each experiencing a rapid increase in data as well as an appetite to improve how we make decisions with it. In addition, all trends point to an increase in data collection, analysis and adding machine learning to our products all to improve the bottom line. How do we stay relevant in this new space of data and how do we not lose our human centered practices? This workshop will cover ways to skill up by adding to our data driven decision making tool box. We will get practice with different methods to help us identify, synthesize, solve for product needs as well as get buy in for our big ideas. Adding to data competency to our toolbox can get us more accurate synthesis, improved prototyping and ultimately a better way to gain the empathy we need to improve our products.",
	'track' => 'product-management',
	'day' => 1,
	'slot' => 3,
	'instructor' => 'chrismayfield',
	'level' => 'intermediate',
	'room' => 2
);

// Bryce Barrand 
$courses[] = array(
	'title' => 'Managing Product Through Metric Driven Outcomes',
	'description' => "Coming soon...",
	'track' => 'product-management',
	'day' => 2,
	'slot' => 2,
	'instructor' => 'brycebarrand',
	'level' => 'intermediate',
	'room' => 4
);

// Mariah Hay
$courses[] = array(
	'title' => 'Product Leadership Fundamentals: Find, Develop, and Keep Your Team Healthy',
	'description' => "You’re an experienced product practitioner who has a love of mentoring and an ambition for leadership but are not sure where to start. To make that shift you need to arm yourself with some tactical skills around building a team, developing a team, and even having the hard conversations needed to keep the team healthy. In this workshop, we will be breaking our time into focusing on these three areas, reviewing tactics and tools, and learning through doing. <br><br>Experience Team Building 101: How to recruit, interview and identify the best person for your team. We will look at strategies for finding amazing applicants, effective ways of interviewing, and things to looks for and consider in selecting a new team member.<br><br>Developing Your Team: Tools to develop your PMs and UX Designers, and create career paths within your organization We will look at defining what career paths exist / should exist in your company, learn to use tools that help us guide a conversation to understand the many dimensions of your team member, and practice ways to select and prioritize actionable things you can work with your team member to improve.<br><br>Conversations: How to manage Product Managers and UX Designers who are dropping the ball. We will talk about one of the hardest and most important parts of leadership, managing team members who are dropping the ball. This is easier said than done. First, we need to understand why the ball is being dropped (system, workload, communication, soft skills, disengagement). If it is a system or workload issue, how do we co-author a solution with the team? If it is a communication or soft skills issue, how do we coach the individual? And if it is a disengagement issue, how do we have the hard conversation with our team member that they must step up or move on." ,
	'track' => 'product-management',
	'day' => 2,
	'slot' => 1,
	'instructor' => 'mariahhay',
	'level' => 'advanced',
	'room' => 1
);


// RESEARCH

// Lauren Gray and Matt Moss
$courses[] = array(
	'title' => 'Research synthesis: Making sense of your user interviews',
	'description' => "So you’ve spoken with numerous customers, spelunked into your quantitative data, reviewed market and industry trends and now you’re ready to unleash your development team to build the next great thing.<br /><br />But where do you start? How do you take all of that data and give your team enough confidence and empathy to build the right thing in an iterative fashion that proves value along the way?<br /><br />In this workshop we’ll run you through a one-day synthesis exercise designed to give your team shared purpose around the value you’re trying to deliver and where you can start to validate that value for your customer. The session is broken into two parts, (1) Synthesizing and Identifying the areas of value, and (2) Applying Contextual Data to those areas to help ensure you’re thinking about the value across the customer's entire journey.<br /><br />We’ll walk you through distilling all of the data you’ve gathered into actionable insights. Once we have the data distilled, we’ll run through the assumption framework to help us plot out impact and risk for our top insights.<br /><br />After we’ve honed in on the top actionable insights, we’ll zoom back out to understand how delivering on the value we’ve identified could drive habitual usage within your existing application and what leading metrics would be early indicators that we’ve delivered the value we’ve intended.",
	'track' => 'research',
	'day' => 2,
	'slot' => 1,
	'instructor' => array('laurengray','mattmoss'),
	'level' => 'intermediate',
	'room' => 2
);

// John Cutler
$courses[] = array(
	'title' => 'A cross-functional team’s guide to roadmapping',
	'description' => "Roadmaps have traditionally been seen as the job of product management. But a shift is afoot -- from UX and engineering being downstream “customers” of the roadmap -- to being active co-creators (and in some cases, key owners) of the roadmap.<br /><br />This shift presents an amazing opportunity for UX to take on a more strategic role, and to impact the direction of the product on a more fundamental level. It also presents a formidable challenge: navigating these often archaic artifacts, and the processes that surround creating them. <br /><br />The primary goal of this workshop is to build roadmapping fluency. But there’s a twist. We don’t want to perpetuate the roadmapping antipatterns that may be in place in your organization (and in the industry as a whole).What do UX-friendly roadmaps look like, and how can we actually advance the roadmapping craft? How can UX lead?<br /><br />Some topics we’ll cover include:<ul><li>The basics: the job of roadmaps</li><li>Roadmaps as a designed thing -- a communication device</li><li>Roadmaps vs. backlogs vs. release plans</li><li>Preserving a sense of the complete experience</li><li>Moving beyond prescriptive feature-based roadmaps</li><li>Aligning the roadmap around UX-friendly metrics</li><li>Communicating the need for research (and uncertainty in general)</li><li>Business lingo: talking in “bets”, risk, and upside</li></ul><br />In short, I hope attendees will leave much more confident about becoming active participants in the roadmapping process. I am very excited to be facilitating this activity. I’m obsessed by the communication challenges that roadmaps present, and inspired by the idea of applying design to the problem.",
	'track' => 'research',
	'day' => 1,
	'slot' => 1,
	'instructor' => 'johncutler',
	'level' => 'intermediate',
	'room' => 3
);

// Trae Winterton
$courses[] = array(
	'title' => 'Baking Research Cookies From Scratch',
	'description' => "This workshop will go over the basics of research. Each of the following topics will be covered from an elementary perspective: Research Planning, Recruiting, Interviewing, Usability Testing, and Presenting Insights. All the ingredients you need to start getting the customer at the center of your product development. This will be hands on and dialogue based, not a lecture. Come ready to participate.",
	'track' => 'research',
	'day' => 1,
	'slot' => 3,
	'instructor' => 'traewinterton',
	'level' => 'basics',
	'room' => 4
);

// Kelly May & Jiovan Melendez
$courses[] = array(
	'title' => 'Giving customers superior experiences with speed and vision',
	'description' => "You've done the research. You understand the problem you need to solve. But, can you deliver a remarkable product to your customers efficiently without impacting the quality of the experience? We think you can. Let us show you how to cut scope and break products and features into small releases while providing continuous value for your customers--and gaining insights for your business too. ",
	'track' => 'research',
	'day' => 1,
	'slot' => 1,
	'instructor' => array('kellymay', 'jiovanmelendez'),
	'level' => 'intermediate',
	'room' => 4
);

// Andrew Branch
$courses[] = array(
	'title' => 'Continuous User Research',
	'description' => "Most product teams are doing user research, but they still aren't doing it often enough, when they do it it takes too long, and it is more expensive than it needs to be. This workshop will help change that. Andrew will help you learn how you can build tests and get results in hours intstead of days or weeks and how to build a continuous testing strategy at your organization.",
	'track' => 'research',
	'day' => 1,
	'slot' => 2,
	'instructor' => 'andrewbranch',
	'level' => 'intermediate',
	'room' => 3
);


// LEADERSHIP

// Jason Mueller
$courses[] = array(
	'title' => 'Product Operations: The secret weapon for scaling growth',
	'description' => "To build the right thing, it’s imperative for product managers to invest in ongoing discovery cycles with customers. But more often than not, the time we wish to invest with customers is cannibalized by the never-ending list of internal needs.<br /><br />In this workshop, we’ll discuss an emerging and beneficial function within the product org, designed to free up time for PMs so they can invest more time with customers. The charter of Product Ops is to effectively manage internal requests, product communications, and inputs to prioritization. We’ll share and review templates we use internally on Product Ops to ensure alignment and speed up execution.",
	'track' => 'leadership',
	'day' => 1,
	'slot' => 3,
	'instructor' => 'jasonmueller',
	'level' => 'intermediate',
	'room' => 1
);

// Todd Zaki Warfel
$courses[] = array(
	'title' => 'Adaptive leadership',
	'description' => "Have you ever struggled with a problem that wouldn’t seam to go away? Ever felt like there’s an endless series of issues to fix? You address one problem and then another one pops its head. Sometimes if feels like you’re playing an endless game of whack-a-mole.<br /><br />Chances are you’re facing an adaptive challenge.<br /><br />This introductory course helps you identify and make progress on a leadership challenge in your own life, team, or community. We’ll explore the Kugler-Ross change curve and apply the tools and techniques of Adaptive Leadership, a practical framework developed at the Harvard Kennedy School of Government for leading change, particularly during times of uncertainty or when there are no easy answers.<br /><br />Adaptive Leadership is a critical skillset for anyone looking to drive systemic change in an increasingly complex world.<br /><br />What you’ll learn to<ul><li>Understand the root cause of a stubborn and recurring challenge in your organization, team, or community</li><li>Partner with those who are in positions of authority or power</li><li>Leverage your own power for change</li><li>Lead when you don’t have authority</li><li>Learn to lead adaptively in environments with trust issues, political sensitivities, resistance, conflict, and distress</li></ul>",
	'track' => 'leadership',
	'day' => 2,
	'slot' => 2,
	'instructor' => 'toddzakiwarfel',
	'level' => 'advanced',
	'gumroad_product_id' => 'front-workshops-instructor-toddzakiwarfel',
	'room' => 3
);

// Heather Phillips 
$courses[] = array(
	'title' => 'Level Up: A tool for growing high-performing design teams',
	'description' => "We've documented how hundreds of high-performance design teams operate. Patterns show that successful teams all invest in six key areas of development, but that design leaders are typically in the dark about which areas most deserve their attention.<br><br>See how your team stacks up against others of its size with this seven-question self-assessment, developed by Heather Phillips in partnership with Designer Fund and Ueno. You'll see where you excel, pinpoint what needs work, and get a worksheet to try it with your team.",
	'track' => 'leadership',
	'day' => 1,
	'slot' => 2,
	'instructor' => 'heatherphillips',
	'level' => 'intermediate',
	'room' => 1
);

// Nick Sloggett
$courses[] = array(
	'title' => 'What Got Us Here Won’t Get Us There',
	'description' => "In this workshop, Nick will explore his wins, losses, lessons learned, and the framework that guides you to lead relationally - no matter your title or company. Expect to engage in discussion, activities, exploration around the enneagram, extreme ownership, relational empathy, organizational discourse, and true servant-minded leadership.",
	'track' => 'leadership',
	'day' => 2,
	'slot' => 1,
	'instructor' => 'nicksloggett',
	'level' => 'intermediate',
	'gumroad_product_id' => 'front-workshops-instructor-nicksloggett',
	'room' => 3
);

// Brian Brower
$courses[] = array(
	'title' => 'Making the Best Product Bets',
	'description' => "As a Product Manager, chances are you have worked at a place where you feel success in your job was all about just launching the product. In some ways, you may have felt like a glorified project manager.<br><br>Great product leaders don't just launch products.  They make sure the products they are going to crush it in the market.  Making sure what you are building is going to succeed lies in three main practices:<ul><li>Becoming the undisputed subject</li><li>Identifying early why products fail, and rapidly creating prototypes to avoid those failures</li><li>Creating a product story that wins over internal stakeholders and ultimately the customer</li></ul>This workshop is about making the right product bets and then shepherding your product to a successful product launch. Bring the product you are working on or one you want to work on. We will introduce exercises and tools to help you make sure your next product kills it.",
	'track' => 'leadership',
	'day' => 2,
	'slot' => 2,
	'instructor' => 'brianbrower',
	'level' => 'advanced',
	'room' => 1
);

?>