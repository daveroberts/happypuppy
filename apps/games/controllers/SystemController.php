<?php

namespace games;
class SystemController extends \HappyPuppy\Controller
{
	function create()
	{
		$this->system = System::BuildFromPost($_POST["System"]);
		$success = $this->system->save($error);
		if ($success)
		{
			setflash("Sys saved successfully");
			$this->redirectTo("/game/list");
		}
		else
		{
			setflash("Could not save Sys");
			$this->games = Game::All();
			$this->systems = System::All();
			$this->gf = new \HappyPuppy\form(new Game());
			$this->sf = new \HappyPuppy\form($this->system);
			$this->view_template = "game/list";
		}
	}
	function delete($system_id)
	{
		if (isset($_POST["System"]["id"]) && $_POST["System"]["id"] == $system_id)
		{
			$this->system = System::Get($_POST["System"]["id"]);
			$debug = array();
			$success = $this->system->destroy(false, $debug);
			if ($success)
			{
				setflash("Sys deleted successfully");
				$this->redirectTo("/game/list");
			}
			else
			{
				setflash("Could not delete sys");
				$this->f = new \HappyPuppy\form($this->system);
			}
		}
		else
		{
			$this->system = System::Get($system_id);
			$this->f = new \HappyPuppy\form($this->system);
		}
	}
	function test(){ $this->layout = false;}
}

?>