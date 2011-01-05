<div>Are you sure you want to delete <?php echo $game->name ?></div>
<?php echo $f->start("self") ?>
<?php echo $f->hiddenID() ?>
<?php echo $f->submit("Delete Game") ?>
<?php echo $f->end() ?>
<div>
	<?php echo link_to("Back to list", "/game/list") ?>
</div>