<h2><?= $article->name ?></h2>
<div><?= linkdown(markdown($article->body)) ?></div>
<div><?= link_to("Edit", "/article/edit/".$article->slug) ?></div>