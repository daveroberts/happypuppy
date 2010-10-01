<? foreach($violations as $violation): ?>
	<p><?=link_to($violation->id." - ".$violation->macro->name, "/violation/show/".$violation->id)?></p>
<? endforeach;?>

<div id="newViolation">
<?= $new_violation_form->start("create") ?>
<table>
	<thead></thead>
	<tbody>
		<tr>
			<td><?= $new_violation_form->label("macro", "Macro") ?></td>
			<td><?= $new_violation_form->input("macro") ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><?= $new_violation_form->submit("Add New Violation") ?></td>
		</tr>
	</tbody>
</table>
<?= $new_violation_form->end() ?>
</div>