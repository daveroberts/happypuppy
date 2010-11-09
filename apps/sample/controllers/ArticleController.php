<?php

namespace sample;
/** So am I! */
class ArticleController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "frontpage"; }

	function frontpage()
	{
		$this->renderText("Welcome to the index page!");
	}
	
	/**
	* !Route GET, /$year/$month/$day/blog/$slug
	*/
	function article($year, $month, $day, $slug)
	{
		$this->renderText("On $month/$day/$year, this article was published \"$slug\"");
	}
	/**  
     * !Route GET, /hello/$first/$last 
     * */ 
	function greeting($first, $last)
	{
		$this->renderText("Well hello to you too $first $last!");
	}
	/**
		!Route GET, /news
		!Route GET, /currentevents
	*/
	function news()
	{
		$this->renderText("This is the news page");
	}
	function get($id)
	{
		/*$this->article = new \blog\Article();
		$this->article->id = $id;*/
	}
}
?>
