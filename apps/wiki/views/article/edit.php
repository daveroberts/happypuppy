<h2><?= $article->name ?></h2>
<div>
	<?php echo $f->start("/article/update/".$article->id) ?>
		<div><?= $f->input("body", array("style"=>"width: 800px; height: 500px;")) ?><div>
		<div><?php echo $f->submit("Update Article") ?></div>
	<?php echo $f->end() ?>
</div>
<div>
	<?php echo link_to("Cancel", "/article/show/".$article->slug) ?>
</div>