<h2><?= $article->name ?></h2>
<div><?= $article->getHTML() ?></div>
<? if (can("change", $article)): ?>
	<div><?= link_to("Edit", "/article/edit/".$article->slug) ?></div>
	<div><?= link_to("Delete", "/article/delete/".$article->id) ?></div>
<? endif; ?>
<? $linked_from = $article->getLinkedFrom(); ?>
<? if (count($linked_from) > 0): ?>
	<div>Linked from</div>
	<ul>
		<? foreach($linked_from as $linked_article): ?>
			<li><?= link_to($linked_article->name, "/article/show/".$linked_article->slug) ?></li>
		<? endforeach; ?>
	</ul>
<? endif; ?>