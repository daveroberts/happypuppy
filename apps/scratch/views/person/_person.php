<tr>
	<td><?php echo $person->name?></td>
	<td><?php echo link_to("Edit", "/person/edit/".$person->id) ?></td>
	<td><?php echo link_to("Delete", "/person/delete/".$person->id) ?></td>
</tr>