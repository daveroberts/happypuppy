<?php

namespace games;
class GameController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }

	function _list()
	{
		$this->games = Game::All("order");
		$this->systems = System::All();
		$this->gf = new \HappyPuppy\form(new Game());
		$this->sf = new \HappyPuppy\form(new System());
		switch ($this->responds_to)
		{
			case 'txt':
				foreach($this->games as $game){
					print($game->name."\n");
				}
				$this->text_only = true;
				break;
			case 'xml':
				$this->renderXml(Game::collectionToXML($this->games, array("system"), array("system_id", "order")));
				break;
		}
	}
	function create()
	{
		$this->game = Game::buildFromPost($_POST["Game"]);
		$success = $this->game->save($error);
		if ($success)
		{
			setflash("G saved successfully");
			$this->redirectTo("list");
		}
		else
		{
			setflash("Could not save G");
			$this->games = Game::All();
			$this->systems = System::All();
			$this->gf = new \HappyPuppy\form($this->game);
			$this->sf = new \HappyPuppy\form(new System());
			$this->view_template = "game/list";
		}
	}
	function edit($game_id)
	{
		$this->game = Game::Get($game_id);
		$this->f = new \HappyPuppy\form($this->game);
	}
	function update()
	{
		$this->game = Game::buildFromPost($_POST["Game"]);
		$success = $this->game->save($error);
		if ($success) {
			setflash("G updated successfully");
			$this->redirectTo("list");
		} else {
			setflash("Could not update G");
			$this->games = Game::All();
			$this->systems = System::All();
			$this->gf = new \HappyPuppy\form($this->game);
			$this->sf = new \HappyPuppy\form(new System());
			$this->view_template = "game/edit";
		}
	}
	function delete($game_id)
	{
		if (isset($_POST["Game"]["id"]))
		{
			$this->game = Game::Get($_POST["Game"]["id"]);
			$success = $this->game->destroy();
			if ($success)
			{
				setflash("G deleted successfully");
				$this->redirectTo("list");
			}
			else
			{
				setflash("Could not delete G");
				$this->f = new \HappyPuppy\form($this->game);
			}
		}
		else
		{
			$this->game = Game::Get($game_id);
			$this->f = new \HappyPuppy\form($this->game);
		}
	}
	function reorder()
	{
		$ids = $_POST["IDS"];
		$order = 1;
		$sql = "";
		$success = true;
		foreach($ids as $id)
		{
			$g = Game::Get($id);
			$g->order = $order;
			$error;
			$success = $g->save($error);
			if (!$success){ break; }
			$order++;
		}
		$data = array('success'=>$success);
		$this->renderJSON(json_encode($data));
	}
}

?>