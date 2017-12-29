
	<footer>
		<nav class="social-nav">
			<ul>
				<li><a class="twitter" href="https://twitter.com/front">Twitter</a></li>
				<li><a class="linkedin" href="https://www.linkedin.com/company-beta/4873375/?pathWildcard=4873375">LinkedIn</a></li>
				<li><a class="instagram" href="https://www.instagram.com/frontutah/">Instagram</a></li>
			</ul>
		</nav>
		<nav class="main-footer-nav">
			<ul>
				<li><a href="/about">About</a></li>
				<li><a href="/terms-and-conditions">Terms &amp; Conditions</a></li>
				<li><a href="/code-of-conduct">Code of Conduct</a></li>
				<li><a href="/speaker-guide">Speaker Guide</a></li>
			</ul>
		</nav>
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
		window['_fs_debug'] = false;
		window['_fs_host'] = 'fullstory.com';
		window['_fs_org'] = '9JW5W';
		window['_fs_namespace'] = 'FS';
		(function(m,n,e,t,l,o,g,y){
		   if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
		   g=m[e]=function(a,b){g.q?g.q.push([a,b]):g._api(a,b);};g.q=[];
		   o=n.createElement(t);o.async=1;o.src='https://'+_fs_host+'/s/fs.js';
		   y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
		   g.identify=function(i,v){g(l,{uid:i});if(v)g(l,v)};g.setUserVars=function(v){g(l,v)};
		   g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
		   g.clearUserCookie=function(c,d,i){if(!c || document.cookie.match('fs_uid=[`;`]*`[`;`]*`[`;`]*`')){
		   d=n.domain;while(1){n.cookie='fs_uid=;domain='+d+
		   ';path=/;expires='+new Date(0).toUTCString();i=d.indexOf('.');if(i<0)break;d=d.slice(i+1)}}};
		})(window,document,window['_fs_namespace'],'script','user');
	</script>

</body>
</html>