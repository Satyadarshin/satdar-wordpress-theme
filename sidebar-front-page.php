<div class="row">
    
<?php if(is_active_sidebar('sidebar4a') || is_active_sidebar('sidebar4b') ): ?>
	<div class="large-12 columns" >
        <div class="row" data-equalizer>
            <div class="large-6 small-12 columns" >
                <div class="panel" data-equalizer-watch>
                    <?php dynamic_sidebar('sidebar4a'); ?>
                </div>
            </div>
            <div class="large-6 small-12 columns" >
                <div class="panel" data-equalizer-watch>
                    <?php dynamic_sidebar('sidebar4b'); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

</div>
<div class="row" data-equalizer>

<?php if(is_active_sidebar('sidebar6')): ?>
	<div class="large-12 columns">
		<div class="panel" data-equalizer-watch>
			<?php dynamic_sidebar('sidebar6'); ?>
		</div>
	</div>
<?php endif; ?>

</div>
