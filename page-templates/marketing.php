<?php
/*
Template Name: Marketing
http://foundation.zurb.com/templates/marketing.html
*/

get_header();
get_template_part('navigation');
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="large-12 columns">
				<div class="row">
					<div class="large-12 hide-for-small">
						<div id="featured" data-orbit>
						<img src="http://placehold.it/1200x500&text=Slide Image 1" alt="slide image">
						<img src="http://placehold.it/1200x500&text=Slide Image 2" alt="slide image">
						<img src="http://placehold.it/1200x500&text=Slide Image 3" alt="slide image">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns show-for-small">
						<img src="http://placehold.it/1200x700&text=Mobile Header">
					</div>
				</div>
				<br>

				<div class="row">
					<div class="large-12 columns">

						<div class="row">
							<div class="large-4 small-6 columns">
								<h4>Upcoming Shows</h4><hr>

								<div class="row">
									<div class="large-1 column">
										<img src="http://placehold.it/50x50&amp;text=[img]">
									</div>
									<div class="large-9 columns">
										<h5><a href="#">Venue Name</a></h5>
										<h6 class="subheader show-for-small">Doors at 00:00pm</h6>
									</div>
								</div><hr>
								<div class="hide-for-small">

									<div class="row">
										<div class="large-1 column">
											<img src="http://placehold.it/50x50&amp;text=[img]">
										</div>
										<div class="large-9 columns">
											<h5 class="subheader"><a href="#">Venue Name</a></h5>
										</div>
									</div>
									<hr>

									<div class="row">
										<div class="large-1 column">
											<img src="http://placehold.it/50x50&amp;text=[img]">
										</div>
										<div class="large-9 columns">
											<h5 class="subheader"><a href="#">Venue Name</a></h5>
										</div>
									</div>
									<hr>

									<div class="row">
										<div class="large-1 column">
											<img src="http://placehold.it/50x50&amp;text=[img]">
										</div>
										<div class="large-9 columns">
											<h5 class="subheader"><a href="#">Venue Name</a></h5>
										</div>
									</div>

								</div>

							</div>

							<div class="large-4 small-6 columns">
								<img src="http://placehold.it/300x465&amp;text=Image">
							</div>

							<div class="large-4 small-12 columns">
								<h4>Blog</h4><hr>
							<div class="panel">
								<h5><a href="#">Post Title 1</a></h5>
								<h6 class="subheader">Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Suspendisse ultrices ornare tempor...</h6>
								<h6><a href="#">Read More &raquo;</a></h6>
							</div>
							<div class="panel hide-for-small">
								<h5><a href="#">Post Title 2 &raquo;</a></h5>
							</div>
							<div class="panel hide-for-small">
								<h5><a href="#">Post Title 3 &raquo;</a></h5>
							</div>
								<a href="#" class="right">Go To Blog &raquo;</a>
							</div>

						</div>

					</div>

				</div>

				<footer class="row">
					<div class="large-12 columns"><hr>
						<div class="row">
							<div class="large-6 columns">
								<p>&copy; Copyright no one at all. Go to town.</p>
							</div>
							<div class="large-6 small-12 columns">
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
