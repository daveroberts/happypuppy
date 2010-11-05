<?foreach($games as $game):?>
<div>
	<div><?=$game->name?></div>
	<div>For <?=$game->platform->name?></div>
</div>
<?endforeach;?>