<table>
	<thead>
		<tr>
			<th>Hotel</th>
			<th>Room Number</th>
			<th>Code</th>
			<th>Type</th>
			<th>Available</th>
			<th>Price</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($rooms as $room): ?>
			<tr>
				<td><?= link_to($room->hotel->name, "/hotel/show/".$room->hotel_id) ?></td>
				<td><?= link_to($room->number, "/room/show/".$room->id) ?></td>
				<td><span style="font-family: monospace;"><?= $room->code ?></span></td>
				<td><?= link_to($room->type->name, "/type/show/".$room->type->id) ?></td>
				<td><?= $room->available_string ?></td>
				<td>$<?= $room->type->price ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
