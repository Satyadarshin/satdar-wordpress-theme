
		<footer class="row">
			<div class="large-12 columns">
			<hr/>
				<div class="row">
					<div class="large-6 columns">
						<p><?php bloginfo('name'); ?> :: &copy; <?php echo date('Y'); ?></p>
					</div>
					<div class="large-6 columns">
				<?php
					wp_nav_menu(
						array(
						'theme_location' => 'secondary',
						'container' => '',
						'menu_class' => 'inline-list right'
						)
					);
				?>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
 
		<script>
			document.write('<script src=js/vendor/' +
			('__proto__' in {} ? 'zepto' : 'jquery') +
			'.js><\/script>')
		</script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/templates/jquery.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/foundation.js"></script>
		<script>
			$(document).foundation();
			var doc = document.documentElement;
			doc.setAttribute('data-useragent', navigator.userAgent);
		</script>

	</body>

</html>
