

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
		<div class="small-12 medium-6 large-5 columns" >
			<p class="footer-links">
				<a href="">test</a>
				<a href="">test</a>
				<a href="">test</a>
			</p>
		</div>

		<div class="small-12 medium-12 large-3 columns">
			<?php
			wp_nav_menu(
				array(
				'theme_location' => 'secondary',
				'container' => 'ul',
				'menu_class' => 'contact'
				)
			);
		?>
		</div>

		<div class="large-4 columns">
			<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
			<ul class="inline-list social">
				<a href="https://facebook.com/satyadarshin.design"><i class="fi-social-facebook"></i></a>
				<a href="https://uk.linkedin.com/in/satyadarshin"><i class="fi-social-linkedin"></i></a>
				<a href="https://uk.pinterest.com/satyadarshin/"><i class="fi-social-pinterest"></i></a>
		  </ul>
		</div>
	</div>
</footer>
