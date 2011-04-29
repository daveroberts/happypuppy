<div id="tags">
	<?php foreach($initialOptions as $opt): ?>
		<div><input id="chk<?php echo $opt ?>" type="checkbox" name="tag[]" value="<?php echo $opt ?>" /><label for="chk<?php echo $opt ?>"><?php echo $opt ?></label></div>
	<?php endforeach; ?>
</div>

<div>
<?php echo form_start("/AjaxTest/CreateOption") ?>
<?php echo textbox("option"); ?>
<?php echo submit("New Option", array("id"=>"AjaxNewOptionButton")) ?>
<?php echo form_end(); ?>
</div>