<?php
/**
 * The template for displaying portfolio taxonomy lists
 *
 * @package SatDar
 */

get_header();
get_header('portfolio-hero');
get_template_part('navigation');
?>
<div class="row">
    <div class="large-12 columns" role="content">
        <article id="post-<?php
            //TODO from id onwards placed to pass the the theme checker test
            the_ID(); ?>" <?php post_class( );
             ?>
>
            <div class="row">
                <div class="large-12 columns" >
                            <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                 ?>
                        <h2><?php the_title(); ?></h2>
                </div>
            </div>
            <div class="row">

                <div class="small-12 medium-8 large-8 columns artist-statement">
            
                <?php
                    the_content();
                    /*TODO turn this into a shortcode
                    $test = get_terms( 'jetpack-portfolio-type' );
                    
                    foreach ( $test as $test_term ) {
                        if ( $test_term->slug == 'web-development' ) 
                            //echo "yay!";
                    }*/
                    endwhile;
                    //TODO Function placed to pass the the theme checker test. Neeed to get it to actually work.
                    wp_link_pages();

                    else :
                        echo '<div class="row"><div class="large-12 columns">'; //Open the column / row
                        echo '<p>This Project has no content</p>';
                        echo '</div></div>'; //Close the column / row

                    endif;
                    
                ?>
                </div>
                <div class="small-12 medium-4 large-4 columns" >
                    <div class="panel">
                    <?php
                        if ( has_post_thumbnail() ) { 
                            the_post_thumbnail( 'project-post_detail' );
                            //If there's a caption for the image, output that.
                            echo (get_post( get_post_thumbnail_id() )->post_excerpt == true ) ? '<p class="project_thumb_detail_caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</p>' : '';
                        } 
                        else {
                            echo '<img src="http://placehold.it/500x500&amp;text=placeholder" />';
                        }
                        $args = array('orderby' => 'term_order');
                        $terms = wp_get_object_terms( $post->ID, 'jetpack-portfolio-tag', $args );
                        if ($terms == true ) {
                            echo'<div class="row"><div class="large-12 columns" >';
                            echo '<h3>Skillset</h3>';
                            echo '<p>This project demonstrates the application of';
                            $commas = ( count( $terms )-1 );
                            $i = 0;
                            foreach ( $terms as $term ){
                                $oxford_comma = null;
                                $comma = null;
                                if ( $i == $commas ) {
                                    $oxford_comma = " and ";
                                    $comma = "";
                                }
                                else {
                                    $comma = ( $i >=1 ) ? ", " : "";
                                    $i++;
                                }
                                echo $oxford_comma . ' <a href="' . get_term_link( $term ) . '">' . $term->name . '</a>' . $comma;
                            }                                        
                            echo '. Follow the links to see more projects using these skills.</p>';
                            echo '</div></div>';
                        }
                    ?>
                    </div>
                </div>
            </div>
            
            <div class="row" id="related-taxonomies">
                <div class="large-12 columns">
                    <div class="panel">
                        <div class="row">
                            <div class="large-12 columns">
                                <div class="related-project-categories">

                                    <h4>Related Project Categories</h4>
                                    <p>
                                        <?php 
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
            </div>
        </article>
    </div>
</div>
<?php
	get_footer('display');
	get_footer();
?>
