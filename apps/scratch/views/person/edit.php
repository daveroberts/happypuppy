<div>
	<?php echo $f->start("update") ?>
		<?php echo PhpRender::render('person/_form', "f", $f) ?>
		<div><?php echo $f->submit("Update Person") ?></div>
	<?php echo $f->end() ?>
</div>
<div>
	<?php echo link_to("Back to list", "list") ?>
</div>