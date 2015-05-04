
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
		<script src="<?php echo bloginfo('template_directory'); ?>/bower_components/js/jquery.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/bower_components/js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
		<script src="<?php echo bloginfo('template_directory'); ?>/bower_components//js/templates/jquery.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/bower_components/foundation.js"></script>
		<script>
			$(document).foundation();
			var doc = document.documentElement;
			doc.setAttribute('data-useragent', navigator.userAgent);
		</script>

	</body>

</html>

<!--
lifted from banded, workspace, store, sidebar

		<footer class="row">
			<div class="large-12 columns">
				<hr/>
				<div class="row">
					<div class="large-6 columns">
						<p>&copy; Copyright no one at all. Go to town.</p>
					</div>
					<div class="large-6 columns">
						<ul class="inline-list right">
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 2</a></li>
							<li><a href="#">Link 3</a></li>
							<li><a href="#">Link 4</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>


