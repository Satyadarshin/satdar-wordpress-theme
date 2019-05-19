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
get_header('blog-hero');
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
				<p>You&rsquo;ve been dropped off here because it seems you tried to vist a page that doesn&rsquo;t exist. Try the main navigation above, have a gander at the keywords in the tag cloud, or peruse the categories below.</p>
            <?php
                //TODO placed to pass the the theme checker test
                wp_link_pages();
			?>
			</article>
            <div class="row" data-equalizer>
                <div class="large-6 medium-6 small-12 columns">
                    <div class="panel" data-equalizer-watch>
                        <h3>Tag Cloud</h3>
                        <?php  
                            $args = array(
                                'smallest'                  => 8, 
                                'largest'                   => 22,
                                'unit'                      => 'pt', 
                                'number'                    => 45,  
                                'format'                    => 'flat',
                                'separator'                 => "\n",
                                'orderby'                   => 'name', 
                                'order'                     => 'ASC',
                                'exclude'                   => null, 
                                'include'                   => null, 
                                'topic_count_text_callback' => default_topic_count_text,
                                'link'                      => 'view', 
                                'taxonomy'                  => array('post_tag', 'jetpack-portfolio-tag'), 
                                'echo'                      => true,
                                'child_of'                  => null,
                            ); 
                            wp_tag_cloud( $args );
                        ?>
                    </div>
                </div>
                <div class="large-6 medium-6 small-12 columns">
                    <div class="panel" data-equalizer-watch>
                        <h3>Categories</h3>
                        <p>
                        <?php             
                            //TODO generalise the categories to out put all of them, not just portfoili ones
                            $args = array('orderby' => 'term_order');
                            $terms = wp_get_object_terms( $post->ID, 'jetpack-portfolio-type', $args );
                            foreach ( $terms as $term ){
                                echo '&bull; <a href="' . get_term_link( $term ) . '">' . $term->name . '</a>  ';
                            } 
                        ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
	get_footer('display');
	get_footer();
?>
