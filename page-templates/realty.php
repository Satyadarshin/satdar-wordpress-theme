<?php
/*
Template Name: Realty
http://foundation.zurb.com/templates/realty.html
*/

get_header();
get_template_part('navigation');
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="large-12 columns">
				<img src="http://placehold.it/1600x600&text=Header"><br><br>
			</div>
		</div>

		<div class="row">
			<div class="large-3 panel columns">
				<img src="http://placehold.it/500x500&text=Image">
				<h4>Header</h4>
				<p>Fusce ullamcorper mauris in eros dignissim molestie posuere felis blandit. Aliquam erat volutpat. Mauris ultricies posuere vehicula. Sed sit amet posuere erat. Quisque in ipsum non augue euismod dapibus non et eros.</p><hr>
				<div class="row">
					<div class="large-4 columns">
						<a href="#" class="tiny button">Link</a>
					</div>
					<div class="large-4 columns">
						<a href="#" class="tiny button">Link</a>
					</div>
					<div class="large-4 large-collapse columns">
						<a href="#" class="tiny button">Link</a>
					</div>
				</div>
			</div>
			<div class="large-9 columns">
				<div class="panel">
					<div class="row">
						<div class="large-3 columns">
							<img src="http://placehold.it/600x500&text=Thumbnail">
						</div>
						<div class="large-3 columns">
							<img src="http://placehold.it/600x500&text=Thumbnail">
						</div>
						<div class="large-3 columns">
							<img src="http://placehold.it/600x500&text=Thumbnail">
						</div>
						<div class="large-3 columns">
							<img src="http://placehold.it/600x500&text=Thumbnail">
						</div>
						<div class="large-3 columns">
							<img src="http://placehold.it/600x500&text=Thumbnail">
						</div>
						<div class="large-3 columns">
							<img src="http://placehold.it/600x500&text=Thumbnail">
						</div>
						<div class="large-3 columns">
							<img src="http://placehold.it/600x500&text=Thumbnail">
						</div>
						<div class="large-3 columns">
							<img src="http://placehold.it/600x500&text=Thumbnail">
						</div>
						<div class="large-3 columns">
							<img src="http://placehold.it/600x500&text=Thumbnail">
						</div>
						<div class="large-3 columns">
							<img src="http://placehold.it/600x500&text=Thumbnail">
						</div>
						<div class="large-3 columns">
							<img src="http://placehold.it/600x500&text=Thumbnail">
						</div>
						<div class="large-3 columns end">
							<img src="http://placehold.it/600x500&text=Thumbnail">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="large-6 columns">
						<div class="panel">
							<h5>Subheader</h5>
							<p>Sed sit amet posuere erat. Quisque in ipsum non augue euismod dapibus non et eros.</p>
							<a href="#" class="small button">Link</a>
						</div>
					</div>
					<div class="large-6 columns">
						<div class="panel">
							<h5>Subheader</h5>
							<p>Sed sit amet posuere erat. Quisque in ipsum non augue euismod dapibus non et eros.</p>
							<a href="#" class="small button">Link</a>
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

		get_footer('display');
		get_footer();
	?>
