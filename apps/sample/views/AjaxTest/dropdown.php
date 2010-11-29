<div>
<select id="tags">
	<?php foreach($initialOptions as $opt): ?>
		<option><?php echo $opt ?></option>
	<?php endforeach; ?>
</select>
</div>

<div>
<?php echo form_start("/AjaxTest/CreateOption") ?>
<?php echo textbox("option"); ?>
<?php echo submit("New Option", array("id"=>"AjaxNewOptionButton")) ?>
<?php echo form_end(); ?>
</div>