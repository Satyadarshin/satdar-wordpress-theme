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
?>
	<div class="row">

		<div class="large-9 columns" role="content">
			<article>
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
			</article>
		</div>

        <div class="large-3 columns">
			<?php get_sidebar('panels'); ?>
        </div>

      </div>

<?php
	get_footer('display');
	get_footer();
?>
