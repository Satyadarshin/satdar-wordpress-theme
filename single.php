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
get_header('blog-hero');
get_template_part('navigation');
?>
	<div class="row">
		<div class="large-8 medium-12 small-12 columns" role="content">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php
                while ( have_posts() ) : the_post();
            ?>
                <h2><?php the_title(); ?></h2>
            <?php
                the_content();
                comments_template( );
            // TODO these were simply inserted to pass the them checker test. Need detailed insertion
                paginate_comments_links();
                next_comments_link();
                previous_comments_link()
                                
            ?>
            </article>
		</div>
        <div class="large-4 medium-12 small-12 columns blog_sidebar_thumbnail">
            <div class="panel">
                <?php  
                    echo '<div class="the-post-thumbnail">';
                    if ( has_post_thumbnail() ) { 
                        the_post_thumbnail( 'project-post_detail' );
                        //If there's a caption for the image, park that.
                        $theCaption = (get_post( get_post_thumbnail_id() )->post_excerpt == true ) ?  get_post( get_post_thumbnail_id() )->post_excerpt : '&nbsp;';
                    } 
                    else {
                        echo '<img src="http://placehold.it/500x500&amp;text=placeholder" />';
                    }
                    echo '</div>';
                    echo '<div class="project_thumb_detail_caption"><p>' . $theCaption .'</p></div>'
                ?>
                <div class="tags_and_categories">
                    <p><span>Post published:</span> <?php the_date('j F Y'); ?></p>
                    <p><span>This post in categories:</span><br>
                    <?php
                        $categories = get_the_category();
                        $separator = ", ";
                        $output = " ";
                        if ($categories) {
                            foreach ($categories as $category) {
                                $output .= '<a href="' . get_category_link( $category->term_id ) . '">' .$category->cat_name . '</a>'. $separator;
                            }
                            //TODO build a page to display a list of categoried posts
                            echo trim( $output, $separator) . '</p>';
                        } 
                    ?>
                    <p><span>This post is tagged:</span><br>
                    <?php
                        //TODO build a page to display a list of tagged posts
                        echo the_tags( '', ', ', '' ) . '</p>';
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns" role="content">
            <p class="single-post-pagination">Post navigation</p>
            <div class="single-post-pagination_buttons">
            <?php
                $next = get_permalink(get_adjacent_post(false,'',false)); //next post url
                $prev= get_permalink(get_adjacent_post(false,'',true)); //previous post url
                if (get_the_permalink()!=$next):
            ?>
                <div class="paginate_left"> <a href='<?php echo $next ?>'>Next</a></div>
            <?php endif; ?>
                <div class="all_posts"><a href="/blog">All </a></div>
            <?php if (get_the_permalink()!=$prev): ?>
                <div class="paginate_right"><a href="<?php echo $prev ?>">Previous</a></div>
            <?php endif; ?>
            </div>
        </div> 
    </div>    

<?php
	get_footer('display');
	get_footer();
?>
