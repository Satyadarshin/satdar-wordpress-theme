<?php
/**
 * Template Name: Articles
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
					endwhile;
					//TODO Function placed to pass the the theme checker test. Neeed to get it to actually work.
					wp_link_pages();
					else :
					echo '<div class="row"><div class="large-12 columns">'; //Open the column / row
					echo '<p>This page has no content</p>';
					echo '</div></div>'; //Close the column / row

					endif;
					?>
				</div>
			<div class="small-12 medium-4 large-4 columns" >
				<div class="static_page_sidebar">
					<?php
						if ( has_post_thumbnail() ) { 
							the_post_thumbnail( 'project-post_detail' );
							//If there's a caption for the image, output that.
							echo (get_post( get_post_thumbnail_id() )->post_excerpt == true ) ? '<p class="project_thumb_detail_caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</p>' : '';
						} 
						else {
							echo '<img src="http://placehold.it/500x500&amp;text=Article" />';
						}
					?>
					<h3>Style guides</h3>
					<p>If you do a lot of writing or editing, I recommend keeping a copy of either the <a href="https://www.amazon.co.uk/Oxford-Style-Manual-University-Press/dp/0198767250/">Oxford Style Manual</a>, or the <a href="https://www.amazon.co.uk/Chicago-Manual-Style-Univ/dp/022628705X/">Chicago Manual of Style</a> to hand.</p>
				</div>
			</div>			
		</article>
	</div>
</div>
<?php
	get_footer('display');
	get_footer();
?>
