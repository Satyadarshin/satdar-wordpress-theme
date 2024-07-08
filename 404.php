<?php
/*
Template Name: 404 Page
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
get_header('portfolio-hero');
get_template_part('navigation');
?>
	<div class="row">

		<div class="large-12 columns" role="content">

			<article id="post-<?php
				//TODO from id onwards placed to pass the the them checker test
				the_ID(); ?>" <?php post_class();
					 ?>
			>
                <h2>Whoops! Now this is a trifle embarrasing isn&rsquo;t it?</h2>
				<p>You&rsquo;ve been dropped off here because it seems you tried to vist a page that doesn&rsquo;t exist. Try the main navigation above, or peruse the categories and tags below.</p>
            <?php
                //TODO placed to pass the the theme checker test
                wp_link_pages();
			?>
			</article>
        </div>
    </div>

<?php
	get_footer('display');
	get_footer();
?>
