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
if ( have_posts() ) : ?>
	<div class="row">
		<div class="large-9 columns" role="content">
			<?php while ( have_posts() ) : the_post(); ?>

			<article>
				<h2><?php the_title(); ?></h2>
				<h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>
			
						<?php the_content(); ?>
	 			
			</article>
<?php
endwhile;

else :

echo '<p>No content found</p>';

endif;
?>
	</div>
        <aside class="large-3 columns">
     
          <h5>Categories</h5>
          <ul class="side-nav">
            <li><a href="#">News</a></li>
            <li><a href="#">Code</a></li>
            <li><a href="#">Design</a></li>
            <li><a href="#">Fun</a></li>
            <li><a href="#">Weasels</a></li>
          </ul>
     
          <div class="panel">
            <h5>Featured</h5>
            <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow.</p>
            <a href="#">Read More →</a>
          </div>
     
        </aside>
     
         
      </div>
<?php
get_footer();
?>

