<h2>G</h2>
<table id="gamesTable">
	<thead>
		<tr>
			<th>Game</th>
			<th>System</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($games as $game):?>
			<?php echo PhpRender::render('game/_game', "game", $game) ?>
		<?php endforeach;?>
	<tbody>
</table>
<h2>S</h2>
<?php foreach($systems as $system):?>
<div>
	<h3><?php echo $system->name?> <?php echo link_to("Delete", "/system/delete/".$system->id) ?></h3>
	<table>
		<thead>
			<tr>
				<th>Game</th>
				<th>System</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($system->games as $game): ?>
				<?php echo PhpRender::render('game/_game', "game", $game) ?>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<?php endforeach;?>
<div>
	<h3>New G</h3>
	<?php echo $gf->start("create") ?>
		<?php echo PhpRender::render('game/_form', "f", $gf) ?>
		<div><?php echo $gf->submit("Add new G") ?></div>
	<?php echo $gf->end() ?>
</div>
<div>
	<h3>New Sys</h3>
	<?php echo $sf->start("/system/create") ?>
		<?php echo PhpRender::render('system/_form', "f", $sf) ?>
		<div><?php echo $sf->submit("Add new Sys") ?></div>
	<?php echo $sf->end() ?>
</div>