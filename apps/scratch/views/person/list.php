<h2>People</h2>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($people as $person):?>
			<?php echo PhpRender::render('person/_person', "person", $person) ?>
		<?php endforeach;?>
	</tbody>
</table>
<div><?php echo link_to("New Person", "new") ?></div>