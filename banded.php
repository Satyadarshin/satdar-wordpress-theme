<?php
/*
Template Name: Banded 
http://foundation.zurb.com/templates/banded.html
*/

	get_header();
	get_template_part('navigation');
	if ( have_posts() ) :
	while ( have_posts() ) : the_post();
?>

		<div class="row">
			<div class="large-3 columns">
				<h1><img src="http://placehold.it/400x100&text=Logo"></h1>
			</div>
			<div class="large-9 columns">
				<ul class="button-group right">
					<li><a href="#" class="button">Link 1</a></li>
					<li><a href="#" class="button">Link 2</a></li>
					<li><a href="#" class="button">Link 3</a></li>
					<li><a href="#" class="button">Link 4</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<img src="http://placehold.it/1000x400&text=[img]">
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="large-4 columns">
				<img src="http://placehold.it/400x300&text=[img]">
			</div>
			<div class="large-8 columns">
				<h4>This is a content section.</h4>
				<div class="row">
					<div class="large-6 columns">
						<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
					</div>
					<div class="large-6 columns">
						<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-8 columns">
				<h4>This is a content section.</h4>
				<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
				<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
			</div>
			<div class="large-4 columns">
				<img src="http://placehold.it/400x300&text=[img]">
			</div>
		</div>

	<?php
		endwhile;

		else :

		echo '<p>No content found</p>';

		endif;

		get_footer();
	?>
