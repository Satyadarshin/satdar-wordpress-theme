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
get_template_part('navigation');
?>


	<div class="row">

		<div class="large-9 columns" role="content">

			<article id="post-<?php
				//TODO from id onwards placed to pass the the them checker test
				the_ID(); ?>" <?php post_class();
					 ?>>
			<div class="row">
				<div class="large-12 columns">
			<?php
					the_archive_title( '<h2 class="page-title">', '</h2>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
				</div>
			</div>
			<?php
				//Initialise a counter
				$i = 1;
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
					//Establish If we need to build a new row
					if ($i == 1) {
						//build a new row
						echo '<div class="row" data-equalizer>';

					}
						echo '<div class="large-6 columns">';
						echo '<div class="panel" data-equalizer-watch>';
echo '<img style="margin: -1.25em; "src="http://placehold.it/400x150" />';
						echo  the_title( '<h5>', '</h5>');
						echo  the_excerpt( '<p>', '</p>');
						echo '</div>'; //Close the panel
						echo '</div>';//Close the column
						$i++;

					if ($i > 2) {
						//close the row
						echo '</div>';
						//Reset the counter
						$i = 1;
					}
					endwhile;


				else :
					echo '<div class="large-4 offset-4 columns">';
					echo '<div class="panel" data-equalizer-watch>';
					echo '<p>No content found</p>';
					echo '</div>'; //Close the panel
					echo '</div>';//Close the column
				endif;
//TODO placed to pass the the them checker test
wp_link_pages();
			?>
			</article>
		</div>

        <div class="large-3 columns">
			<?php get_sidebar('one-column'); ?>
        </div>

      </div>

<?php
	get_footer('display');
	get_footer();
?>
