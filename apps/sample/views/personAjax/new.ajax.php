<form action='/personAjax/create.ajax' method='post'>
<?= render_arr('person/personform', array('person'=>$new_person)) ?>
<?= html_button('createperson', 'Add Person') ?>
</form>