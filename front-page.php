<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 */

get_header();
get_header('hero');
get_template_part('navigation');
?>
	<div class="row">

		<div class="large-12 columns" role="content">

			<article id="post-<?php
				//TODO from id onwards placed to pass the the them checker test
				the_ID(); ?>" <?php post_class();
					 ?>
			>
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
			?>
				<h2><?php the_title(); ?></h2>
				<h6><?php the_time( get_option( 'date_format' ) ); ?> Written by <?php the_author(); ?></h6>
			<?php
					the_content();
					endwhile;

				else :

					echo '<p>No content found</p>';

				endif;
//TODO placed to pass the the them checker test
wp_link_pages();
			?>
			</article>
		</div>
	</div>

	<div class="row" data-equalizer>
		<?php get_sidebar('front-page'); ?>
	</div>

<?php
	get_footer('display');
	get_footer();
?>
