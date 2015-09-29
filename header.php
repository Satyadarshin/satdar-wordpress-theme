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
		<?php //TODO store the lines above <title> as variable options ?>
		<meta name="p:domain_verify" content="966fcaad9bea4b0feecdbd184905d579"/>  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/slick_slideshow/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/slick_slideshow/slick/slick-theme.css"/>
		<!-- Check out the list of icons http://zurb.com/playground/foundation-icon-fonts-3 -->
		<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bower_components/modernizr/modernizr.js"></script>
	</head>
	
	<body <?php body_class(); ?> >


