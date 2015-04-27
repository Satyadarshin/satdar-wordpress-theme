
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
 
    <script src="wp-content/themes/SatDar/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="wp-content/themes/SatDar/bower_components/foundation/js/foundation.min.js"></script>
    <script src="wp-content/themes/SatDar/js/app.js"></script>
<script type="text/javascript">
				$( document ).ready( function() { $('.nav-bar').find('ul').removeAttr('id') });
			</script>
  </body>
</html>