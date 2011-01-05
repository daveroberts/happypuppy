<div>Are you sure you want to remove <?php echo $person->name ?></div>
<?php echo $f->start("self") ?>
<?php echo $f->hiddenID() ?>
<?php echo $f->submit("Remove Person") ?>
<?php echo $f->end() ?>
<div>
	<?php echo link_to("Back to list", "list") ?>
</div>