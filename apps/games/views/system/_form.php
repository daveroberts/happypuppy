<?php echo $f->hiddenID() ?>
<table>
	<tbody>
		<tr>
			<td><?php echo $f->label("name", "Name: ", array("id"=>"asdf")) ?></td>
			<td><?php echo $f->input("name") ?></td>
		</tr>
	</tbody>
</table>