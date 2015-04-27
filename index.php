<?php

get_header();
if ( have_posts() ) : ?>
	<div class="row">
		<div class="large-9 columns" role="content">
<?php while ( have_posts() ) : the_post(); ?>

			<article>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>
				<div class="row">
	              	<div class="large-6 columns">
						<?php the_content(); ?>
	 				</div>
              		<div class="large-6 columns">
                		<img src="http://placehold.it/400x240&text=[img]"/>
              		</div>
            	</div>
			</article>
			<hr />
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
