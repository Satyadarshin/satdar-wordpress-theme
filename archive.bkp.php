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
	<div class="large-12 columns" role="content">
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
			echo '<div class="row">';	
			echo '<div class="large-12 columns">';
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
				//Establish If we need to build a new row
				echo '<div class="project">';
				//Check the post has a Post Thumbnail assigned to it; drop a default if not.
				echo '<a href="'; 
				echo the_permalink(); 
				echo '" title="'; 
				echo the_title_attribute(); 
				echo '">';
				if ( has_post_thumbnail() ) { 
					the_post_thumbnail('project-thumb');
				} 
				else {
					echo '<img src="http://placehold.it/300x300"  />';
				}
				echo '</a>';
				echo '<a href="'; 
				echo the_permalink();
				echo '">';
				echo  the_title( '<h5>', '</h5>');
				echo '</a>';
				echo '<p>&nbsp;</p>';
				echo '</div>'; //Close the panel
			endwhile;
				//Close the row
				//echo '</div>';
				//Reset the counter
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
</div>
<?php
	get_footer('display');
	get_footer();
?>
