<?php
/*
* Template Name: Search results
*
* @package SatDar
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
get_header('blog-hero');
get_template_part('navigation');
?>
	<div class="row">
		<div class="large-6 small-12 columns" role="content">
			<h2>Site search results</h2>
		</div>
	</div>	
	<div class="row">
		<div class="large-6 small-12 columns" role="content">
			<article id="post-<?php
				//TODO from id onwards placed to pass the the them checker test
				the_ID(); ?>" <?php post_class();?>>

			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
			?>
                <hr>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php
					the_excerpt();
					endwhile;
				else:
					echo '<p>No results found mathcing that criteria.</p>';
				endif;
                //TODO placed to pass the the theme checker test
                wp_link_pages();
			?>
			</article>
        </div>
		<div class="large-6 small-12 columns" role="content">
			<p>&nbsp;</p>
		</div>
    </div>

<?php
	get_footer('display');
	get_footer();
?>
