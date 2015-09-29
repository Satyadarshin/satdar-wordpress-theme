<div class="row">
	<div class="large-3 columns" data-equalizer>

	<?php if(is_active_sidebar('sidebar1')): ?>
		<div class="panel" data-equalizer-watch>
		<?php dynamic_sidebar('sidebar1'); ?>
		</div>
	<?php endif; ?>

	<?php if(is_active_sidebar('sidebar2')): ?>
		<div class="panel" data-equalizer-watch>
		<?php dynamic_sidebar('sidebar2'); ?>
		</div>
	<?php endif; ?>

	<?php if(is_active_sidebar('sidebar3')): ?>
		<div class="panel" data-equalizer-watch>
			<?php dynamic_sidebar('sidebar3'); ?>
		</div>
	<?php endif; ?>

	</div>
	<div class="large-3 columns" data-equalizer>

	<?php if(is_active_sidebar('sidebar4')): ?>
		<div class="panel" data-equalizer-watch>
			<?php dynamic_sidebar('sidebar4'); ?>
		</div>
	<?php endif; ?>

	<?php if(is_active_sidebar('sidebar5')): ?>
		<div class="panel" data-equalizer-watch>
			<?php dynamic_sidebar('sidebar5'); ?>
		</div>
	<?php endif; ?>

	<?php if(is_active_sidebar('sidebar6')): ?>
		<div class="panel" data-equalizer-watch>
			<?php dynamic_sidebar('sidebar6'); ?>
		</div>
	<?php endif; ?>

	</div>
</div>
