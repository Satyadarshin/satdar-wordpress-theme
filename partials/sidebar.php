<?php
/*
* Optional sidebar.
*
* @package SatDar
*/
?>

<div class="row">
    <?php if(is_active_sidebar('sidebar') || is_active_sidebar('sidebar') ): ?>
	<div class="large-12 columns" >
         <?php dynamic_sidebar('sidebar'); ?>
    </div>
    <?php endif; ?>
</div>

