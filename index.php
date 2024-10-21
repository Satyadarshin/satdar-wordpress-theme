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
get_header('blog-hero');
get_template_part('navigation');
?>
<div class="row">
    <div class="blog_posts large-12 columns" role="content">
        <article id="post-<?php the_ID(); ?>" <?php post_class();?>>
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
                            echo '<img src="http://placehold.it/400x400&amp;text=placeholder" />';
                        }
                        ?>
                    </div>
                    <div class="large-9 columns">
                        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                        <?php 
                            echo   '<p class="post_meta"><span class="post_date">';
                            the_date('j F Y');
                            echo '</span> / <span class="post_date">';
                            the_category( ', ') ;
                            echo   '</span></p>';
                            the_excerpt(); 
                        ?>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        ?>
        <!-- Start the pagination functions after the loop. -->
        <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
        <!-- End the pagination functions after the loop. -->
        <?php    
        else :
            echo '<p>Sorry buddy, no posts in this category so far.</p>';
            endif;
        ?>      
        </article>
        <div class="row related-post-categories">
                <div class="large-12 columns">
                    <div class="panel">
                        <div class="row">
                            <div class="large-6 columns">
                                <h3>Post category list</h3>
                                <?php 
                                    $categories = get_categories();
                                    echo '<p>';
                                    foreach($categories as $category) {
                                        echo ' &bull; <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                                    }                          
                                    echo '</p>';
                                ?>
                            </div>
                            <div class="large-6 columns">
                                <h3>Post tags</h3>
                                <p>
                                <?php  
                                    $tags = get_tags();
                                    if ( $tags ) :
                                        foreach ( $tags as $tag ) : ?>
                                            &bull; <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    </div>
</div>
<?php
	get_footer('display');
	get_footer();
?>