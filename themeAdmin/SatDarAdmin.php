<?php
add_action('admin_menu', 'SatDar_theme_admin_init');

function SatDar_theme_admin_init() {
	$page_title = "Theme Control Panel";
	$menu_title = "Theme Options";
	$capability = "administrator";
	$menu_slug = "satdar-theme-settings";
	$function = "SatDar_theme_admin";
	$icon_url = get_template_directory_uri();
	add_theme_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url );
}

function SatDar_theme_admin() {
	$current_user = wp_get_current_user();
	$user_id = $current_user->ID;
	if ( !user_can( $user_id, 'create_users')):
		return false;
	else:
?>

<div>
	<h2>SatDar Theme Control Panel</h2>
	<div id="adminPanel">
		<ul>
			<li>Level 1
				<ul>
					<li>option 1:1</li>
					<li>option 1:2</li>
					<li>option 1:3</li>
				</ul>
			</li>
			<li>Level 2
				<ul>
					<li>option 2:1</li>
					<li>option 2:2</li>
					<li>option 2:3</li>
				</ul>
			</li>
		</ul>
	</div>
</div>

<?php
	endif;
}
?>
