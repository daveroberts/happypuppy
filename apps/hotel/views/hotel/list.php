<h1>Hotel List</h1>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Number Rooms</th>
			<th>Available Rooms</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($hotels as $hotel): ?>
			<tr>
				<td><?= link_to($hotel->name, "/hotel/show/".$hotel->id) ?></td>
				<td><?= count($hotel->rooms) ?></td>
				<td><?= count($hotel->available_rooms) ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
