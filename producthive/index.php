<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/init.php');

$title = 'Discount to Front for active Product Hive members';

require($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

?>
	<main class="article-page">
		<section class="hero">
			<h1>Product Hive discount</h1>
		</section>
		<section class="body short">
			<h2>Product Hive discount</h2>
			<p>We love supporting the <a href="https://www.producthive.org">Product Hive 
				community</a> and would like to offer you 20% of a ticket to the <a href="/conference">Front UX 
				& Product Management Case Study Conference, 28-29 May 2020</a>. The 
				qualification is that you are a member of the Meetup group and have 
				attended at least one event within the last three months. Complete the 
				form and a single-use discount code will be emailed to you.</p>
		</section>
		<section class="body">
			
			<?php
				
			if($_GET['form'] == 'success') {
				echo '<p><strong>Your code is on it\'s way!</strong></p>';
			} else {
				echo '
			<div style="width: 33%">
				<form action="/producthive/action.php" method="post">
					<div class="input">
						<label for="name">Full name</label>
						<input type="text" id="name" name="name">
					</div>
					<div class="input">
						<label for="email">Email</label>
						<input type="text" id="email" name="email">
					</div>
					<div class="input">
						<button type="submit" name="submit" class="button button-small">Request code</button>
					</div>
					<input type="hidden" name="training" value="Continuous User Research">
					<input type="hidden" name="consultant" value="Andrew Branch">
				</form>
			</div>
			';
			}
			
			?>
		</section>
	</main>

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');

?>