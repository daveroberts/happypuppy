<?php echo form_start('self', array("method"=>"get")); ?>
<?php echo textbox($pg->searchName(), $s) ?>
<?php echo submit("Search") ?>
<?php echo form_end(); ?>

<div id="products">
	<?php echo PHPRender::render_arr('/Product/_products', array('products'=>$products, 'pg'=>$pg)) ?>
</div>