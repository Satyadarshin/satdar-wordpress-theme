
		<?php wp_footer(); ?>
 
		<script>
			var path = '<?php echo bloginfo('template_directory'); ?>/bower_components/foundation/';
			document.write('<script src=' + path +'js/vendor/' +
			('__proto__' in {} ? 'zepto' : 'jquery') +
			'.js><\/script>')
		</script>
		<script src="<?php echo bloginfo('template_directory'); ?>/bower_components/jquery/dist/jquery.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/bower_components/foundation/js/foundation.min.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/bower_components/foundation/js/foundation/foundation.topbar.js"></script>
		<script>
			$(document).foundation();
		</script>
		<script src="<?php echo bloginfo('template_directory'); ?>/bower_components/js/templates/jquery.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/bower_components/foundation.js"></script>
		<script>
			$(document).foundation();
			var doc = document.documentElement;
			doc.setAttribute('data-useragent', navigator.userAgent);
		</script>

	</body>

</html>


