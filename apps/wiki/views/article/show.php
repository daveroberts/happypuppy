<h2><?= $article->name ?></h2>
<div><?= $article->getHTML() ?></div>
<div><?= link_to("Edit", "/article/edit/".$article->slug) ?></div>
<div><?= link_to("Delete", "/article/delete/".$article->id) ?></div>