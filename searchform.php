<li class="has-form">
	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<div class="row collapse">
			<div class="large-8 small-9 columns">
				<label>
					<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
					<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
				</label>
			</div>
			<div class="large-4 small-3 columns">
				<input type="submit" class="alert button expand" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
			</div>
		</div>
	</form>
</li>

