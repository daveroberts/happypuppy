<?

//xxxrequire_once($_ENV["app"]->root().'models/game.php');

class testController extends C
{
	public function test()
	{
		$game = Game::get(29);
		$this->render_text('Name ('.$game->name.')');
	}
}

?>