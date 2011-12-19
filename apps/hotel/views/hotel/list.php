<h1>Hotel List</h1>
<ul>
	<?php foreach($hotels as $hotel): ?>
		<li><?= link_to($hotel->name, "/hotel/show/".$hotel->id) ?></li>
	<?php endforeach; ?>
</ul>
