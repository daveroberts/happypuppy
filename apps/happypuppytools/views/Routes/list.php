<h2>List of Routes</h2>
<?php foreach($pretty_routes as $app=>$app_route_list): ?>
	<h3><?= $app ?></h3>
	<table class="apptable">
		<thead>
			<tr>
				<th class="apptable_route">Route</th>
				<th class="apptable_controller">Controller</th>
				<th class="apptable_action">Action</th>
			</tr>
		</thead>
		<tbody>
	<?php foreach($app_route_list as $route): ?>
		<tr>
			<td><?= link_to_rawurl($route->GetRouteString(), $route->GetRouteString()); ?></td>
			<td><?=$route->controller?></td>
			<td><?=$route->action?></td>
		</tr>
	<?php endforeach; ?>
		</tbody>
	</table>
<?php endforeach; ?>