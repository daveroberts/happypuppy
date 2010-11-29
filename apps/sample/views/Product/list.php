<?php echo form_start('list', array("method"=>"get")); ?>
<?php echo hidden("name", "value") ?>
<?php echo textbox("search", $s) ?>
<?php echo submit("Search") ?>
<?php echo form_end(); ?>

<table>
<thead>
	<tr>
		<?php $new_sort_dir = "DESC"; if ($sort_col == "name" && $sort_dir == "DESC"){ $new_sort_dir = "ASC"; } ?>
		<th><?php echo link_to("Name", "?sort_col=name&sort_dir=".$new_sort_dir."&".$state_params) ?></th>
		<?php $new_sort_dir = "DESC"; if ($sort_col == "price" && $sort_dir == "DESC"){ $new_sort_dir = "ASC"; } ?>
		<th><?php echo link_to("Price", "?sort_col=price&sort_dir=".$new_sort_dir."&".$state_params) ?></th>
	</tr>
</thead>
<tbody>
<?php $state_params = "&search=".$s."&page=".$page; ?>

<?php foreach($products as $product): ?>
<tr>
	<td><?php echo $product->name ?></td>
	<td><?php echo $product->price ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<div>Page <?php echo $page?> of <?php echo $total_pages?></div>
<div>
<?php $state_params = "&search=".$s."&sort_col=".$sort_col."&sort_dir=".$sort_dir; ?>
<?php if (($page - 1) > 0){ ?>
<span><?php echo link_to("Previous Page", "?page=".($page-1).$state_params)?></span>
<?php } ?>
<?php if (($page + 1) <= $total_pages){ ?>
<span><?php echo link_to("Next Page", "?page=".($page+1).$state_params)?></span>
<?php } ?>