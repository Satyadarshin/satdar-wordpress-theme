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
get_template_part('navigation');
?>
	<div class="row">

		<div class="large-9 columns" role="content">

			<article id="post-<?php
				//TODO from id onwards placed to pass the the them checker test
				the_ID(); ?>" <?php post_class();
					 ?>
			>


		<div class="row">

			<div class="large-12 columns">
				<h2>The Error Page</h2>
				<p>Whatever link you clicked didn&rsquo;t take you where you expected, so lets give you some options.</p>
			</div>
		</div>
		<ul class="tabs" data-tab role="tablist">
  <li class="tab-title active" role="presentation"><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" aria-controls="panel2-1">Tag cloud</a></li>
  <li class="tab-title" role="presentation"><a href="#panel2-2" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-2">categories</a></li>
  <li class="tab-title" role="presentation"><a href="#panel2-3" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-3">pages</a></li>
  <li class="tab-title" role="presentation"><a href="#panel2-4" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-4">posts</a></li>
</ul>
<div class="tabs-content">
  <section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
	 <table>
	  <thead>
		<tr>
		  <th width="200">Tag</th>
		  <th>Description</th>
		</tr>
		 </thead>
		 <tbody>

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				echo the_tags( '<tr><td>', '</td><td>' . tag_description() . '</td></tr><tr><td>');
				echo '</td></tr>';
			endwhile;
		endif;
		?>
			 </tbody>
		</table>
  </section>
  <section role="tabpanel" aria-hidden="true" class="content" id="panel2-2">
    <h2>Second panel content goes here...</h2>
  </section>
  <section role="tabpanel" aria-hidden="true" class="content" id="panel2-3">
    <h2>Third panel content goes here...</h2>
  </section>
  <section role="tabpanel" aria-hidden="true" class="content" id="panel2-4">
    <h2>Fourth panel content goes here...</h2>
  </section>
</div>

<?php

//TODO placed to pass the the them checker test
wp_link_pages();
			?>
			</article>
		</div>

        <div class="large-3 columns">
			<?php get_sidebar('panels'); ?>
        </div>

      </div>

<?php
	get_footer('display');
	get_footer();
?>
