<?php echo $f->hiddenid() ?>
<div>
	<?php echo $f->start("update") ?>
		<?php echo PhpRender::render('game/_form', "f", $f) ?>
		<div><?php echo $f->submit("Update G") ?></div>
	<?php echo $f->end() ?>
</div>
<div>
	<?php echo link_to("Back to list", "/game/list") ?>
</div>