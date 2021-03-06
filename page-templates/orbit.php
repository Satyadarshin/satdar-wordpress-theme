<?php
/*
Template Name: Orbit Home
http://foundation.zurb.com/templates/orbit.html
*/

get_header();
get_template_part('navigation');
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="large-3 columns">
				<h1><img src="http://placehold.it/400x100&text=Logo"/></h1>
			</div>
			<div class="large-9 columns">
				<ul class="right button-group">
					<li><a href="#" class="button">Link 1</a></li>
					<li><a href="#" class="button">Link 2</a></li>
					<li><a href="#" class="button">Link 3</a></li>
					<li><a href="#" class="button">Link 4</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<ul class="example-orbit" data-orbit>
					<li><img src="http://placehold.it/1000x400&amp;text=[%20img%201%20]"></li>
					<li><img src="http://placehold.it/1000x400&amp;text=[%20img%202%20]"></li>
					<li><img src="http://placehold.it/1000x400&amp;text=[%20img%203%20]"></li>
				</ul>
			</div>
		</div>
		<hr/>

		<div class="row">
			<div class="large-4 columns">
				<img src="http://placehold.it/400x300&text=[img]"/>
				<h4>This is a content section.</h4>
				<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
			</div>
			<div class="large-4 columns">
				<img src="http://placehold.it/400x300&text=[img]"/>
				<h4>This is a content section.</h4>
				<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
			</div>
			<div class="large-4 columns">
				<img src="http://placehold.it/400x300&text=[img]"/>
				<h4>This is a content section.</h4>
				<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<div class="panel">
					<h4>Get in touch!</h4>
					<div class="row">
						<div class="large-9 columns">
							<p>We&rsquo;d love to hear from you, you attractive person you.</p>
						</div>
						<div class="large-3 columns">
							<a href="#" class="radius button right">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php
		endwhile;

		else :

		echo '<p>No content found</p>';

		endif;

		get_footer();
	?>
