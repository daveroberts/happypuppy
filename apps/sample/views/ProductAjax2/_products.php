<table>
	<thead>
		<tr>
			<th><?php echo $pg->colHeader("Name", "name") ?></th>
			<th><?php echo $pg->colHeader("Price", "price") ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($products as $product): ?>
			<tr>
				<td><?php echo $product->name ?></td>
				<td><?php echo $product->price ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<div>Page <?php echo $pg->currentPage() ?> of <?php echo $pg->totalPages() ?></div>
<div>

	<?php if (!$pg->atFirstPage()): ?>
		<span><?php echo $pg->previousPage() ?></span>
	<?php endif; ?>

	<?php if (!$pg->atLastPage()): ?>
		<span><?php echo $pg->nextPage() ?></span>
	<?php endif; ?>

</div>