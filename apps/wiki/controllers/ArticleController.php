<?php

namespace wiki;

class ArticleController extends \HappyPuppy\Controller
{
	function __init()
	{
	}

	function index()
	{
		$dbh = new \PDO("mysql:host=localhost;dbname=wiki", 'wiki', 'J9Zungb3qVUh7zP5PN8WQCgatR9pBqgWJNwUG4qZKTkKnm3u');
		$dbh->setAttribute(\PDO::ATTR_AUTOCOMMIT,FALSE);
		$dbh->beginTransaction();
		$sql = "CREATE TABLE IF NOT EXISTS `d` (`id` int(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
		$dbh->exec($sql);
		/*$stm = $dbh->prepare($sql);
		$stm->execute(null);*/
		$sql = "CREATE TABLE IF NOT EXISTS `e` (`id` int(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
		$dbh->exec($sql);
		/*$stm = $dbh->prepare($sql);
		$stm->execute(null);*/
		$sql = "CREATE TABLE IF NOT EXISTS `f` (`id` int(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
		$dbh->exec($sql);
		/*$stm = $dbh->prepare($sql);
		$stm->execute(null);*/
		$dbh->rollBack();
		$dbh->setAttribute(\PDO::ATTR_AUTOCOMMIT,TRUE);
		$this->renderText("Done");
		//$this->redirectTo("/article/show/MainPage");
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

	function edit($slug)
	{
		$reason = "";
		if (cant("edit", "articles", $reason))
		{
			setflash("You are not allowed to edit articles because: ".$reason);
			$this->redirectTo("/article");
		}
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
		if (cant("edit", "articles", $reason))
		{
			setflash($reason);
			$this->redirectTo("/article");
		}
		$this->article = Article::Get($id);
		$this->article->build($_POST["Article"]);
		$success = $this->article->save();
		if ($success)
		{
			setflash("Article updated successfully");
			$this->article = Article::Get($this->article->id);
			$this->redirectTo("/article/show/".$this->article->slug);
		}
		else
		{
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
