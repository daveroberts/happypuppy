<h2><?= $person->name ?> #<?= $person->id ?></h2>
<div><?= link_to("Edit", "/person/edit/".$person->id) ?></div>
<div><?= link_to("Person List", "/person/list") ?></div>
