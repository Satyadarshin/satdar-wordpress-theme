<?php
/*
Template Name: Contact
http://foundation.zurb.com/templates/contact.html
*/

get_header();
get_template_part('navigation');
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="large-9 columns">
				<h3>Get in Touch!</h3>
				<p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
				<div class="section-container tabs" data-section>
					<section class="section">
						<h5 class="title"><a href="#panel1">Contact Our Company</a></h5>
						<div class="content" data-slug="panel1">
							<form>
								<div class="row collapse">
									<div class="large-2 columns">
										<label class="inline">Your Name</label>
									</div>
									<div class="large-10 columns">
										<input type="text" id="yourName" placeholder="Jane Smith">
									</div>
								</div>
								<div class="row collapse">
									<div class="large-2 columns">
										<label class="inline"> Your Email</label>
									</div>
									<div class="large-10 columns">
										<input type="text" id="yourEmail" placeholder="jane@smithco.com">
									</div>
								</div>
								<label>What's up?</label>
								<textarea rows="4"></textarea>
								<button type="submit" class="radius button">Submit</button>
							</form>
						</div>
					</section>
					<section class="section">
						<h5 class="title"><a href="#panel2">Specific Person</a></h5>
						<div class="content" data-slug="panel2">
							<ul class="large-block-grid-5">
								<li><a href="/cdn-cgi/l/email-protection#abc6cac7ebd8ced9cec5c2dfd285c9c885d9cec9"><img src="http://placehold.it/200x200&amp;text=[person]">Mal Reynolds</a></li>
								<li><a href="/cdn-cgi/l/email-protection#c0baafa580b3a5b2a5aea9b4b9eea2a3eeb2a5a2"><img src="http://placehold.it/200x200&amp;text=[person]">Zoe Washburne</a></li>
								<li><a href="/cdn-cgi/l/email-protection#ea808b93848faa998f988f84839e93c48889c4988f88"><img src="http://placehold.it/200x200&amp;text=[person]">Jayne Cobb</a></li>
								<li><a href="/cdn-cgi/l/email-protection#d2b6bdb192a1b7a0b7bcbba6abfcb0b1fca0b7b0"><img src="http://placehold.it/200x200&amp;text=[person]">Simon Tam</a></li>
								<li><a href="/cdn-cgi/l/email-protection#ff9496939386908a88968b9792869296919bbf8c9a8d9a91968b86d19d9cd18d9a9d"><img src="http://placehold.it/200x200&amp;text=[person]">River Tam</a></li>
								<li><a href="/cdn-cgi/l/email-protection#503c3531363f3e24383527393e3410233522353e3924297e32337e223532"><img src="http://placehold.it/200x200&amp;text=[person]">Hoban Washburne</a></li>
								<li><a href="/cdn-cgi/l/email-protection#41232e2e2a01322433242f2835386f23226f332423"><img src="http://placehold.it/200x200&amp;text=[person]">Shepherd Book</a></li>
								<li><a href="/cdn-cgi/l/email-protection#abc0c7ceceebd8ced9cec5c2dfd285c9c885d9cec9"><img src="http://placehold.it/200x200&amp;text=[person]">Kaywinnet Lee Fry</a></li>
								<li><a href="/cdn-cgi/l/email-protection#d9b0b7b8abb899beacb0b5bdf7bab6b4a9f7b8b5b5"><img src="http://placehold.it/200x200&amp;text=[person]">Inarra Serra</a></li>
							</ul>
						</div>
					</section>
				</div>
			</div>
			<div class="large-3 columns">
			<h5>Map</h5>
				<p>
					<a href="" data-reveal-id="mapModal"><img src="http://placehold.it/400x280"></a><br/>
					<a href="" data-reveal-id="mapModal">View Map</a>
				</p>
				<p>123 Awesome St.<br/>Barsoom, MA 95155
				</p>
			</div>
		</div>

		<footer class="row">
			<div class="large-12 columns">
				<hr/>
				<div class="row">
					<div class="large-6 columns">
						<p>&copy; Copyright no one at all. Go to town.</p>
					</div>
					<div class="large-6 columns">
						<ul class="inline-list right">
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 2</a></li>
							<li><a href="#">Link 3</a></li>
							<li><a href="#">Link 4</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<div class="reveal-modal" id="mapModal">
			<h4>Where We Are</h4>
			<p><img src="http://placehold.it/800x600"/></p>
			<a href="#" class="close-reveal-modal">&times;</a>
		</div>

	<?php
		endwhile;

		else :

		echo '<p>No content found</p>';

		endif;
	?>

		<script type="text/javascript">
		/* <![CDATA[ */
		(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
		/* ]]> */
		</script>
	<?php
		get_footer('display');
		get_footer();
	?>
