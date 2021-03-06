<?php
/*
Template Name: Portfolio
http://foundation.zurb.com/templates/portfolio.html
*/

get_header();
get_template_part('navigation');
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="large-12 columns">
				<div class="nav-bar right">
					<ul class="button-group">
						<li><a href="#" class="button">Link 1</a></li>
						<li><a href="#" class="button">Link 2</a></li>
						<li><a href="#" class="button">Link 3</a></li>
						<li><a href="#" class="button">Link 4</a></li>
					</ul>
				</div>
				<h1>Name/Logo/Brand</h1>
				<hr/>
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<img src="http://placehold.it/1000x500&text=[banner img]">
			</div>
		</div>

		<div class="row">
			<hr>
			<div class="large-8 columns">
				<h4>About</h4>
				<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
				<i class="fi-social-twitter"></i>
			</div>
			<div class="large-4 columns">
				<img src="http://placehold.it/400x300&text=[img]">
			</div>
		</div>

		<div class="row">
			<hr>
			<div class="large-12 columns">
				<h4>Work</h4>
				<p>Click on each image!</p>
				<ul class="clearing-thumbs small-block-grid-1 medium-block-grid-2 large-block-grid-4" data-clearing>
					<li><a href="http://placehold.it/800x500&text=[img]"><img data-caption="caption here..." src="http://placehold.it/800x500&text=[img]"></a></li>
					<li><a href="http://placehold.it/800x500&text=[img]"><img data-caption="caption 2 here..." src="http://placehold.it/800x500&text=[img]"></a></li>
					<li><a href="http://placehold.it/800x500&text=[img]"><img data-caption="caption 3 here..." src="http://placehold.it/800x500&text=[img]"></a></li>
					<li><a href="http://placehold.it/800x500&text=[img]"><img data-caption="caption 4 here..." src="http://placehold.it/800x500&text=[img]"></a></li>
					<li><a href="http://placehold.it/800x500&text=[img]"><img data-caption="caption 5 here..." src="http://placehold.it/800x500&text=[img]"></a></li>
					<li><a href="http://placehold.it/800x500&text=[img]"><img data-caption="caption 6 here..." src="http://placehold.it/800x500&text=[img]"></a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
			<hr>
			<h4>Contact Me</h4>
				<div class="large-4 columns">
					Email: <a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="d9b4bc99b4a0a9b6abadbfb6b5b0b6f7bab6b4">[email&#160;protected]</a><script cf-hash='f9e31' type="text/javascript">
					/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("cf-hash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}}}catch(u){}}();/* ]]> */</script>
				</div>
				<div class="large-4 columns">
					Twitter: @twitterhandle
				</div>
				<div class="large-4 columns">
					Phone: 555-555-1234
				</div>
			</div>
		</div>

	<?php
		endwhile;

		else :

		echo '<p>No content found</p>';

		endif;

		get_footer('display');
		get_footer();
	?>
