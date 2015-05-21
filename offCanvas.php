<?php
/*
Template Name: Off Canvas
http://foundation.zurb.com/templates/marketing.html
*/

get_header();
?>

<div class="off-canvas-wrap" data-offcanvas>

  <div class="inner-wrap">

    <nav class="tab-bar">

      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      </section>

      <section class="right-small">
        <a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

    </nav>

    <aside class="left-off-canvas-menu">
		<?php
			wp_nav_menu(
				array(
					'menu' => 'Primary Site Navigation',
					'container' => 'ul',
					'container_class' => '',
					'container_id' => '',
					'menu_class' => 'off-canvas-list',
					'menu_id' => '',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'depth' => 0,
					'walker' => new SatDar_Walker_Nav_Menu(),
					'theme_location' => 'primary'
				)
			);
		?>
    </aside>

    <aside class="right-off-canvas-menu">
      <?php get_sidebar('right'); ?>
    </aside>

    <section class="main-section">

		<div class="row">
			<div class="large-4 columns">
				<div class="panel">
					<p><img src="http://placehold.it/300x300"/></p>
				</div>
			</div>
			<div class="large-8 columns">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
			?>
				<h2><?php the_title(); ?></h2>
				<h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>
			<?php
					the_content();
					endwhile;

				else :

					echo '<p>No content found</p>';

				endif;
			?>
			</div>
		</div>

 		<?php
	get_footer('display');
		?>
    </section>

  <a class="exit-off-canvas"></a>

  </div>

</div>

		<?php
	get_footer();
		?>
