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
    <div class="large-9 columns" role="content">
        <article id="post-<?php
            //TODO from id onwards placed to pass the the theme checker test
            the_ID(); ?>" <?php post_class();?>
        >
        <?php
            if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
            <div class="row post_excerpt">
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
                    <?php the_excerpt(); ?>
                </div>
            </div>

        <?php
           endwhile;
            else :
               echo '<p>Sorry buddy, no posts so far.</p>';
            endif;
        ?>
        </article>
    </div>
    <div class="large-3 columns">
        <div class="panel">
        <p>Post categories</p>
            <?php
            $categories = get_the_category();
				$separator = ", ";
				$output = " ";
				if ($categories) {
					foreach ($categories as $category) {
						$output .= '<a href="' . get_category_link( $category->term_id ) . '">' .$category->cat_name . '</a>'. $separator;
					}
                    //TODO build a page to display a list of categoried posts
					echo '<p>' . trim( $output, $separator) . '</p>';
				} ?>
                <p>Post tags</p>
                <?php
                //TODO build a page to display a list of tagged posts
				echo '<p>' . the_tags( 'Tags: ', ', ', '' ) . '</p>';
        ?>
        </div>      
    </div>
</div>
<?php
	get_footer('display');
	get_footer();
?>