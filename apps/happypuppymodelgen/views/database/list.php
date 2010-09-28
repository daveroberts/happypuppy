<?php foreach($dbs as $db): ?>
<p><?= link_to_controller($db, "table", "list", $db) ?></p>
<?php endforeach; ?>
