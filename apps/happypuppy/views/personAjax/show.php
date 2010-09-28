<h2><?= $person->name ?> #<?= $person->id ?></h2>
<div><?= link_to_action('Edit', 'edit', $person->id) ?></div>
<div><?= link_to_action('Person List', 'list') ?></div>
