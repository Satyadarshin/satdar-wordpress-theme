<?php
/**
 * Template Name: Service page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package SatDar
 */

get_header();
get_header('portfolio-hero');
get_template_part('navigation');
?>
<div class="row">
    <div class="large-12 columns" role="content">
        <article id="post-<?php
            //TODO from id onwards placed to pass the the theme checker test
            the_ID(); ?>" <?php post_class( );
			 ?>
		>
			<div class="row">
				<div class="large-12 columns" >
					<?php
					if ( have_posts() ) :
					while ( have_posts() ) : the_post();
					?>
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="small-12 medium-8 large-8 columns artist-statement">
					<?php
					the_content();
					endwhile;
					//TODO Function placed to pass the the theme checker test. Neeed to get it to actually work.
					wp_link_pages();
					else :
					echo '<div class="row"><div class="large-12 columns">'; //Open the column / row
					echo '<p>This page has no content</p>';
					echo '</div></div>'; //Close the column / row

					endif;
					?>
				</div>
				<div class="small-12 medium-4 large-4 columns" >
					<div class="panel static_page_sidebar">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bish.png" alt="" />
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bash.png" alt="" />
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bosh.png" alt="" />
					</div>
				</div>
			</div>			
		</article>
	</div>
</div>
<?php
	get_footer('display');
	get_footer();
?>
