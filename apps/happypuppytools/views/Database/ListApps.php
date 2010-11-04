<h2>List Apps</h2>
<? foreach($apps as $app): ?>
<div><?=link_to($app, "/database/migrate/".$app)?></div>
<? endforeach; ?>