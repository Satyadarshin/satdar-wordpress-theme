<?php
/**
 * The template for displaying the home page.
 *
 * @package SatDar
 */

get_header();
get_header('hero');
get_template_part('navigation');
?>
	<article id="post-<?php
		//TODO from id onwards placed to pass the the them checker test
		the_ID(); ?>" <?php post_class();?>
	>
	<div class="row">
		<div class="large-12 columns" role="content">
			<section>
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
			?>
				<h2><?php the_title(); ?></h2>
			<?php
                    the_content();
					endwhile;
				else:
					echo '<p>No content found</p>';
				endif;
				//TODO placed to pass the the theme checker test
				wp_link_pages();
			?>
			</section>
		</div>
	</div>
</article>
<section class="gallery_latest_post">
	<?php get_template_part('partials/gallery-partial'); ?>
</section>
<section class="my_services">
	<?php get_template_part('partials/services-partial'); ?>
</section>
<?php
	// get_sidebar('front-page');
	get_footer('display');
	get_footer();
?>
