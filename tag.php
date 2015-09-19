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

				<table>
  <thead>
    <tr>
      <th width="200">Tag</th>
      <th>Description</th>
    </tr>
  </thead>
			<?php
				if ( have_posts() ) : ?>

					<tbody>

					<?php while ( have_posts() ) : the_post();
					//Establish If we need to build a new row

					$tags = get_tags();
foreach ( $tags as $tag ) {
echo '<tr>';
    echo '<td>' . $tag->name . '</td>';
	    echo '<td>' . tag_description( $tag ) . '</td>';
    $tag_query = new WP_Query( array(
                              'tag_id' => $tag->term_id,
                              'posts_per_page' => 2,
                              'no_found_rows' => true,
                               ) );
        while ( $tag_query->have_posts() ) : $tag_query->the_post();
        // Do stuff
        endwhile; wp_reset_postdata();
	echo '</tr>';
    }

					endwhile;

				else :

					echo the_tags( '<tr><td>', '</td><td>' . tag_description() . '</td></tr><tr><td>');
					echo '</td></tr>';

				endif;
//TODO placed to pass the the them checker test
wp_link_pages();
			?>
					 </tbody>
				</table>
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
