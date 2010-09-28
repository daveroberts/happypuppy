<form action='/personAjax/update' method='post'>
<?= html_hidden('person[id]', $person->id); ?>
<?= render_arr('personAjax/personform', array('person'=>$person)) ?>
<?= html_button('editperson', 'Edit Person') ?>
<div><?= link_to('/personAjax/show/'.$person->id, 'Cancel') ?></div>
</form>
