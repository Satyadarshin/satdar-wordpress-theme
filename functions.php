<?php

require_once('satdar-nav-menu.php');

function satDar_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'satDar_resources');

//Register navigation menus
register_nav_menus(
	array(
		'primary' => __( 'Primary Site Navigation' ),
		'secondary' => __( 'Secondary Site Navigation' ),
	)
);

//Removes default id from nav menu
//This allows the optional menu_id parameter to work in wp_nav_menu
//dd_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
?>
