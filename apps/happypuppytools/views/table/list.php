<table>
<thead>
	<tr>
		<th>YAML</th>
		<th>Class</th>
		<th>HTML</th>
	</tr>
</thead>
<tbody>
<?php foreach($tables as $table): ?>
<tr>
	<td><?= link_to($table->name.".yaml", "/table/show/$dbname/".$table->name.".yaml") ?></td>
	<td><?= link_to($table->name.".class", "/table/show/$dbname/".$table->name.".class") ?></td>
	<td><?= link_to($table->name.".html", "/table/show/$dbname/".$table->name.".html") ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

<?=link_to("Create a new class from YAML", "/class/new")?>