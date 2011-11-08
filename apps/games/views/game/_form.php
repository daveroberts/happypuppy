<?php echo $f->hiddenID() ?>
<table>
	<tbody>
		<tr>
			<td><?php echo $f->label("name", "Name: ") ?></td>
			<td><?php echo $f->input("name") ?></td>
		</tr>
		<tr>
			<td><?php echo $f->label("system", "System: ") ?></td>
			<td><?php echo $f->input("system") ?></td>
		</tr>
	</tbody>
</table>