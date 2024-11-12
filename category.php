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
                    <div class="blog_category">
                        <?php
                            echo '<p class="the_post_category">Post category</p>';
                            echo '<h2>'; // Didn't seem able to concatenate with the nexytline?!
                            echo single_cat_title() . '</h2>';
                            echo '<p>' . category_description() .'</p>';
                        ?>
                    </div>
                </div>
                <div class="large-8 columns">
                    <?php
                        if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                    ?>
                        <div class="post_excerpt">
                                <div class="row ">
                                <div class="large-3 columns" >
                                <?php 
                                    if ( has_post_thumbnail() ) {        
                                        the_post_thumbnail( 'project-post_detail' );
                                        //If there's a caption for the image, output that.
                                    } 
                                    else {
                                        echo '<img src="'. get_stylesheet_directory_uri() .'/images/image-placeholder.jpg" />';
                                    }
                                    ?>
                                </div>
                                <div class="large-9 columns">
                                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                    <?php 
                                        echo '<p class="post_meta"><span class="post_date">';
                                        the_date('j F Y');
                                        echo '</span> / <span class="post_date">';
                                        the_category( ', ') ;
                                        echo '</span></p>';
                                        the_excerpt(); 
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                        else:
                        echo '<p>Sorry buddy, no posts in this category so far.</p>';
                        endif;
                    ?>
                </div>
            </div>
            <div class="row related-post-categories">
                <div class="large-12 columns">
                    <div class="panel">
                        <div class="row">
                            <div class="large-12 columns">
                                <h3>More post categories</h3>
                                <?php
                                $categories = get_categories();
                                    echo '<p>';
                                    foreach($categories as $category) {
                                        echo ' &bull; <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                                    }                          
                                    echo '</p>';
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
