<?php

namespace sample;
class GameController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }

	function _list()
	{
		$this->games = Game::All();
		switch ($this->responds_to)
		{
			case 'txt':
				foreach($this->games as $game){
					print($game->name."\n");
				}
				$this->text_only = true;
				break;
			case 'xml':
				header("Content-type: text/xml"); 
				$this->render_text(Game::collectionToXML($this->games, array("platform")));
				break;
		}
	}
}

?>