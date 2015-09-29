<div class="row">

<?php if(is_active_sidebar('sidebar4')): ?>
	<div class="large-12 columns" >
		<div class="panel">
			<?php dynamic_sidebar('sidebar4'); ?>
		</div>
	</div>
<?php endif; ?>

</div>
<div class="row" data-equalizer>

<?php if(is_active_sidebar('sidebar5')): ?>
	<div class="large-4 columns" >
		<div class="panel" data-equalizer-watch>
			<?php dynamic_sidebar('sidebar5'); ?>
		</div>
	</div>
<?php endif; ?>

<?php if(is_active_sidebar('sidebar6')): ?>
	<div class="large-4 columns">
		<div class="panel" data-equalizer-watch>
			<?php dynamic_sidebar('sidebar6'); ?>
		</div>
	</div>
<?php endif; ?>

<?php if(is_active_sidebar('sidebar7')): ?>
	<div class="large-4 columns">
		<div class="panel" data-equalizer-watch>
			<?php dynamic_sidebar('sidebar7'); ?>
		</div>
	</div>
<?php endif; ?>

</div>
