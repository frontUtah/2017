
	<footer>
		<nav class="social-nav">
			<ul>
				<li><a class="twitter" href="https://twitter.com/frontutah">Twitter</a></li>
				<li><a class="linkedin" href="https://www.linkedin.com/company/4873375">LinkedIn</a></li>
				<li><a class="instagram" href="https://www.instagram.com/frontutah/">Instagram</a></li>
			</ul>
		</nav>
		<nav class="main-footer-nav">
			<ul>
				<li><a href="/about">About</a></li>
				<li><a href="/terms-and-conditions">Terms &amp; Conditions</a></li>
				<li><a href="/code-of-conduct">Code of Conduct</a></li>
				<li><a href="/speaker-guide">Speaker Guide</a></li>
				<li><a href="/covid-safety-policy">COVID Safety Policy</a></li>
			</ul>
		</nav>

		<!-- Begin Mailchimp Signup Form -->
		<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">

		<div id="mc_embed_signup">
		<form action="https://frontutah.us2.list-manage.com/subscribe/post?u=5a9bade195be7c98130573919&amp;id=78b2b3728d&amp;f_id=005e49e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		    <div id="mc_embed_signup_scroll">
			<label for="mce-EMAIL">Join our mailing list for updates</label>
			<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
		    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5a9bade195be7c98130573919_e8d567ca7f" tabindex="-1" value=""></div>
		    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		    </div>
		</form>
		</div>

		<!--End mc_embed_signup-->


		<p>Join us at the</p>
		<h3 class="logo">Front</h3>
		<p>&copy; Front, LLC. All rights reserved.</p>
	</footer>

	
	<!-- Google analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-60121892-1', 'auto');
		ga('send', 'pageview');
	</script>
	
	<!-- jquery -->
	<script src="/scripts/jquery-3.2.1.min.js"></script>
	<script src="/scripts/jquery.magnific-popup.js"></script>
	<script src="/scripts/ui.js"></script>
	
	<script>
		$(function() {
			var imageNumber = Math.floor( Math.random() * 10 ) + 1;
			$( '.hero' ).addClass( 'image-' + imageNumber );
			
			// lightboxes
			$(document).ready(function() {
				$('.recap-video').magnificPopup({
					//disableOn: 700,
					type: 'iframe',
					mainClass: 'mfp-fade',
					removalDelay: 160,
					preloader: false,
					fixedContentPos: false
				});
			});
		});
	</script>
	
	<!-- FullStory -->
	<script>
		window['_fs_host'] = 'fullstory.com';
		window['_fs_script'] = 'edge.fullstory.com/s/fs.js';
		window['_fs_org'] = '9JW5W';
		window['_fs_namespace'] = 'FS';
		(function(m,n,e,t,l,o,g,y){
		    if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
		    g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s);};g.q=[];
		    o=n.createElement(t);o.async=1;o.crossOrigin='anonymous';o.src='https://'+_fs_script;
		    y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
		    g.identify=function(i,v,s){g(l,{uid:i},s);if(v)g(l,v,s)};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};
		    g.anonymize=function(){g.identify(!!0)};
		    g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};
		    g.log = function(a,b){g("log",[a,b])};
		    g.consent=function(a){g("consent",!arguments.length||a)};
		    g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
		    g.clearUserCookie=function(){};
		    g.setVars=function(n, p){g('setVars',[n,p]);};
		    g._w={};y='XMLHttpRequest';g._w[y]=m[y];y='fetch';g._w[y]=m[y];
		    if(m[y])m[y]=function(){return g._w[y].apply(this,arguments)};
		    g._v="1.3.0";
		})(window,document,window['_fs_namespace'],'script','user');
	</script>

</body>
</html>