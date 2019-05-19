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

		<div class="large-9 columns" role="content">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
			?>
				<h2><?php the_title(); ?></h2>
			<?php
					the_content();
            //TODO placed to pass the the them checker test
            wp_link_pages();
			
					endwhile;

				else :

					echo '<p>No content found</p>';

				endif;
                ?>
			</article>
		</div>

        <div class="large-3 columns one-column-sidebar">
			
        </div>

      </div>

<?php
	get_footer('display');
	get_footer();
?>
