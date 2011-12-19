<?= link_to("Back to hotel", "/hotel/show/".$room->hotel_id) ?>

<table>
	<tbody>
		<tr>
			<th>Hotel</th>
			<td><?= $room->hotel->name ?></td>
		</tr>
		<tr>
			<th>Room Number</th>
			<td><?= $room->number ?></td>
		</tr>
		<tr>
			<th>Code</th>
			<td><span style="font-family: monospace;"><?= $room->code ?></span></td>
		</tr>
		<tr>
			<th>Type</th>
			<td><?= $room->type->name ?></td>
		</tr>
		<tr>
			<th>Available</th>
			<td><?= $room->available_string ?></td>
		</tr>
		<tr>
			<th>Price</th>
			<td>$<?= $room->type->price ?></td>
		</tr>
	</tbody>
</table>

<h2>Available Upgrades</h2>
<?= partial("room/_list", "rooms", $room->getUpgradableRooms()) ?>