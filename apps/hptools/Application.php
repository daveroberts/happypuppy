<?php

namespace hptools;
class Application extends \HappyPuppy\Application
{
	function defaultController(){ return "Service"; }
	// set variables here that are application wide
	// import libraries used in this application
	public function __init()
	{
		$this->title = "Happy Puppy Tools";
	}
	// This application can't be run in production
	public function isDebugApp(){ return true; }
}

?>
