<?php
/**
 * The template for displaying media files, ;'/
 *
 * @package WordPress

 */

get_header();
get_header('blog-hero');
get_template_part('navigation');
?>
	<div class="row">
		<div class="large-12 columns" role="content">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php
                while ( have_posts() ) : the_post();
            ?>
                <h2>Artwork spotlight</h2>
                <div class="attachment-spotlight">
                   <h3><?php the_title(); ?></h3> 
                    <p> <? 
                    echo wp_kses_post( wp_get_attachment_caption() );   
                    ?></p>
                </div>
                <figure class="wp-block-image attachment-page">
                    <?php
                        echo wp_get_attachment_image( get_the_id(), 'full' );
                    ?>
                </figure>
            <?php endwhile; ?>
            </article>
		</div>
      
</div>
<?php
	get_footer('display');
	get_footer();
?>
