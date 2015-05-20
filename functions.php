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

function menu_set_dropdown( $sorted_menu_items, $args ) {
    $last_top = 0;
    foreach ( $sorted_menu_items as $key => $obj ) {
        // it is a top lv item?
        if ( 0 == $obj->menu_item_parent ) {
            // set the key of the parent
            $last_top = $key;
        } else {
            $sorted_menu_items[$last_top]->classes['dropdown'] = 'hasdropdown';
        }
    }
    return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );

//Removes default id from nav menu
//This allows the optional menu_id parameter to work in wp_nav_menu
//dd_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);


//Widget locations
function satdarWidgets() {
	register_sidebar(
		array(
			'name' => 'Upper Sidebar',
			'id' => 'sidebar1',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Lower Sidebar',
			'id' => 'sidebar2',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
}

add_action('widgets_init', 'satdarWidgets');

include('themeAdmin/SatDarAdmin.php');
?>
