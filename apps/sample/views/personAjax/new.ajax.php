<form action='/personAjax/create.ajax' method='post'>
<?php echo  render_arr('person/personform', array('person'=>$new_person)) ?>
<?php echo  html_button('createperson', 'Add Person') ?>
</form>