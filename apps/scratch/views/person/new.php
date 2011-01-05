<h2>New Person</h2>
<?php echo $f->start("create") ?>
	<?php echo PhpRender::render('person/_form', "f", $f) ?>
	<div><?php echo $f->submit("Add new Person") ?></div>
<?php echo $f->end() ?>
