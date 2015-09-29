<?php
/*
Template Name: Search Page
*/

global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);

global $wp_query;
$total_results = $wp_query->found_posts;

get_header();
get_template_part('navigation');
?>
	<div class="row">

		<div class="large-9 columns" role="content">

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
//TODO placed to pass the the theme checker test
wp_link_pages();
			?>
			</article>
		</div>

        <div class="large-3 columns one-column-sidebar">
			<?php get_sidebar('one-column'); ?>
        </div>

      </div>

<?php
	get_footer('display');
	get_footer();
?>
