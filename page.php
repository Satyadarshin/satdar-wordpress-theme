<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();
get_template_part('navigation');
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>
	<div class="row">

		<div class="large-9 columns" role="content">
			<article>
				<h2><?php the_title(); ?></h2>
				<h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>
				<?php the_content(); ?>
			</article>
		</div>

        <div class="large-3 columns">
		<?php get_sidebar('right'); ?>
        </div>

      </div>
	<?php
			endwhile;

			else :

			echo '<p>No content found</p>';

			endif;


		get_footer();
	?>
