<?php
/**
 * Template Name: Tag Archive
 *
 * @package WordPress
 */

get_header();
get_header('portfolio-hero');
get_template_part('navigation');
?>
<div class="row">
    <div class="large-12 columns" role="content">
        <article id="post-<?php
            //TODO from id onwards placed to pass the the theme checker test
            the_ID(); ?>" <?php post_class();
             ?>>
            <div class="row">
                <div class="large-4 small-12 columns">
                    <div class="row portfolio_type">
                        <div class="large-12 small-6 columns">
                            <?php 
                                $hero = get_term_by( 'slug', $term, 'jetpack-portfolio-type');
                                //print_r($hero);
                                $the_taxonomy = $hero->taxonomy;
                                $taxonomy_name = $hero->name;
                                $taxonomy_id = $hero->term_id;
                                $taxonomy_parent = $hero->parent;
                                $term_slug = $hero->slug;
                                $term_type_image = get_option( 'project_type_image_data_' . $term_slug );
                            ?>
                        </div>
                        <div class="large-12 small-6 columns">
                            <?php
                                //Using this function ensures that title prefixes like Category: are removed
                                echo "<h2>". single_cat_title( '', false ) . "</h2>";
                            echo "<hr>";
                                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                            ?>
                        </div>
                    </div>
                </div>

                <div class="large-8 columns">
                    <div class="row">
                        <div class="large-12 columns">
                        <h4>Projects applying this skill</h4>
                        </div>
                    </div>
                <?php
                    //Initialise a counter
                    $row = 0;
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            //Establish If we need to build a new row
                            echo ($row == 0) ? '<div class="row">' : '';
                            echo '<div class="large-3 medium-6 small-12 columns">';
                            echo '<div class="project">';
                            //Check the post has a Post Thumbnail assigned to it; drop a default if not.
                            if ( has_post_thumbnail() ) { 
                                the_post_thumbnail('project-thumb');
                            } 
                            else {
                                echo '<img src="http://placehold.it/500x500"  />';
                            } 
                            echo  the_title( '<h5>', '</h5>');
                            echo '<p><a href="'; 
                            echo the_permalink();
                            echo '"></a></p>';
                            echo '</div>'; //Close the .project
                            echo '</div>'; //Close the content block
                            if ($row === 3 ) {
                              echo '</div>';
                                $row = 0;
                            } else {
                                $row++;
                            }
                        endwhile;
                    ?>
                   
                    <?php
                    else :
                        echo '<div class="row"><div class="large-12 columns">'; //Open the column / row
                        echo '<p>There are no projects associated with this category yet.</p>';
                        echo '</div></div>'; //Close the column / row

                    endif;
                    //TODO placed to pass the the theme checker test
                    //Check whether paginate_lincks() better fits the test: if not why not?
                    //wp_link_pages();
                    ?>
               
                    <!-- pagination links -->
                    <div class="row ">
                        <div class="large-12 columns">
                            <div id="pagination_bar">
                            <?php
                                echo paginate_links(
                                    array(
                                    'before_page_number' => '<i class="paginator">',
                                    'after_page_number' => '</i>',
                                    )
                                ); 
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="large-12 columns">
                    <div class="panel">
                        <div class="row">
                            <div class="large-12 columns">
                                <h3>Skills tag cloud</h3>
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
