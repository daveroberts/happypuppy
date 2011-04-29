<form action='/sample/person/create' method='post'>
<?php echo  PHPRender::render_arr('person/personform', array('person'=>$person)) ?>
<?php echo  submit('Add Person') ?>
</form>
