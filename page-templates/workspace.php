<?php
/*
Template Name: Workspace
http://foundation.zurb.com/templates/workspace.html
*/
	get_header();
	get_template_part('navigation');
?>
	<div class="row">
			<div class="large-12 columns">
				<div class="row">
					<div class="large-8 columns">
						<div class="panel radius">
							<div class="row">
								<div class="large-6 small-6 columns">
									<h4>Header</h4>
									<hr>
									<h5 class="subheader">Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis.</h5>
								</div>
								<div class="large-6 small-6 columns">
									<p>Suspendisse ultrices ornare tempor. Aenean eget ultricies libero. Phasellus non ipsum eros. Vivamus at dignissim massa. Aenean dolor libero, blandit quis interdum et, malesuada nec ligula. Nullam erat erat, eleifend sed pulvinar ac. Suspendisse ultrices ornare tempor. Aenean eget ultricies libero.</p>
								</div>
							</div>
							<div class="row">
								<div class="large-12 columns">
									<div class="row">
										<div class="large-4 small-4 columns">
											<img src="http://placehold.it/250x250&amp;text=Thumbnail">
											<h6 class="panel">Description</h6>
										</div>
										<div class="large-4 small-4 columns">
											<img src="http://placehold.it/250x250&amp;text=Thumbnail">
											<h6 class="panel">Description</h6>
										</div>
									<div class="large-4 small-4 columns">
											<img src="http://placehold.it/250x250&amp;text=Thumbnail">
											<h6 class="panel">Description</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				<div class="large-4 columns">
					<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();

							the_content();
							endwhile;

						else :

							echo '<p>No content found</p>';

						endif;
					?>
					</div>
				</div>
			</div>
		</div>



<br>

		<div class="row">
			<div class="large-12 columns">
				<div class="hide-for-small">
					<div id="featured"><img alt="slide image" src="http://placehold.it/1000x400&amp;text=Slide%20Image"></div>
				</div>

				<div class="row">
					<div class="small-12 show-for-small"><br>
						<img src="http://placehold.it/1000x600&amp;text=For%20Small%20Screens">
					</div>
				</div>
			</div>
		</div>



	<?php

		get_footer('display');
		get_footer();
	?>
