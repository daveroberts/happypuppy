<table>
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
		</tr>
	</thead>
	<tbody>
		<? foreach($violation->occurrences as $occurrence): ?>
			<? $empocc = $occurrence->employee_occurrence ?>
			<tr>
				<td><?=$empocc->firstname?></td>
				<td><?=$empocc->lastname?></td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>

<?=$f->start("/employee/occurrence/create")?>
<?=\HappyPuppy\HtmlHidden::make("violation_id", $violation->id)?>
<?=$f->label("lastname", "Last Name")?>
<?=$f->input("lastname")?>
<?=$f->label("firstname", "First Name")?>
<?=$f->input("firstname")?>
<?=$f->submit("Add new employee violation")?>
<?=$f->end()?>