

<footer class="upper_footer">
<div class="row">
		<div class="small-12 medium-4 large-4 columns">
			<p>BF Festival</p>
		</div>
		<div class="small-12 medium-4 large-4 columns">
			<p>BF GEA</p>
		</div>
		<div class="small-12 medium-4 large-4 columns">
			<p>NLBC</p>
		</div>
	</div>
</footer>

<footer class="lower_footer" >
	<div class="row">
		<div class="small-12 medium-12 large-5 columns" >
			<p class="about"><i class="fi-book-bookmark"></i> Recommended reading:</p>
			<p class="footer-links">
				<a href="http://www.smashingmagazine.com/">Smashing Magazine</a>
				<a href="http://alistapart.com/">A List Apart</a>
				<a href="http://www.sitepoint.com/">Sitepoint</a>
			</p>
		</div>

		<div class="small-12 medium-6 large-3 columns">
<?php
wp_nav_menu(
	array(
		'menu' => 'Secondary Site Navigation',
		'container' => 'false',
		'container_class' => '',
		'container_id' => '',
		'menu_id' => '',
		'menu_class' => 'contact',
		'echo' => true,
		'before' => '<p>',
		'after' => '</p>',
		'link_before' => '',
		'link_after' => '',
		'depth' => 0,
		'theme_location' => 'tertiary'
	)
);
?>
		</div>

		<div class="small-12 medium-6 large-4 columns">
			<p class="about">This website was built with <a href="https://wordpress.org/">WordPress</a>.</p>
			<p class="about"><a href="<?php echo home_url(); ?>/portfolio/satdar-wordpress-theme">SatDar</a> is an original <a href="https://codex.wordpress.org/Theme_Development">Theme</a> based on the <a href="http://foundation.zurb.com/">Foundation</a> front-end framework.</p>
			<p class="inline-list social">
				<a href="https://uk.linkedin.com/in/satyadarshin"><i class="fi-social-linkedin"></i></a>
				<a href="https://facebook.com/satyadarshin.design"><i class="fi-social-facebook"></i></a>
				<a href="https://uk.pinterest.com/satyadarshin/"><i class="fi-social-pinterest"></i></a>
				<a href="https://uk.pinterest.com/satyadarshin/"><i class="fi-social-google-plus"></i></a>
			 <p class="copyright">© Satyadarshin <? echo date('Y');?></p>
		</div>
	</div>
</footer>
