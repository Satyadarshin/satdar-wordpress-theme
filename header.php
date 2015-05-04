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
