<?php
/*
Template Name: Workspace
http://foundation.zurb.com/templates/workspace.html
*/

	get_header();
	get_template_part('navigation');
	if ( have_posts() ) :
	while ( have_posts() ) : the_post();
?>

		<div class="row">
			<div class="large-12 columns">
				<nav class="top-bar" data-topbar>
					<ul class="title-area">
						<li class="name">
							<h1><a href="#">Top Bar Title</a></h1>
						</li>
						<li class="toggle-topbar menu-icon">
							<a href="#"><span>menu</span></a>
						</li>
					</ul>
					<section class="top-bar-section">
						<ul class="left">
							<li>
								<a href="#">Link 1</a>
							</li>
							<li>
								<a href="#">Link 2</a>
							</li>
						</ul>
						<ul class="right">
							<li class="search">
								<form>
									<input type="search">
								</form>
							</li>
							<li class="has-button">
								<a class="small button" href="#">Search</a>
							</li>
						</ul>
					</section>
				</nav>
			</div>
		</div>

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
		<br>
		<div class="row">
			<div class="large-12 columns">
				<div class="row">
					<div class="large-3 small-6 columns">
						<img src="http://placehold.it/250x250&amp;text=Thumbnail">
						<h6 class="panel">Description</h6>
					</div>
					<div class="large-3 small-6 columns">
						<img src="http://placehold.it/250x250&amp;text=Thumbnail">
						<h6 class="panel">Description</h6>
					</div>
					<div class="large-3 small-6 columns">
						<img src="http://placehold.it/250x250&amp;text=Thumbnail">
						<h6 class="panel">Description</h6>
					</div>
					<div class="large-3 small-6 columns">
						<img src="http://placehold.it/250x250&amp;text=Thumbnail">
						<h6 class="panel">Description</h6>
					</div>
				</div>
			</div>
		</div>

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
									<div class="show-for-small" style="text-align: center">
										<a class="small radius button" href="#">Call To Action!</a><br>
										<a class="small radius button" href="#">Call To Action!</a>
									</div>
								</div>
								<div class="large-6 small-6 columns">
									<p>Suspendisse ultrices ornare tempor. Aenean eget ultricies libero. Phasellus non ipsum eros. Vivamus at dignissim massa. Aenean dolor libero, blandit quis interdum et, malesuada nec ligula. Nullam erat erat, eleifend sed pulvinar ac. Suspendisse ultrices ornare tempor. Aenean eget ultricies libero.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="large-4 columns hide-for-small">
						<h4>Get In Touch!</h4>
						<hr>
						<a href="#">
							<div class="panel radius callout" style="text-align: center">
								<strong>Call To Action!</strong>
							</div>
						</a>
						<a href="#">
							<div class="panel radius callout" style="text-align: center">
								<strong>Call To Action!</strong>
							</div>
						</a>
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
