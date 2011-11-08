<?php

namespace wiki;
class ArticleController extends \HappyPuppy\Controller
{
	function index()
	{
	}
	
	function _list()
	{
		$this->articles = Article::All();
	}
	
	function _new()
	{
		$this->article = new Article();
		if (isset($_GET["name"]))
		{
			$this->article->name = $_GET["name"];
		}
		$this->f = new \HappyPuppy\form($this->article);
	}
	
	function create()
	{
		$article = new Article();
		$article->build($_POST["Article"]);
		$article->save();
		setflash("Article created");
		$this->redirectTo("/article/show/".$article->name);
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
			if (isset($_GET["name"]))
			{
				$this->article->name = $_GET["name"];
			}
			$this->f = new \HappyPuppy\form($this->article);
			setflash("Page doesn't yet exist");
			$this->view_template = 'article/new';
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
	
	function update($id)
	{
		$this->article = Article::Get($id);
		$this->article->build($_POST["Article"]);
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
	
	function delete($id)
	{
		$this->article = Article::Get($id);
		$name = $this->article->name;
		if ($_SERVER['REQUEST_METHOD'] == "GET")
		{
			$this->f = new \HappyPuppy\form($this->article);
		}
		else
		{
			$this->article->destroy();
			setflash($name." delted");
			$this->redirectTo("/article/list");
		}
	}
}

?>