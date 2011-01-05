<?php
namespace games;
class Application extends \HappyPuppy\Application
{
	function defaultController(){ return "game"; }
	public function __init()
	{
		// This code will run before your controller's code is called
	}
}

?>