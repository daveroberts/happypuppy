<h2><?= $person->name ?> #<?= $person->id ?></h2>
<div><?= link_to('Edit', '/personAjax/edit/'.$person->id) ?></div>
<div><?= link_to('Person List', '/personAjax/list') ?></div>
