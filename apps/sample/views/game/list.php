<?phpforeach($games as $game):?>
<div>
	<div><?php echo $game->name?></div>
	<div>For <?php echo $game->platform->name?></div>
</div>
<?phpendforeach;?>