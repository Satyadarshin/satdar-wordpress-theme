<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage SatDar
 * @since SatDar 1.0
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
	
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<script src="<?php echo bloginfo('template_directory'); ?>/bower_components/modernizr/modernizr.js"></script>
	</head>
	
	<body <?php body_class(); ?>>
<?
/*
		<nav class="top-bar" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name">
					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				</li>
				<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
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
							'walker' => '',
							'theme_location' => 'primary'
						)
					);
				?>
				<ul class="left">
					<li><a href="#">Left Nav Button</a></li>
				</ul>
			</section>
		</nav>


					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
					<h5><?php bloginfo('description'); ?></h5>
					<hr/>
				</div>
			</div>

*/
