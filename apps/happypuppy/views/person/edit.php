<form action='/person/update' method='post'>
<?= html_hidden('person[id]', $person['id']); ?>
<?= PhpRender::render('person/personform', 'person', $person) ?>
<?= html_button('editperson', 'Edit Person') ?>
<div><?= link_to_action("Cancel", "show", $person['id']) ?></div>
</form>