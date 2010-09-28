<?php foreach($tables as $table): ?>
<p>
	<?= link_to_action($table->name.".yaml", "show", array($dbname, $table->name), "yaml") ?>
	<?= link_to_action($table->name.".class", "show", array($dbname, $table->name), "class") ?>
	<?= link_to_action($table->name.".html", "show", array($dbname, $table->name), "html") ?>
</p>
<?php endforeach; ?>

<?= link_to_controller("Create a new class from YAML", "class", "new") ?>