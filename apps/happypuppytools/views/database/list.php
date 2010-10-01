<?php foreach($dbs as $db): ?>
<p><?= link_to($db, "/table/list/$db/") //link_to_controller($db, "table", "list", $db) ?></p>
<?php endforeach; ?>
