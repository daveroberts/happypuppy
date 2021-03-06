<h2>Migrate</h2>

<div>DB Version: <?php echo $DBVersion?></div>
<div>Max Version: <?php echo $MaxVersion?></div>
<?php if ($MaxVersion == 0) { ?>
	<div>Migrations are searched for in /apps/<?php echo $app?>/db/migrations.php</div>
	<div>The file must contain a class named <?php echo $app?>Migrations</div>
	<div>The class must contain static methods named From0To1 and From1To0 (for down migrations)</div>
<?php } ?>

<?php if ($MaxVersion > $DBVersion) { ?>
<div>Your database can be updated to the latest version!</div>
<div>
	<?php echo form_start('/database/migrateTo/'.$app) ?>
		<input type="hidden" name="version" value="<?php echo $MaxVersion?>" />
		<input type="submit" value="Update Database" />
	<?php echo form_end() ?>
</div>
<?php } ?>
<?php if ($MaxVersion > 0) { ?>
<div>
	<?php echo form_start('/database/migrateTo/'.$app) ?>
		Change database version to <input type="text" name="version" value="<?php echo $MaxVersion?>" />
		<input type="submit" value="Change Database Version" />
	<?php echo form_end() ?>
</div>
<?php }?>
