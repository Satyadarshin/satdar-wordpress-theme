<div class="contain-to-grid">



	<nav class="top-bar" data-topbar>
		<ul>
			<li class="toggle-topbar menu-icon">
				<a href="#"><span>menu</span></a>
			</li>
		</ul>
		<section class="top-bar-section">
			<?php
				wp_nav_menu(
					array(
						'menu' => 'Primary Site Navigation',
						'container' => 'div',
						'container_class' => 'top-bar-section',
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
		</section>
	</nav>
</div>
