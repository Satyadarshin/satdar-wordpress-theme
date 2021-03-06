<?php
/*
Template Name: Grid
http://foundation.zurb.com/templates/grid.html
*/

get_header();
get_template_part('navigation');
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>


		<div class="row">
			<div class="large-3 columns">
				<div class="panel">
				<h5>Panel Title</h5>
				<p>This is a three columns grid panel with an arbitrary height.</p>
				</div>
			</div>
			<div class="large-6 columns">
				<div class="panel">
				<h5>Panel Title</h5>
				<p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
				</div>
			</div>
			<div class="large-3  columns">
				<div class="panel">
					<h5>Panel Title</h5>
					<p>This is a three columns grid panel with an arbitrary height.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-6 columns">
				<div class="panel">
					<h5>Panel Title</h5>
					<p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
				</div>
			</div>
			<div class="large-2 columns">
				<div class="panel">
					<p><img src="http://placehold.it/200x200"/></p>
				</div>
			</div>
			<div class="large-4 columns">
				<div class="panel">
					<h5>Panel Title</h5>
					<p>This is a four columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-4 columns">
				<div class="panel">
				<p><img src="http://placehold.it/400x300"/></p>
				</div>
			</div>
			<div class="large-4 columns">
				<div class="panel">
					<p><img src="http://placehold.it/400x300"/></p>
				</div>
			</div>
			<div class="large-4 columns">
				<div class="panel">
					<p><img src="http://placehold.it/400x300"/></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-6 columns">
				<div class="panel">
					<h5>Panel Title</h5>
					<p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
				</div>
			</div>
			<div class="large-3 columns">
				<div class="panel">
					<h5>Panel Title</h5>
					<p>This is a three columns grid panel with an arbitrary height.</p>
				</div>
			</div>
			<div class="large-3 columns">
				<div class="panel">
					<h5>Panel Title</h5>
					<p>This is a three columns grid panel with an arbitrary height.</p>
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
