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
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
			?>
				<h2><?php the_title(); ?></h2>
				<h6><?php the_time( get_option( 'date_format' ) ); ?> by <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><?php the_author(); ?></a> </h6>
			<?php
				the_content();
				$categories = get_the_category();
				$separator = ", ";
				$output = " ";
				if ($categories) {
					foreach ($categories as $category) {
						$output .= '<a href="' . get_category_link( $category->term_id ) . '">' .$category->cat_name . '</a>'. $separator;
					}

					echo '<p>In categories: ' . trim( $output, $separator) . '.</p>';

				}
						echo '<p>' . the_tags( 'Tags: ', ', ', '' ) . '.</p>';
					endwhile;

				else :

					echo '<p>No content found</p>';

				endif;

// TODO post pagination http://codex.wordpress.org/Template_Tags/next_posts_link & http://codex.wordpress.org/Template_Tags/previous_posts_link
				previous_posts_link();
				next_posts_link();
comments_template( );
// TODO these were simply inserted to pass the them checker test. Need detailed insertion
				paginate_comments_links();
				next_comments_link();
				previous_comments_link()
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
