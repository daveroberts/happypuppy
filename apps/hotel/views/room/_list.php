<table>
	<thead>
		<tr>
			<th>Room Number</th>
			<th>Code</th>
			<th>Type</th>
			<th>Available</th>
		</tr>
	</thead>
	<tbody>
		<? foreach($rooms as $room): ?>
			<tr>
				<td><?= $room->number ?></td>
				<td><?= $room->code ?></td>
				<td><?= $room->type->name ?></td>
				<td><? if ($room->available){ echo "Yes"; } else { echo "No"; } ?></td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>
