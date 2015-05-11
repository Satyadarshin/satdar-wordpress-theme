
<nav class="top-bar" data-topbar>
	<ul class="title-area">
		<li class="name">
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		</li>
		<li class="toggle-topbar menu-icon">
		<a href="#"><span>menu</span></a>
		</li>
<!-- TODO inasert tagline
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

<?php
//sandbox code
/*

<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name">
			<h1><a href="#">Top Bar Title</a></h1>
			</li>
			<li class="toggle-topbar menu-icon">
			<a href="#"><span>menu</span></a>
			</li>
		</ul>
		<section class="top-bar-section">
			<ul class="right">
				<li class="divider"></li>
				<li class="has-dropdown">
					<a href="#">Main Item 1</a>
					<ul class="dropdown">
						<li><label>Section Name</label></li>
						<li class="has-dropdown">
							<a class="" href="#">Has Dropdown, Level 1</a>
							<ul class="dropdown">
								<li><a href="#">Dropdown Options</a></li>
								<li><a href="#">Dropdown Options</a></li>
								<li><a href="#">Level 2</a></li>
								<li><a href="#">Subdropdown Option</a></li>
								<li><a href="#">Subdropdown Option</a></li>
								<li><a href="#">Subdropdown Option</a></li>
							</ul>
						</li>
						<li><a href="#">Dropdown Option</a></li>
						<li><a href="#">Dropdown Option</a></li>
						<li class="divider"></li>
						<li><label>Section Name</label></li>
						<li><a href="#">Dropdown Option</a></li>
						<li><a href="#">Dropdown Option</a></li>
						<li><a href="#">Dropdown Option</a></li>
						<li class="divider"></li>
						<li><a href="#">See all →</a></li>
					</ul>
				</li>
				<li class="divider"></li>
				<li><a href="#">Main Item 2</a></li>
				<li class="divider"></li>
				<li class="has-dropdown">
					<a href="#">Main Item 3</a>
					<ul class="dropdown">
						<li><a href="#">Dropdown Option</a></li>
						<li><a href="#">Dropdown Option</a></li>
						<li><a href="#">Dropdown Option</a></li>
						<li class="divider"></li>
						<li><a href="#">See all →</a></li>
					</ul>
				</li>
			</ul>
		</section>
	</nav>
* copied in most templates ...

	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name">
			<h1><a href="#">Top Bar Title</a></h1>
			</li>
			<li class="toggle-topbar menu-icon">
			<a href="#"><span>menu</span></a>
			</li>
		</ul>
		<section class="top-bar-section">
			<ul class="right">
				<li class="divider"></li>
				<li class="has-dropdown">
					<a href="#">Main Item 1</a>
					<ul class="dropdown">
						<li><label>Section Name</label></li>
						<li class="has-dropdown">
							<a class="" href="#">Has Dropdown, Level 1</a>
							<ul class="dropdown">
								<li><a href="#">Dropdown Options</a></li>
								<li><a href="#">Dropdown Options</a></li>
								<li><a href="#">Level 2</a></li>
								<li><a href="#">Subdropdown Option</a></li>
								<li><a href="#">Subdropdown Option</a></li>
								<li><a href="#">Subdropdown Option</a></li>
							</ul>
						</li>
						<li><a href="#">Dropdown Option</a></li>
						<li><a href="#">Dropdown Option</a></li>
						<li class="divider"></li>
						<li><label>Section Name</label></li>
						<li><a href="#">Dropdown Option</a></li>
						<li><a href="#">Dropdown Option</a></li>
						<li><a href="#">Dropdown Option</a></li>
						<li class="divider"></li>
						<li><a href="#">See all →</a></li>
					</ul>
				</li>
				<li class="divider"></li>
				<li><a href="#">Main Item 2</a></li>
				<li class="divider"></li>
				<li class="has-dropdown">
					<a href="#">Main Item 3</a>
					<ul class="dropdown">
						<li><a href="#">Dropdown Option</a></li>
						<li><a href="#">Dropdown Option</a></li>
						<li><a href="#">Dropdown Option</a></li>
						<li class="divider"></li>
						<li><a href="#">See all →</a></li>
					</ul>
				</li>
			</ul>
		</section>
	</nav>
*/

/*
* extracted from marketing alternative
	<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<li class="name"><h1><a href="#">My Site</a></h1></li>
				<li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
			</ul>
			<section class="top-bar-section">
				<ul class="right">
					<li><a href="#">Nav Button</a></li>
					<li><a href="#">Nav Button</a></li>
					<li><a href="#">Nav Button</a></li>
					<li><a href="#">Nav Button</a></li>
					<li><a href="#">Nav Button</a></li>
					<li><a href="#">Nav Button</a></li>
				</ul>
			</section>
		</nav>
/*

					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
					<h5><?php bloginfo('description'); ?></h5>
					<hr/>
				</div>
			</div>
*/
?>
