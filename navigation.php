<div class="contain-to-grid sticky">
	<nav class="top-bar" data-topbar role="navigation"  data-options="sticky_on: large">
		<ul class="title-area">
			<li class="name"></li>
			 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>
		<section class="top-bar-section">
<?php
	wp_nav_menu(
		array(
			'menu' => 'Primary Site Navigation',
			'container' => '',
			'container_class' => '',
			'container_id' => '',
			'menu_class' => 'left',
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
			<ul class="right">
			<?php get_search_form(); ?>
			</ul>
		</section>
	</nav>
</div>
