<?php
/*
Template Name: Gallery
*/

get_header();
get_header('blog-hero');
get_template_part('navigation');
?>
	<div class="row">
		<div class="large-12 columns" role="content">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
				<div class="large 12 columns">
					<?php
					the_content();
					endwhile;
					//TODO Function placed to pass the the theme checker test. Neeed to get it to actually work.
					wp_link_pages();
					else :
					echo '<div class="row"><div class="large-12 columns">'; //Open the column / row
					echo '<p>This gallery has no Images yet</p>';
					echo '</div></div>'; //Close the column / row
					endif;
					?>
				</div>
            </article>
		</div>
    </div>
</div>
<?php
	get_footer('display');
	get_footer();
?>
