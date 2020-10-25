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
				the_ID(); ?>" <?php post_class();?>
			>
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
		</article>
	</div>
</div>
<section class="my_services">
	<?php get_template_part('services'); ?>
</section>
<?php
	get_sidebar('front-page');
	get_footer('display');
	get_footer();
?>
