<?php

require_once('satdar-nav-menu.php');

function satdar_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'satdar_resources');

//Register navigation menus
register_nav_menus(
	array(
		'primary' => __( 'Primary Site Navigation', 'satdar' ),
		'secondary' => __( 'Secondary Site Navigation' , 'satdar' ),
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
			'name' => 'sidebar',
			'id' => 'sidebar',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
}

add_action('widgets_init', 'satdarWidgets');

// TODO look at add theme support. These were added to pass the them checker test. https://codex.wordpress.org/Function_Reference/add_theme_support
function satdar_theme_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	
	//Support for featured images
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'project-thumb', 500, 500, array('left', 'top'));
    add_image_size( 'project-post_large', 800, 9999, array('left', 'top'));
    add_image_size( 'project-post_detail');

	// register_post_type( 'portfolio', $args );
	add_theme_support( "custom-header", array(
			'default-image'          => '',
			'random-default'         => false,
			'width'                  => 0,
			'height'                 => 0,
			'flex-height'            => false,
			'flex-width'             => false,
			'default-text-color'     => '',
			'header-text'            => true,
			'uploads'                => true,
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		)
	);
	add_theme_support( "custom-background", array(
			'default-color'          => '',
			'default-image'          => '',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => ''
		)
	);
}
add_action( 'after_setup_theme', 'satdar_theme_setup' );

// Activate Links Manager
add_filter('pre_option_link_manager_enabled', '__return_true');

//include('themeAdmin/SatDarAdmin.php');

// TODO look at setting Content Width https://codex.wordpress.org/Content_Width
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

//TODO look at the functionality here
function satdar_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
	$font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Lato:300,400,700' );
    add_editor_style( $font_url );
}
add_action( 'admin_init', 'satdar_add_editor_styles' );


function satdar_scripts() {
    //wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'heroSmootheScroll', get_template_directory_uri() . '/js/heroSmootheScroll.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'satdar_scripts' );

//Pulls out a single, latest post, for the home page.
function latest_post() {
    $args = array(
        'posts_per_page' => 1, /* how many post you need to display */
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post', /* your post type name */
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
			<div class="the_post_container">

                <div class="thumbnail-frame">
					<a href="<?php the_permalink() ?>">
					<?php
					if ( has_post_thumbnail() ) {        
					the_post_thumbnail( 'project-post_detail' );
					//If there's a caption for the image, output that.
					} else {
						echo '<img src="http://placehold.it/400x400&amp;text=placeholder" />';
					}
					?>
					</a>
				</div>
				<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
			</div>
            <?php
        endwhile;
    endif;
}

add_shortcode('lastest-post', 'latest_post');
?>
