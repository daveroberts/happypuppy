<h2><?= $article->name ?></h2>
<div>
	<?php echo $f->start("update") ?>
		<?= $f->hiddenID() ?>
		<?= $f->input("body") ?>
		<div><?php echo $f->submit("Update Article") ?></div>
	<?php echo $f->end() ?>
</div>
<div>
	<?php echo link_to("Cancel", "/article/show/".$article->slug) ?>
</div>