
<nav class="top-bar" data-topbar>
	<ul class="title-area">
		<li class="name">
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		</li>
		<li class="toggle-topbar menu-icon">
			<a href="#"><span>menu</span></a>
		</li>
<!-- TODO insert tagline
		<li class="name">
			<h5><?php bloginfo('description'); ?></h5>
		</li>
-->
	</ul>
	<section class="top-bar-section">
		<?php
			wp_nav_menu(
				array(
					'menu' => 'Primary Site Navigation',
					'container' => 'div',
					'container_class' => 'top-bar-section',
					'container_id' => '',
					'menu_class' => 'right',
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
	</section>
</nav>
