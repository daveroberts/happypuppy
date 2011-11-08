Are you sure you want to delete <?= $article->name ?>

<?php echo $f->start("/article/delete/".$article->id) ?>
	<div><?php echo $f->submit("Delete Article") ?></div>
<?php echo $f->end() ?>
<div><?= link_to("Cancel", "/article/show/".$article->slug) ?></div>