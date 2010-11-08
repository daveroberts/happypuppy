<form action='/person/create' method='post'>
<?php echo  render_arr('person/personform', array('person'=>$person)) ?>
<?php echo  html_button('createperson', 'Add Person') ?>
</form>
