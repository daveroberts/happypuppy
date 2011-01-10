<?php echo $f->start('update') ?>
<?php echo hidden('person[id]', $person['id']); ?>
<?php echo PhpRender::render('person/personform', 'person', $person) ?>
<?php echo submit('Edit Person') ?>
<div><?php echo  link_to("Cancel", "/person/show/".$person['id']) ?></div>
<?php echo $f->end() ?>
