<?php
/*
Template Name: Banner 
http://foundation.zurb.com/templates/banner.html
*/

get_header();
get_template_part('navigation');
?>
		<div class="row">
			<div class="large-12 columns">
				<ul class="button-group">
					<li><a href="#" class="button">Link 1</a></li>
					<li><a href="#" class="button">Link 2</a></li>
					<li><a href="#" class="button">Link 3</a></li>
					<li><a href="#" class="button">Link 4</a></li>
					<li><a href="#" class="button">Link 5</a></li>
					<li><a href="#" class="button">Link 6</a></li>
					<li><a href="#" class="button">Link 7</a></li>
				</ul>
				<p><img src="http://placehold.it/1000x400&text=[banner img]"/></p>
			</div>
		</div>

		<div class="row">
			<div class="large-8 columns">
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
			?>
				<h2><?php the_title(); ?></h2>
				<h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>
			<?php
					the_content();
				endwhile;

				else :

					echo '<p>No content found</p>';

				endif;
			?>
				<p><a href="#" class="secondary small button">Next Page &rarr;</a></p>
			</div>
			<div class="large-4 columns">
				<ul class="small-block-grid-3">
					<li><a href="#"><img src="http://placehold.it/120x120"/></a></li>
					<li><a href="#"><img src="http://placehold.it/120x120"/></a></li>
					<li><a href="#"><img src="http://placehold.it/120x120"/></a></li>
					<li><a href="#"><img src="http://placehold.it/120x120"/></a></li>
					<li><a href="#"><img src="http://placehold.it/120x120"/></a></li>
					<li><a href="#"><img src="http://placehold.it/120x120"/></a></li>
				</ul>
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
		get_footer('display');
		get_footer();
	?>
