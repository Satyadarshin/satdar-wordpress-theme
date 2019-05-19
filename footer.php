<?php wp_footer(); ?>
		<script>
			 /*
			 * TODO determine the purpose of this Zepto call
			var path = '<?php //echo esc_url( get_template_directory_uri() ); ?>/bower_components/foundation/';
			document.write('<script src=' + path +'js/vendor/' +
			('__proto__' in {} ? 'zepto' : 'jquery') +
			'.js><\/script>')
			*/
		</script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/min/app-min.js"></script>
	</body>
</html>