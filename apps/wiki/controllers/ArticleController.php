<?php

namespace wiki;
class ArticleController extends \HappyPuppy\Controller
{
	function index()
	{
	}
	/**
	* !Route GET, /article/show/$slug
	*/
	function show($slug)
	{
		$articles = Article::Where("slug = '?'", sluggable($slug));
		if ($articles == null)
		{
			$this->article = new Article();
			$this->article->name = $slug;
			$this->f = new \HappyPuppy\form($this->article);
			$this->view_template = 'article/doesntexist';
		}
		else
		{
			$this->article = reset($articles);
		}
	}
	
	/**
	* !Route GET, /article/edit/$slug
	*/
	function edit($slug)
	{
		$articles = Article::Where("slug = '?'", sluggable($slug));
		if ($articles == null)
		{
			$this->redirectTo("/article/show/".$slug);
		}
		else
		{
			$this->article = reset($articles);
			$this->f = new \HappyPuppy\form($this->article);
		}
	}
	
	function create()
	{
		$article = Article::BuildFromPost($_POST["Article"]);
		$article->save();
		setflash("Article created");
		$this->redirectTo("/article/show/".$article->name);
	}
	function update()
	{
		$this->article = Article::BuildFromPost($_POST["Article"]);
		$error = '';
		$debug = array();
		$success = $this->article->save($error, $debug);
		if ($success) {
			setflash("Article updated successfully");
			$this->article = Article::Get($this->article->id);
			$this->redirectTo("/article/show/".$this->article->slug);
		} else {
			setflash("Could not update article");
			$this->f = new \HappyPuppy\form($this->article);
			$this->view_template = "article/edit";
		}
	}
}

?>