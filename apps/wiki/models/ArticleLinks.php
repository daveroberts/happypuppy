<?php

namespace wiki;
class ArticleLinks extends \HappyPuppy\Model
{
	function __construct(){
		parent::__construct("article_links");
	}
	
	public static function SaveLinks($article, $links)
	{
		ArticleLinks::DeleteLinks($article->id);
		foreach($links as $link_text)
		{
			$article_link = new ArticleLinks();
			$article_link->from_article_id = $article->id;
			$article_link->to_article = sluggable($link_text);
			$article_link->save();
		}
	}
	
	private static function DeleteLinks($article_id)
	{
		if (!is_numeric($article_id)){ return true; }
		$sql = "Delete from article_links where from_article_id = ?";
		\HappyPuppy\DB::Exec($sql, $article_id);
	}
}