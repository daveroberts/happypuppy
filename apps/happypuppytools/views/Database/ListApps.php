<h2>List Apps</h2>
<?php foreach($apps as $app): ?>
<div><?php echo link_to($app, "/database/migrate/".$app)?></div>
<?php endforeach; ?>