<?php echo $f->start('create') ?>
	<?php echo PHPRender::render_arr('person/personform', array('person'=>$person)) ?>
	<?php echo $f->submit('Add Person') ?>
<?php echo $f->end() ?>