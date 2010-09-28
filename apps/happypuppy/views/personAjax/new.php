<form action='/person/create' method='post'>
<?= render_arr('person/personform', array('person'=>$person)) ?>
<?= html_button('createperson', 'Add Person') ?>
</form>
