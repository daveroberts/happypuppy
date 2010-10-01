<? foreach($macros as $macro): ?>
	<p><?=$macro->name?></p>
<? endforeach;?>

<div id="newMacro">
<?= $new_macro_form->start("create") ?>
<table>
	<thead></thead>
	<tbody>
		<tr>
			<td><?= $new_macro_form->label("name", "Name") ?></td>
			<td><?= $new_macro_form->input("name") ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><?= $new_macro_form->submit("Add New Macro") ?></td>
		</tr>
	</tbody>
</table>
<?= $new_macro_form->end() ?>
</div>