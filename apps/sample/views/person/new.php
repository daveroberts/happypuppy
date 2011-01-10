<form action='/person/create' method='post'>
<?php echo  render_arr('person/personform', array('person'=>$person)) ?>
<?php echo  submit('Add Person') ?>
</form>
