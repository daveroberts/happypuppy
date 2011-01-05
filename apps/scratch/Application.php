<?php
namespace scratch;
class Application extends \HappyPuppy\Application
{
	function defaultController(){ return "person"; }
	public function __init()
	{
		// This code will run before your controller's code is called
	}
}

?>