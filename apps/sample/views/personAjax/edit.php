<form action='/personAjax/update' method='post'>
<?= html_hidden('person[id]', $person->id); ?>
<div><?= PhpRender::render_arr('personAjax/personform', array('person'=>$person)) ?></div>
<?= html_button('editperson', 'Edit Person') ?>
<div><?= link_to('Cancel', '/personAjax/show/'.$person->id) ?></div>
</form>
