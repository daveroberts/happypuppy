<?php

namespace hptools;
/**  
 * !DebugApp "Prevents this app from being used in production
 * !DefaultController Routes
 * */ 
class Application extends \HappyPuppy\Application
{
	// set variables here that are application wide
	// import libraries used in this application
	public function __init()
	{
		$this->title = "Happy Puppy Tools";
	}
}

?>