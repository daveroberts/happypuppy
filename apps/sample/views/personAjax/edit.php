<form action='/personAjax/update' method='post'>
<?php echo hidden('person[id]', $person->id); ?>
<div><?php echo  PhpRender::render_arr('personAjax/personform', array('person'=>$person)) ?></div>
<?php echo  submit('Edit Person') ?>
<div><?php echo  link_to('Cancel', '/personAjax/show/'.$person->id) ?></div>
</form>
