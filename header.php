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
		<meta name="p:domain_verify" content="966fcaad9bea4b0feecdbd184905d579"/>  
        <link type="text/plain" rel="author" href="http://www.satyadarshin.com/humans.txt" />
		<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
		<!-- Check out the list of icons http://zurb.com/playground/foundation-icon-fonts-3 -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5d6364">
        <meta name="theme-color" content="#ffffff">
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bower_components/modernizr/modernizr.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script> <!--Google recaptcha test; TODO add to a plugin -->
	</head>
	
	<body <?php body_class(); ?>>


