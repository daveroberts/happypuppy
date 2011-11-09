<ul>
	<?php foreach($articles as $article): ?>
		<li><?= link_to($article->name, "/article/show/".$article->slug) ?></li>
	<?php endforeach; ?>
</ul>