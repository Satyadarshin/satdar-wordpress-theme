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
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bower_components/modernizr/modernizr.js"></script>
	</head>
	
	<body <?php body_class(); ?>

		  >

		<!--
		 <div class="row">
			 <div class="large-12 columns">
				 <div class="multiple-items">
					 <div><img src="http://www.satyadarshin.com/wp-content/uploads/IMG_4049-e1407710817576.jpg" /></div>
					<div><img src="http://www.satyadarshin.com/wp-content/uploads/IMG_4033.jpg" /></div>
					 <div><img src="http://www.satyadarshin.com/wp-content/uploads/IMG_4329-e1407710792858.jpg" /></div>
					 <div><img src="http://www.satyadarshin.com/wp-content/uploads/IMG_3972.jpg" /></div>
				 </div>
			 </div>
-->
  </div>

