<?php
/*
Template Name: Store
http://foundation.zurb.com/templates/store.html
*/

get_header();
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="large-12 columns">

				<div class="row">
					<div class="large-12 columns">
						<?php
							get_template_part('navigation');
						?>
					</div>
				</div>

				<div class="row">
					<div class="large-4 small-12 columns">
						<img src="http://placehold.it/500x500&amp;text=Logo">
						<div class="hide-for-small panel">
							<h3>Header</h3>
							<h5 class="subheader">Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis.</h5>
						</div>
						<a href="#">
							<div class="panel callout radius">
								<h6>99&nbsp; items in your cart</h6>
							</div>
						</a>
					</div>
					<div class="large-8 columns">
						<div class="row">
							<div class="large-4 small-6 columns">
								<img src="http://placehold.it/1000x1000&amp;text=Thumbnail">
								<div class="panel">
									<h5>Item Name</h5>
									<h6 class="subheader">$000.00</h6>
								</div>
							</div>
							<div class="large-4 small-6 columns">
								<img src="http://placehold.it/500x500&amp;text=Thumbnail">
								<div class="panel">
									<h5>Item Name</h5>
									<h6 class="subheader">$000.00</h6>
								</div>
							</div>
							<div class="large-4 small-6 columns">
								<img src="http://placehold.it/500x500&amp;text=Thumbnail">
								<div class="panel">
									<h5>Item Name</h5>
									<h6 class="subheader">$000.00</h6>
								</div>
							</div>
							<div class="large-4 small-6 columns">
								<img src="http://placehold.it/500x500&amp;text=Thumbnail">
								<div class="panel">
									<h5>Item Name</h5>
									<h6 class="subheader">$000.00</h6>
								</div>
							</div>
							<div class="large-4 small-6 columns">
								<img src="http://placehold.it/500x500&amp;text=Thumbnail">
								<div class="panel">
									<h5>Item Name</h5>
									<h6 class="subheader">$000.00</h6>
								</div>
							</div>
							<div class="large-4 small-6 columns">
								<img src="http://placehold.it/500x500&amp;text=Thumbnail">
								<div class="panel">
									<h5>Item Name</h5>
									<h6 class="subheader">$000.00</h6>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="large-12 columns">
								<div class="panel">
									<div class="row">
										<div class="large-2 small-6 columns"><img src="http://placehold.it/300x300&amp;text=Site%20Owner"></div>
										<div class="large-10 small-6 columns">
											<strong>This Site Is Managed By</strong>
											<hr>
											<?php
$classes = array ('foo', 'bar', 'label');
				  $ietm_html = '<li><a href="">test</a></li>';
											if ( in_array('label', $classes) ) {
			$item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '<label>$1</label>', $item_html );
        }
											echo $item_html;
											?>
											Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis
										</div>
									</div>
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

			</div>

		</div>


